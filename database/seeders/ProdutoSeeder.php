<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produto = new Produto();
        $produto->nome = 'Oi';
        $produto->descricao = '23232';
        $produto->peso = 1;
        $produto->unidade_id = 2;
        $produto->save();
    }
}
