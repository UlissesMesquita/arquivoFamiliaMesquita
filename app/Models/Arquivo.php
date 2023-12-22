<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Arquivo extends Model
{
    use HasFactory;
    protected $fillable = [
        'data_vencimento',
        'data_pagamento',
        'nome_conta',
        'descricao',
        'status_pagamento',
        'categoria'
    ];

    public function anexos(): HasMany{
        return $this->hasMany(Anexo::class, 'arquivos_id', 'anexos_id', );
    }
}
