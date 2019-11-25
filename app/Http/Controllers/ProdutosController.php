<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ProdutoCreateRequest;
use App\Http\Requests\ProdutoUpdateRequest;
use App\Repositories\ProdutoRepository;
use App\Validators\ProdutoValidator;
use App\Services\ProdutoService;

class ProdutosController extends Controller
{
    
    protected $repository;
    protected $service;
    protected $validator;

    
    public function __construct(ProdutoRepository $repository, ProdutoValidator $validator, ProdutoService $service)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
        $this->service    = $service;
    }

   
     
    public function index()
    {

        $produtos = $this->repository->all();
        return view('produtos.index' ,[
            'produtos' => $produtos,
            'tipoProduto_list' => ['lanches'=>"Lanches",
            'refrigerante'=>"Refrigerante",
            'batataFrita'=>"Batata-Frita",
            'combos'=>"Combos",
            'sucos'=>"Sucos",
            'sorvetes'=>"Sorvetes"],
        ]);
    }

    public function store(ProdutoCreateRequest $request)
    {
        $request = $this->service->store($request->all());
       
        $produto = $request['success'] ? $request['data'] : null;
       
        
        session()->flash('success',[
            'success'  => $request['success'] ,
            'messages' => $request['messages']
        ]);

        return redirect()->route('produtos.index');     
    
    }
    

    
    public function show($id)
    {
        $produto = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([]
               
        );
    }

        return view('produtos.show', compact('produto'));
    }

   
    public function edit($id)
    {
        $produto = $this->repository->find($id);

        return view('produtos.index' ,[
            'produto' => $produto,
            'tipoProduto_list' => ['lanches'=>"Lanches",
            'refrigerante'=>"Refrigerante",
            'batataFrita'=>"Batata-Frita",
            'combos'=>"Combos",
            'sucos'=>"Sucos",
            'sorvetes'=>"Sorvetes"],
        ]);
    }

   
    public function update(ProdutoUpdateRequest $request, $id)
    {
        $request = $this->service->update($request->all(), $id);
        
        $produtos = $request['success'] ? $request['data'] : null;
       
        
        session()->flash('success',[
            'success'  => $request['success'] ,
            'messages' => $request['messages']
        ]);

       return redirect()->route('produtos.index'); 
    }


    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Produto deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Produto deleted.');
    }
}
