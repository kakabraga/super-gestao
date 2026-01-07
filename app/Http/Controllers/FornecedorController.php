<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{

    public function index()
    {
        return view('site.app.fornecedor', ['menu' => 'site.app.layouts._partials.topo2']);
        // return view('app.fornecedor.index');
    }
}
