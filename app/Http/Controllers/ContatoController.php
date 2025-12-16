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
            'nome' => ['required', Rule::notIn(['caue', 'Cauê'])],
            'sobrenome' => ['required', 'string'],
            'telefone' => ['required', 'string'],
            'email' => ['required'],
            'motivo_contatos_id' => ['required'],
            'mensagem' => ['required']
        ]);
        $contato = new SiteContato($request->all());
        if($contato->save()){
            return redirect()->route('site.confirma_save')->with('dados', $contato);
        }
        return redirect()->route('site.index');
    }

    public function confirmaSave () {
        return view('site.confirma_save');
    }

    // public function getMotivoContato()
    // {
    //     $motivo_contato = new MotivoContato();
    //     $motivo_contato::all();
    //     return view("site.contato", ['motivo_contato'])
    // }
}
