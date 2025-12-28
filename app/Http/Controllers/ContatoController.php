<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use Illuminate\Http\Request;
use App\Models\SiteContato;
use Illuminate\Validation\Rule;

class ContatoController extends Controller
{
    public function contato()
    {
        $motivo_contato = MotivoContato::all();
        return view("site.contato", ['titulo' => 'Contato (teste)', 'motivo_contato' => $motivo_contato]);
    }
    public function salvar(Request $request)
    {
        $validated = $request->validate(
            $this->regras(),
            $this->feedback()
        );
        SiteContato::create($validated);
        return redirect()->route('site.index');
    }

    public function confirmaSave()
    {
        $dados = session('dados');
        if (!$dados) {
            return redirect()->route('site.index');
        }

        return view('site.confirma_save', compact('dados'));
    }

    public function regras(): array
    {
        return [
            'nome' => ['required', 'string', 'max:255', 'unique:site_contatos'],
            'sobrenome' => ['required', 'string', 'max:255'],
            'telefone' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:site_contatos'],
            'motivo_contatos_id' => ['required'],
            'mensagem' => ['required']
        ];
    }
    public function feedback(): array
    {
        return [
            'nome.max' => 'Tamanho máximo excedido, cara!',
            'nome.required' => 'O campo nome é obrigatório!',
            'email.unique' => 'Este e-mail já existe!',
            'required' => 'O campo :attribute é obrigatório!'
        ];
    }
}
