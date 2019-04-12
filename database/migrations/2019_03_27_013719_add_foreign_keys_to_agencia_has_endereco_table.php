<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAgenciaHasEnderecoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('agencia_has_endereco', function(Blueprint $table)
		{
			$table->foreign('agencia_cnpj')->references('cnpj')->on('agencia')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('endereco_idendereco')->references('idendereco')->on('endereco')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('agencia_has_endereco', function(Blueprint $table)
		{
			$table->dropForeign('agencia_cnpj');
			$table->dropForeign('endereco_idendereco');
		});
	}

}
