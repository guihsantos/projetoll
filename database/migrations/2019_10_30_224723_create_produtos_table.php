<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateProdutosTable.
 */
class CreateProdutosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produtos', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nome');
			$table->string('descricao');
			$table->string('tipoProduto');
			$table->double('preco');
			$table->integer('qtde');
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produtos');
	}
}
