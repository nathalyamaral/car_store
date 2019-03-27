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
			$table->string('users_cpf', 20);
			$table->primary(['cnpj','users_cpf']);
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
		Schema::dropIfExists('agencia');
	}

}
