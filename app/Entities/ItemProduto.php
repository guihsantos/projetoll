<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class ItemProduto.
 *
 * @package namespace App\Entities;
 */
class ItemProduto extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['pedido_id','produto_id','valor','descricao','qtde'];

   

}
