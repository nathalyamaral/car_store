<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsuarioHasTelefoneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usuario_has_telefone', function(Blueprint $table)
		{
			$table->foreign('telefone_idtelefone', 'fk_usuario_has_telefone_telefone1')->references('idtelefone')->on('telefone')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('usuario_cpf', 'fk_usuario_has_telefone_usuario1')->references('cpf')->on('usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usuario_has_telefone', function(Blueprint $table)
		{
			$table->dropForeign('fk_usuario_has_telefone_telefone1');
			$table->dropForeign('fk_usuario_has_telefone_usuario1');
		});
	}

}
