<?php

namespace App\Models;
use App\Models\ColaboradorModel;
use App\Models\ClienteModel;
use App\Models\MaterialModel;
use App\Models\ServicoModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordem_ServicoModel extends Model
{
    protected $table = 'ordem_servico';

    protected $fillable = [
        'data_inicio',
        'data_previsao',
        'data_fim',
        'valor_total_material',
        'valor_servico',
        'valor_pago',
        'status_pagamento',
        'servico',
        'material',
        'cliente',
        'colaborador',
    ];

    public function clientes()
    {
        return $this->belongsTo(ClienteModel::class, 'cliente', 'id');
    }

    public function colaboradores()
    {
        return $this->belongsTo(ColaboradorModel::class, 'colaborador', 'id');
    }

    public function servicos()
    {
        return $this->belongsTo(ServicoModel::class, 'servico','id');
    }

    public function materiais()
    {
        return $this->belongsTo(MaterialModel::class, 'material','id');
    }

    use HasFactory;
}
