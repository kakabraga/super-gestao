<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $idade, int $salario) {
        // return 
        // view('site.teste', [
        //     'idade' => $idade,
        //     'salario' => $salario
        // ]);

        // return view('site.teste', compact('idade', 'salario'));

        return view('site.teste')
        ->with('idade', $idade)
        ->with('salario', $salario);
    }
}
