<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arquivo extends Model
{
    use HasFactory;
    protected $fillable = [
        'data_vencimento',
        'data_pagamento',
        'nome_conta',
        'descricao',
        'status_pagamento'
    ];
}
