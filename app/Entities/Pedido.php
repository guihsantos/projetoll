<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Pedido.
 *
 * @package namespace App\Entities;
 */
class Pedido extends Model implements Transformable
{
    use TransformableTrait;

   
    protected $fillable = ['user_id','comanda_id','valortotal','produto_id'];

    public function itemProduto(){
        return $this->belongsTo(ItemProduto::class);
    }
    public function produto(){
        return $this->belongsTo(Produto::class);
    }

}
