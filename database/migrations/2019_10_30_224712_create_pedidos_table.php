<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreatePedidosTable.
 */
class CreatePedidosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pedidos', function(Blueprint $table) {
			$table->increments('id');
			//chave estrangeira de users
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			//chave estrangeira de comanda
			$table->integer('comanda_id')->unsigned();
			$table->foreign('comanda_id')->references('id')->on('comandas')->onDelete('cascade');
			
			//atributos tabela
			
			$table->double('valortotal');

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
		Schema::table('pedidos',function(Blueprint $table) {
			$table->dropForeign('pedidos_user_id_foreign');
			$table->dropForeign('pedidos_comanda_id_foreign');

		});
		Schema::drop('pedidos');
	}
}
