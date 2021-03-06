<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\ItemProduto;

/**
 * Class ItemProdutoTransformer.
 *
 * @package namespace App\Transformers;
 */
class ItemProdutoTransformer extends TransformerAbstract
{
    /**
     * Transform the ItemProduto entity.
     *
     * @param \App\Entities\ItemProduto $model
     *
     * @return array
     */
    public function transform(ItemProduto $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
