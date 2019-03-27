<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgenciaHasEnderecoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agencia_has_endereco', function(Blueprint $table)
		{
			$table->string('agencia_cnpj', 30)->index('fk_agencia_has_endereco_agencia1_idx');
			$table->integer('endereco_idendereco')->index('fk_agencia_has_endereco_endereco1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agencia_has_endereco');
	}

}
