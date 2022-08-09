<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class popula_servico extends Seeder
{
    public function run()
    {
        DB::table('servico')->insert([
            'titulo' => 'fazer sombrancelha',
            'valor' => 30,
            'descricao' => 'sombrancelha de tanajura nao!!'
        ]);
    }
}
