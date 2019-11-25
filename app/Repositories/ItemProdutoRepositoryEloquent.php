<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ItemProdutoRepository;
use App\Entities\ItemProduto;
use App\Validators\ItemProdutoValidator;

/**
 * Class ItemProdutoRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ItemProdutoRepositoryEloquent extends BaseRepository implements ItemProdutoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ItemProduto::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ItemProdutoValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
