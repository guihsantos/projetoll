<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Comanda.
 *
 * @package namespace App\Entities;
 */
class Comanda extends Model implements Transformable
{
    use TransformableTrait;

  
    protected $fillable = ['valorTotal','mesa',];


    public function pedido(){

        return $this->belongsTo(Pedido::class);

    }
}
