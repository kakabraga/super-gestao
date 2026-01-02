<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login');
    }

    public function salvar(Request $request)
    {
        if (!$this->senhaValida($request->password, $request->password_confirmed)) {
            return redirect()
                ->route('site.index')
                ->withErrors(['password' => 'Senha não informada']);
        }

        $validated = $this->validaDados($request);
        $this->criarUsuairo($validated);
        return redirect()->route('site.login');
    }

    public function feedback(): array
    {
        return [
            'name.max' => 'Tamanho máximo excedido',
            'email.unique' => 'Este e-mail já existe!',
            'email.email' => 'Este email é inválido',
            'required' => 'O campo :attribute é obrigatório!'
        ];
    }
    public function senhaValida(?string $password, ?string $confirmed): bool
    {
        if ($password === null || $confirmed === null) {
            return false;
        }

        if ($password === '' || $confirmed === '') {
            return false;
        }

        return $password === $confirmed;
    }

    public function criarUsuairo(array $dados): void
    {
        User::create([
            'name' => $dados['name'],
            'email' => $dados['email'],
            'password' => $dados['password'],
        ]);
    }
    public function validaDados(Request $request): array
    {
        return $request->validate(
            [
                'name'  => ['required', 'max:255'],
                'password' => ['required'],
                'email' => ['required', 'email', 'unique:users']
            ],

            $this->feedback()

        );
    }
}
