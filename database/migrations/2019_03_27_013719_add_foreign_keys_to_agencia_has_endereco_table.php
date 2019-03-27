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
			$table->foreign('agencia_cnpj', 'fk_agencia_has_endereco_agencia1')->references('cnpj')->on('agencia')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('endereco_idendereco', 'fk_agencia_has_endereco_endereco1')->references('idendereco')->on('endereco')->onUpdate('NO ACTION')->onDelete('NO ACTION');
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
			$table->dropForeign('fk_agencia_has_endereco_agencia1');
			$table->dropForeign('fk_agencia_has_endereco_endereco1');
		});
	}

}
