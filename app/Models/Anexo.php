<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Anexo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_anexo',
        'path_anexo'
    ];

    public function arquivo(): HasOne{
        return $this->hasOne(Arquivo::class, 'arquivos_id', 'anexos_id',);
    }
}
