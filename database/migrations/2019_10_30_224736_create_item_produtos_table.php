<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateItemProdutosTable.
 */
class CreateItemProdutosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('item_produtos', function(Blueprint $table) {
			$table->increments('id');
			//chave estrangeira de pedidos
			$table->integer('pedido_id')->unsigned();
			$table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
			//chave estrangeira de produtos
			$table->integer('produto_id')->unsigned();
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
			
			$table->double('valor');
			$table->string('descricao');
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
		Schema::table('item_produtos',function(Blueprint $table) {
			$table->dropForeign('item_produtos_pedido_id_foreign');
			$table->dropForeign('item_produtos_produto_id_foreign');

		});
		
		Schema::drop('item_produtos');
	}
}
