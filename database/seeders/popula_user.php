<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class popula_user extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'desenvolvedor',
            'email' => 'desenvolvimento@crescersci.com.br',
            'password' => bcrypt('123456')
        ]);
    }
}
