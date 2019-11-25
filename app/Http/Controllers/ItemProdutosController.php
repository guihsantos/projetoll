<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ItemProdutoCreateRequest;
use App\Http\Requests\ItemProdutoUpdateRequest;
use App\Repositories\ItemProdutoRepository;
use App\Validators\ItemProdutoValidator;

/**
 * Class ItemProdutosController.
 *
 * @package namespace App\Http\Controllers;
 */
class ItemProdutosController extends Controller
{
    /**
     * @var ItemProdutoRepository
     */
    protected $repository;

    /**
     * @var ItemProdutoValidator
     */
    protected $validator;

    /**
     * ItemProdutosController constructor.
     *
     * @param ItemProdutoRepository $repository
     * @param ItemProdutoValidator $validator
     */
    public function __construct(ItemProdutoRepository $repository, ItemProdutoValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $itemProdutos = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $itemProdutos,
            ]);
        }

        return view('itemProdutos.index', compact('itemProdutos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ItemProdutoCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(ItemProdutoCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $itemProduto = $this->repository->create($request->all());

            $response = [
                'message' => 'ItemProduto created.',
                'data'    => $itemProduto->toArray(),
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

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $itemProduto = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $itemProduto,
            ]);
        }

        return view('itemProdutos.show', compact('itemProduto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itemProduto = $this->repository->find($id);

        return view('itemProdutos.edit', compact('itemProduto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ItemProdutoUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(ItemProdutoUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $itemProduto = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'ItemProduto updated.',
                'data'    => $itemProduto->toArray(),
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


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'ItemProduto deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'ItemProduto deleted.');
    }
}
