<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAgenciaHasTelefoneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('agencia_has_telefone', function(Blueprint $table)
		{
			$table->foreign('agencia_cnpj', 'fk_agencia_has_telefone_agencia1')->references('cnpj')->on('agencia')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('telefone_idtelefone', 'fk_agencia_has_telefone_telefone1')->references('idtelefone')->on('telefone')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('agencia_has_telefone', function(Blueprint $table)
		{
			$table->dropForeign('fk_agencia_has_telefone_agencia1');
			$table->dropForeign('fk_agencia_has_telefone_telefone1');
		});
	}

}
