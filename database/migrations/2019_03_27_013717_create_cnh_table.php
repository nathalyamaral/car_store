<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCnhTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cnh', function(Blueprint $table)
		{
			$table->string('numero_cnh', 20);
			$table->string('numero_registro', 20);
			$table->date('data_validade');
			$table->string('rg', 30);
			$table->date('data_nascimento');
			$table->string('uf', 2);
			$table->string('users_cpf', 20);
			$table->primary(['numero_cnh','users_cpf']);
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
		Schema::dropIfExists('cnh');
	}

}
