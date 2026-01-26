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
        $validated = $request->validate($this->regras(), $this->feedback());
        $this->verificaInput($request, $validated);
        return redirect()->route('app.fornecedor.adicionar')->with('message', 'Fornecedor cadastrado com sucesso!');
    }

    public function listar(Request $request)
    {
        $query = Fornecedor::query();
        foreach ($request->except('_token', 'page') as $campo => $valor) {
            if (!empty($valor)) {
                $query->where($campo, 'like', '%' . $valor . '%');
            }
        }

        
        $fornecedores = $query->paginate(5);
        return view('site.app.fornecedor.listar')->with('fornecedores', $fornecedores)
        ->with('total', count($fornecedores))
        ->with('request', $request->all());
    }
    public function adicionar(Request $request)
    {

        return view('site.app.fornecedor.adicionar');
    }

    public function verificaInput(Request $request, $validated)
    {
        if ((int) $request->id_fornecedor > 0) {
            $this->editaFornecedor($validated, (int) $request->id_fornecedor);
            return redirect()
                ->route('app.fornecedor.editar', ['id' => $request->id_fornecedor])
                ->with('message', 'Fornecedor atualizado com sucesso!');
        }
        return $this->criaFornecedor($validated);
    }

    public function criaFornecedor($validated)
    {
        return Fornecedor::create($validated);
    }

    public function editaFornecedor($dados, $id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->update($dados);

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

    public function editar($id)
    {
        $fornecedor = Fornecedor::find($id);
        return view('site.app.fornecedor.adicionar', compact('fornecedor'));
    }
    public function excluir($id)
    {
        Fornecedor::destroy($id);
        return  redirect()->route('app.fornecedor.listar')->with('message', 'Fornecedor excluido com sucesso!');
    }
}
