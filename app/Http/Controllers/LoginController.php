<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\Mime\Test\Constraint\EmailTextBodyContains;

class LoginController extends Controller
{
    public function loginView(Request $request)
    {
        return view('site.login', [
            'auth' => $request->query('auth', 'login')
        ]);
    }

    public function registerView(Request $request)
    {
        return view('site.login', [
            'auth' => $request->query('auth', 'register')
        ]);
    }
    public function login(Request $request)
    {
        $usuario = (new User)->verificaSeUsuarioExiste($request->email, $request->password);
        if ($usuario) {
            return $this->inciaSessao($usuario);
        }
        return redirect()->route('site.login.view', )
            ->withErrors(['login_error' => 'Email ou senha incorretos!']);
    }

    public function salvar(Request $request)
    {
        if (!$this->senhaValida($request->password, $request->password_confirmation)) {
            return redirect()
                ->route('site.login.view')
                ->withErrors(['password' => 'Senha não informada']);
        }

        $validated = $this->validaDados($request);
        $this->criarUsuario($validated);
        return redirect()
            ->route('app.home');
    }

    public function feedback(): array
    {
        return [
            'name.max' => 'Tamanho máximo excedido',
            'email.unique' => 'Este e-mail já existe!',
            'email.email' => 'Este email é inválido',
            'required' => 'O campo :attribute é obrigatório!',
            'password.min' => 'Senha dever ter um mínimo de 8 caracteres!',
            'password.max' => 'Senha dever ter um maxímo de 24 caracteres!'
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

    public function criarUsuario(array $dados): void
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
                'name' => ['required', 'max:255'],
                'password' => ['required', 'min:8', 'max:24'],
                'email' => ['required', 'email', 'unique:users']
            ],

            $this->feedback()

        );
    }

    public function emailBoasVindas(String $email) {
        return Email::EmailTextBodyContains('oi');
    }

    public function inciaSessao(User $user)
    {
        session([
            'nome' => $user->name,
            'email' => $user->email,
            'user_id' => $user->id,
        ]);
        return redirect()->route('app.home');
    }

    public function logout() {
        echo "saiu";
    }
}
 