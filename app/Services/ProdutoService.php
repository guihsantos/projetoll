<?php

namespace App\Services;

use Iluminate\Database\QueryException;
use Exception;
use Prettus\Validator\Exceptions\ValidatorException;
use Prettus\Validator\Contracts\ValidatorInterface;
use App\Repositories\ProdutoRepository;
use App\Validators\ProdutoValidator;


class ProdutoService{

    private $repository;
    private $validator;
    private $request;

    public function __construct(ProdutoRepository $repository, ProdutoValidator $validator){

        $this->repository = $repository;
        $this->validator  = $validator;

    }

    public function store(array $data){


        try{

            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $produto = $this->repository->create($data);

            return [
                    'success' => true,
                    'messages' => "produto cadastrado",
                    'data'    => $produto
                    ];


        }catch(Exception $e){
            switch (get_class($e)) {
                case QueryException::class         : return ['success' => false,  'messages' =>$e->getMessage()];
                case ValidatorException::class     : return ['success'  => false, 'messages' =>$e->getMessageBag()];
                case Exception::class              : return ['success' => false,  'messages' =>$e->getMessage()];
                default                            : return ['success' => false,  'messages' =>$e->getMessage()];
                 
            }
      
        }

    }
    public function update($data, $id){

        try{

            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_UPDATE);
            $produto = $this->repository->update($data, $id);

            return [
                    'success' => true,
                    'messages' => "Produto atualizado",
                    'data'    => $produto
                    ];


        }catch(Exception $e){
            switch (get_class($e)) {
                case QueryException::class         : return ['success' => false,  'messages' =>$e->getMessage()];
                case ValidatorException::class     : return ['success'  => false, 'messages' =>$e->getMessageBag()];
                case Exception::class              : return ['success' => false,  'messages' =>$e->getMessage()];
                default                            : return ['success' => false,  'messages' =>$e->getMessage()];
                 
            }
      
        }


    }
    public function destroy($produto_id){
       
       
        try{

            $this ->repository->delete($produto_id);

            return [
                    'success' => true,
                    'messages' => "produto removido",
                    'data'    => null,
                    ];


        }catch(Exception $e){
      
        }

    }

    
}

?>