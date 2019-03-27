<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAgenciaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('agencia', function(Blueprint $table)
		{
			$table->foreign('usuario_cpf', 'fk_agencia_usuario1')->references('cpf')->on('usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('agencia', function(Blueprint $table)
		{
			$table->dropForeign('fk_agencia_usuario1');
		});
	}

}
