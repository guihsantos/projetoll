<?php

namespace App\Presenters;

use App\Transformers\ComandaTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ComandaPresenter.
 *
 * @package namespace App\Presenters;
 */
class ComandaPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ComandaTransformer();
    }
}
