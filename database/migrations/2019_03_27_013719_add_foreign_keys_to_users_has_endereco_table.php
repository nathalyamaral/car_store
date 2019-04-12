<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsersHasEnderecoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users_has_endereco', function(Blueprint $table)
		{
			$table->foreign('endereco_idendereco')->references('idendereco')->on('endereco')->onUpdate('cascade')->onDelete('cascade');
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
		Schema::table('users_has_endereco', function(Blueprint $table)
		{
			$table->dropForeign('endereco_idendereco');
			$table->dropForeign('users_cpf');
		});
	}

}
