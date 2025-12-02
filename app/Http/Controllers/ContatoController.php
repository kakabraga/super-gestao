<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use Illuminate\Validation\Rule;
class ContatoController extends Controller
{
    public function contato()
    {
        return view("site.contato");
    }
    public function salvar(Request $request)
    {
        // var_dump($_POST);
        // $nome = $request->mensagem;
        // echo "<pre>";
        // print_r($request->all());
        // echo "<pre>";

        $request->validate([
            'nome' => ['required', Rule::notIn(['caue', 'Cauê'])],
            'telefone' => ['required', 'string'],
            'email' => ['required'],
            'motivo_contato' => ['required'],
            'mensagem' => ['required']
        ]);
        // $contato = new SiteContato();
        // SiteContato::create($request->all());
        // $contato->create($request->all());
        return redirect()->route("site.contato");
    }
}
