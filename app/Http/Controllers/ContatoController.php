<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato() {
        // var_dump($_POST);
        // $nome = $_POST['nome'];
        // echo $nome;
        return view("site.contato");
    }
}
