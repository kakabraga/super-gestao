<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
class ContatoController extends Controller
{
    public function create(Request $request) {
        // var_dump($_POST);
        // $nome = $request->mensagem;
        // echo "<pre>";
        // print_r($request->all());
        // echo "<pre>";

        // $contato = new SiteContato();
        // $contato->nome = $request->nome;
        // $contato->telefone = $request->telefone;
        // $contato->email = $request->email;
        // $contato->mensagem = $request->mensagem;
        // $contato->sobrenome = $request->sobrenome;
        // $contato->motivo_contato = $request->motivo_contato;
        // $contato->save();

        // $contato = new SiteContato();
        // $contato->create($request->all());
        return redirect()->route("site.contato");
    }
    public function contato() {
        return view("site.contato");
    }
}
