<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Comanda;

/**
 * Class ComandaTransformer.
 *
 * @package namespace App\Transformers;
 */
class ComandaTransformer extends TransformerAbstract
{
    /**
     * Transform the Comanda entity.
     *
     * @param \App\Entities\Comanda $model
     *
     * @return array
     */
    public function transform(Comanda $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
