<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCarroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('carro', function(Blueprint $table)
		{
			$table->foreign('categoria_idcategoria', 'fk_carro_categoria1')->references('idcategoria')->on('categoria')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('marca_idmarca', 'fk_carro_marca1')->references('idmarca')->on('marca')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('carro', function(Blueprint $table)
		{
			$table->dropForeign('fk_carro_categoria1');
			$table->dropForeign('fk_carro_marca1');
		});
	}

}
