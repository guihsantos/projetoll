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
class PedidosController extends Controller
{
    
    protected $repository;

   
    protected $validator;

    public function __construct(PedidoRepository $repository, PedidoValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    
    public function index()
    {
        //$produtos = $this->repository->all();
        $produtos = \App\Entities\Produto::all();
       // dd($produtos);
        return view('pedidos.index',[
            'produtos' => $produtos,

        ]);
        
    }

    public function finalizar(){
        return view('pedidos.finalizar');
    }

    public function store(PedidoCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $pedido = $this->repository->create($request->all());

            $response = [
                'message' => 'Pedido created.',
                'data'    => $pedido->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

   
    public function show($id)
    {
        $pedido = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $pedido,
            ]);
        }

        return view('pedidos.show', compact('pedido'));
    }

   
    public function edit($id)
    {
        $pedido = $this->repository->find($id);

        return view('pedidos.edit', compact('pedido'));
    }

   
    public function update(PedidoUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $pedido = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Pedido updated.',
                'data'    => $pedido->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


   
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Pedido deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Pedido deleted.');
    }
}
