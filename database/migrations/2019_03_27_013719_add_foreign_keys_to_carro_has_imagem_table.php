<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCarroHasImagemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('carro_has_imagem', function(Blueprint $table)
		{
			$table->foreign('carro_placa')->references('placa')->on('carro')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('imagem_idimagem')->references('idimagem')->on('imagem')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('carro_has_imagem', function(Blueprint $table)
		{
			$table->dropForeign('carro_placa');
			$table->dropForeign('imagem_idimagem');
		});
	}

}
