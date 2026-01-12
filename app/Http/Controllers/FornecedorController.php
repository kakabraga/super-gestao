<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{

    public function index()
    {
        return view('site.app.fornecedor.index', ['menu' => 'site.app.layouts._partials.topo']);
        // return view('app.fornecedor.index');
    }
    public function save(Request $request) {

    $validate = $request->validate([
            'nome' => ['required', 'min:5', 'max:50'],
            'site' => ['required', 'min:10', 'max:100'],
            'uf'   => ['required', 'max:2'],
            'email'=> ['required', 'email']
        ]);

        Fornecedor::create($validate);
        return redirect()->route('app.fornecedor.adicionar')->with('message','Fornecedor cadastrado com sucesso!');
    }

    public function listar() {
        return view('site.app.fornecedor.listar');
    }
    public function adicionar() {
        return view('site.app.fornecedor.adicionar');
    }
}
