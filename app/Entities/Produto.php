<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;


class Produto extends Model implements Transformable
{
    use TransformableTrait;
    

    protected $fillable = ['nome','descricao','tipoProduto','preco','qtde'];

    public function itemProduto(){

        return $this->belongsTo(ItemProduto::class);

    }

}
