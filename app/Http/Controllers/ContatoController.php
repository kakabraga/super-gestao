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
        $request->validate([
            'nome' => ['required', 'max:3', 'string'],
            'sobrenome' => ['required', 'string'],
            'telefone' => ['required', 'string'],
            'email' => ['required', 'unique:site_contatos'],
            'motivo_contatos_id' => ['required'],
            'mensagem' => ['required']
        ]);
        $contato = new SiteContato($request->all());
        if ($contato->save()) {
            return redirect()
                ->route('site.index');
        }
    }

    public function confirmaSave()
    {
        $dados = session('dados');

        // se acessar direto sem salvar
        if (!$dados) {
            return redirect()->route('site.index');
        }

        return view('site.confirma_save', compact('dados'));
    }

}
