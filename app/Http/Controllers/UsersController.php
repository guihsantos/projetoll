<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use App\Services\UserService;


class UsersController extends Controller
{
   
    protected $service;
    protected $repository;
   

    
    public function __construct(UserRepository $repository, UserService $service)
    {
        $this->repository = $repository;
        $this->service    = $service;
    }

    
    public function index()
    {
        
        $users = $this->repository->all();
        
        
        return view('user.index' ,[
            'users'          => $users,
            'permissao_list' => [1=>"Admin",2=>"Atendente"],
        ]);
    }
        

    
    public function store(UserCreateRequest $request)
    {
       
        $request = $this->service->store($request->all());
        
        $usuarios = $request['success'] ? $request['data'] : null;
       
        
        session()->flash('success',[
            'success'  => $request['success'] ,
            'messages' => $request['messages']
        ]);

       return redirect()->route('user.index');     
    }

    
    public function show($id)
    {
        $user = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $user,
            ]);
        }

        return view('users.show', compact('user'));
    }

    
    public function edit($id)
    {
        $user = $this->repository->find($id);

        return view('user.edit', [
            'user' => $user,
            'permissao_list' => [1=>"Admin",2=>"Atendente"],
        ]);
    }

    
    public function update(UserUpdateRequest $request, $id)
    {
        $request = $this->service->update($request->all(), $id);
        
        $usuarios = $request['success'] ? $request['data'] : null;
       
        
        session()->flash('success',[
            'success'  => $request['success'] ,
            'messages' => $request['messages']
        ]);

       return redirect()->route('user.index'); 
    }


    public function destroy($id)
    {
        $request = $this->service->destroy($id);
        //dd($request);
        
        session()->flash('success',[
            'success'  => $request['success'] ,
            'messages' => $request['messages']
        ]);

        return redirect()->route('user.index');   
    }
}
