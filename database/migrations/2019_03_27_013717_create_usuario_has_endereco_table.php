<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuarioHasEnderecoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuario_has_endereco', function(Blueprint $table)
		{
			$table->string('usuario_cpf', 20)->index('fk_usuario_has_endereco_usuario1_idx');
			$table->integer('endereco_idendereco')->index('fk_usuario_has_endereco_endereco1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuario_has_endereco');
	}

}
