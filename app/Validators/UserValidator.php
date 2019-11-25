<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;


class UserValidator extends LaravelValidator
{
 
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'nome'      => 'required',
            'cpf'       => 'required',
            'email'     => 'required|unique:users,email',
            'password'  => 'required',
            'permissao' => 'required',
            //'status'    => 'required',
        ],
        ValidatorInterface::RULE_UPDATE => [
           
        ],
    ];
}

  
               