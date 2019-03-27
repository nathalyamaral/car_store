<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsuarioHasEnderecoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usuario_has_endereco', function(Blueprint $table)
		{
			$table->foreign('endereco_idendereco', 'fk_usuario_has_endereco_endereco1')->references('idendereco')->on('endereco')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('usuario_cpf', 'fk_usuario_has_endereco_usuario1')->references('cpf')->on('usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usuario_has_endereco', function(Blueprint $table)
		{
			$table->dropForeign('fk_usuario_has_endereco_endereco1');
			$table->dropForeign('fk_usuario_has_endereco_usuario1');
		});
	}

}
