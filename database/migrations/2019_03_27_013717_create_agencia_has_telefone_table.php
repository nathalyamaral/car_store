<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgenciaHasTelefoneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agencia_has_telefone', function(Blueprint $table)
		{
			$table->string('agencia_cnpj', 30)->index('fk_agencia_has_telefone_agencia1_idx');
			$table->integer('telefone_idtelefone')->index('fk_agencia_has_telefone_telefone1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agencia_has_telefone');
	}

}
