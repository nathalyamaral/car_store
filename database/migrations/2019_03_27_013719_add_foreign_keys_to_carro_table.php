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
			$table->foreign('categoria_idcategoria')->references('idcategoria')->on('categoria')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('marca_idmarca')->references('idmarca')->on('marca')->onUpdate('NO ACTION')->onDelete('NO ACTION');
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
			$table->dropForeign('categoria_idcategoria');
			$table->dropForeign('marca_idmarca');
		});
	}

}
