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
			$table->integer('numero_cnh')->unique('numero_cnh_UNIQUE');
			$table->integer('numero_registro')->unique('numero_registro_UNIQUE');
			$table->date('data_validade');
			$table->string('rg', 30);
			$table->date('data_nascimento');
			$table->string('uf', 2);
			$table->string('usuario_cpf', 20)->index('fk_cnh_usuario1_idx');
			$table->primary(['numero_cnh','usuario_cpf']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cnh');
	}

}
