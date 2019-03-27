<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarroHasImagemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carro_has_imagem', function(Blueprint $table)
		{
			$table->string('carro_placa', 15)->index('fk_carro_has_imagem_carro1_idx');
			$table->integer('imagem_idimagem')->index('fk_carro_has_imagem_imagem1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('carro_has_imagem');
	}

}
