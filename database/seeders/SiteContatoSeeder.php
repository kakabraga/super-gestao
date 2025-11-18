<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contato = new SiteContato();
        $contato->nome = 'Oi';
        $contato->telefone = '23232';
        $contato->email = 'blablablaS';
        $contato->motivo_contato = 1;
        $contato->save();
    }
}
