<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{

    public function index() {
        $fornecedores = [
            1 => ['nome' => 'fornecedor 2', 'status' => 'ativo'],
            2 => ['nome' => 'fornecedor', 'status' => 'N'],
            3 => ['nome' => 'fornecedor 2', 'status' => 'ativo'],
            4 => ['nome' => 'fornecedor', 'status' => 'N'],
            5 => ['nome' => 'fornecedor 2', 'status' => 'ativo'],
            6 => ['nome' => 'fornecedor 2', 'status' => 'ativo'],
            7 => ['nome' => 'fornecedor 2', 'status' => 'ativo'],
            8 => ['nome' => 'fornecedor 2', 'status' => 'ativo']
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
        // return view('app.fornecedor.index');
    }
}
 