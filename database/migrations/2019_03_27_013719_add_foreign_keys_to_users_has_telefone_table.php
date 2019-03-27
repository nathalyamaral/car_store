<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsersHasTelefoneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users_has_telefone', function(Blueprint $table)
		{
			$table->foreign('telefone_idtelefone')->references('idtelefone')->on('telefone')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('users_cpf')->references('cpf')->on('users')->onUpdate('cascade')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users_has_telefone', function(Blueprint $table)
		{
			$table->dropForeign('telefone_idtelefone');
			$table->dropForeign('users_cpf');
		});
	}

}
