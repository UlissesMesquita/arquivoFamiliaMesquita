<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anexo extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'nome_anexo',
        'path_anexo',
        'extensao_anexo',
        'arquivos_id'
    ];

    public function arquivo(): HasOne{
        return $this->hasOne(Arquivo::class, 'arquivos_id', 'anexos_id',);
    }
}
