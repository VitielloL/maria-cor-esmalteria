<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(popula_cliente::class);
        $this->call(popula_colaborador::class);
        $this->call(popula_material::class);
        $this->call(popula_servico::class);
        $this->call(popula_user::class);
    }
}
