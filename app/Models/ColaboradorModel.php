<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColaboradorModel extends Model
{
    protected $table = 'colaborador';

    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'data_nascimento',
        'telefone',
        'celular',
        'cep',
        'uf',
        'cidade',
        'bairro',
        'logradouro',
        'numero',
        'complemento',
    ];

    use HasFactory;
}
