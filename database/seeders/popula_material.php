<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class popula_material extends Seeder
{
    public function run()
    {
        DB::table('material')->insert([
            'titulo' => 'esmalte vermelho do naruto',
            'quantidade' => 0,
            'valor' => 150,
            'descricao' => 'muito usado pelo naruto'
        ]);
    }
}
