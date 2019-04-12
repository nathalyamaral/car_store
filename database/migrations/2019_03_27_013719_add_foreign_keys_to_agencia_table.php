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
			$table->foreign('users_cpf')->references('cpf')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
			$table->dropForeign('usersusuario_cpf');
		});
	}

}
