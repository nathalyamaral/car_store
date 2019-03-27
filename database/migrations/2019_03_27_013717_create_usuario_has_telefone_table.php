<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuarioHasTelefoneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuario_has_telefone', function(Blueprint $table)
		{
			$table->string('usuario_cpf', 20)->index('fk_usuario_has_telefone_usuario1_idx');
			$table->integer('telefone_idtelefone')->index('fk_usuario_has_telefone_telefone1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuario_has_telefone');
	}

}
