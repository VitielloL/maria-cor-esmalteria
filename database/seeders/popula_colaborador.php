<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class popula_colaborador extends Seeder
{
    public function run()
    {
        DB::table('colaborador')->insert([
            'cpf' => '02345678901',
            'nome' => 'João da Silva',
            'data_nascimento' => '1996-04-07 00:00:00.000000',
            'telefone' => '11-1111-1111',
            'celular' => '11-1111-1111',
            'email' => 'opaitestatudo@gmail.com',
            'cep' => '11111111',
            'bairro' => 'Centro',
            'logradouro' => 'Rua Teste',
            'numero' => '1',
            'complemento' => 'Apto 1',
            'cidade' => 'São Paulo',
            'uf' => 'SP',
        ]);
    }
}
