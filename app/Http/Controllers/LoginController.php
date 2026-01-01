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
        $validated = $request->validate(
            [
                'name'  => ['required', 'max:255'],
                'password' => ['required'],
                'email' => ['required', 'email', 'unique:users']
            ],
            
                $this->feedback()
            
        );
        User::create($validated);
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
}
