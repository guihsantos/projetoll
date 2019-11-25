<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nome'=> 'guilherme henrique',
            'cpf' => '0574187979', 
            'email'=> 'guih@guih', 
            'password'=>env('PASSWORD_HASH') ? bcrypt('123456') : '123456',
            'permissao'=> 'garcom',
            'status'=> 'ativo',
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
