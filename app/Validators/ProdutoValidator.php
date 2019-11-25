<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class ProdutoValidator.
 *
 * @package namespace App\Validators;
 */
class ProdutoValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'nome'              => 'required',
            'descricao'         => 'required',
            'tipoProduto'       => 'required',
            'preco'             => 'required',
            'qtde'              => 'required',
            
        ],
        ValidatorInterface::RULE_UPDATE => [],
    ];
}


