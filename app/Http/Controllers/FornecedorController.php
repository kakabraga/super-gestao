<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{

    public function index()
    {
        return view('site.app.fornecedor.index', ['menu' => 'site.app.layouts._partials.topo']);
    }
    public function save(Request $request)
    {

        $validate = $request->validate($this->regras(), $this->feedback());
        Fornecedor::create($validate);
        return redirect()->route('app.fornecedor.adicionar')->with('message', 'Fornecedor cadastrado com sucesso!');
    }

    public function listar(Request $request)
    {
        $query = Fornecedor::query();

        foreach ($request->except('_token') as $campo => $valor) {
            if (!empty($valor)) {
                $query->where($campo, 'like', '%' . $valor . '%');
            }
        }

        $fornecedores = $query->get();
        return view('site.app.fornecedor.listar')->with('fornecedores', $fornecedores);
    }
    public function adicionar(Request $request)
    {

        return view('site.app.fornecedor.adicionar');
    }

    public function regras()
    {
        return [
            'nome' => ['required', 'min:5', 'max:50'],
            'site' => ['required', 'min:10', 'max:100'],
            'uf' => ['required', 'max:2'],
            'email' => ['required', 'email']
        ];
    }

    public function feedback()
    {
        return [
            'nome.required' => 'O nome é obrigatório.',
            'email.required' => 'O nome é obrigatório.',
            'nome.min' => 'O nome deve ter no mínimo :min caracteres.',
            'site.required' => 'O site é obrigatório.',
            'uf.size' => 'A UF deve ter exatamente 2 caracteres.',
            'uf.required' => 'A UF deve ter exatamente 2 caracteres.',
            'email.email' => 'Informe um e-mail válido.',
        ];
    }
}
