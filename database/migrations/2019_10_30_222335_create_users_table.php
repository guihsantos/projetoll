<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
	
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nome',50);
			$table->string('cpf',14)->unique();
			$table->string('email',80)->unique();
			$table->string('password',80);
			$table->string('permissao'); //->default('app.user')
			$table->string('status')->default('ativo');
			//$table->remenberToken();
            $table->timestamps();
		});
	}

	
	public function down()
	{
		Schema::drop('users');
	}
}
