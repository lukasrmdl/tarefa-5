<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'qtd_estoque',
        'importado'
    ];

    public function fornecedor(){
        return $this->belongsTo(Fornecedor::class);
    }
}