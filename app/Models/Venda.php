<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'produto_id');
    }
    protected $table = 'vendas';


    protected $fillable = [
        'produto_id',
        'unid_preco',
        'quantidade',
        'forma_pagamento',
        'parcelas',
    ];
    public const FORMAS_PAGAMENTO = ['debito', 'credito', 'pix', 'dinheiro'];

}

