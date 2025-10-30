<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $fillable = [
        'preco',
        'nome',
        'descricao',
        'quantidade',
        'quantidade_minima'
    ];

        public function movimentacao()
     {
         return $this->hasMany(Movimentacoes::class);
     }

}
