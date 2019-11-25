<?php

namespace App\Presenters;

use App\Transformers\ItemProdutoTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ItemProdutoPresenter.
 *
 * @package namespace App\Presenters;
 */
class ItemProdutoPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ItemProdutoTransformer();
    }
}
