<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    //use SoftDeletes;


    
    protected $fillable = [
        'nome','cpf', 'email', 'password','permissao','status',
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];

   
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAtribute($value){
        $this->password = env('PASSWORD_HASH') ? bcrypt($value) : $value;
        
    }

    //formatacao do cpf
    public function getCpfAttribute(){
        $cpf = $this->attributes['cpf'];
        return substr($cpf, 0, 3) . '.' . substr($cpf,3,3). '.' . substr($cpf,7,3). '-' . substr($cpf,9,2);
    }
}
