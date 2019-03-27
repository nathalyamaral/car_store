<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgenciaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agencia', function(Blueprint $table)
		{
			$table->string('cnpj', 30);
			$table->string('razao_social', 100);
			$table->string('usuario_cpf', 20)->index('fk_agencia_usuario1_idx');
			$table->primary(['cnpj','usuario_cpf']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agencia');
	}

}
