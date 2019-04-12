<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCnhTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cnh', function(Blueprint $table)
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
		Schema::table('cnh', function(Blueprint $table)
		{
			$table->dropForeign('users_cpf');
		});
	}

}
