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
        print_r($_POST);
        // $nome = $request->mensagem;
        // echo "<pre>";
        // print_r($request->all());
        // echo "<pre>";

        $request->validate([
            'nome' => ['required', Rule::notIn(['caue', 'Cauê'])],
            'telefone' => ['required', 'string'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'motivo_contato' => ['required'],
            'mensagem' => ['required']
        ]);
        $contato = new SiteContato();
        // SiteContato::create($request->all());
        $contato->create($request->all());
        return redirect()->route("site.contato");
    }

    // public function getMotivoContato()
    // {
    //     $motivo_contato = new MotivoContato();
    //     $motivo_contato::all();
    //     return view("site.contato", ['motivo_contato'])
    // }
}
