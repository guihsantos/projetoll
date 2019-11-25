<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\PedidoCreateRequest;
use App\Http\Requests\PedidoUpdateRequest;
use App\Repositories\PedidoRepository;
use App\Validators\PedidoValidator;

/**
 * Class PedidosController.
 *
 * @package namespace App\Http\Controllers;
 */
class LanchesController extends Controller
{
    /**
     * @var PedidoRepository
     */
    protected $repository;

    /**
     * @var PedidoValidator
     */
    protected $validator;

    /**
     * PedidosController constructor.
     *
     * @param PedidoRepository $repository
     * @param PedidoValidator $validator
     */
    public function __construct(PedidoRepository $repository, PedidoValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

 
    public function index()
    {

        return view('lanches.index');
        
    }
}