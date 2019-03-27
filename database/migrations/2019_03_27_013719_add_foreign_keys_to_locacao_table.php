<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLocacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('locacao', function(Blueprint $table)
		{
			$table->foreign('carro_placa', 'fk_locacao_carro1')->references('placa')->on('carro')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('extra_idextra', 'fk_locacao_extra1')->references('numero_seguro')->on('extra')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pagamento_idpagamento', 'fk_locacao_pagamento1')->references('idpagamento')->on('pagamento')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('usuario_cpf', 'fk_locacao_usuario1')->references('cpf')->on('usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('locacao', function(Blueprint $table)
		{
			$table->dropForeign('fk_locacao_carro1');
			$table->dropForeign('fk_locacao_extra1');
			$table->dropForeign('fk_locacao_pagamento1');
			$table->dropForeign('fk_locacao_usuario1');
		});
	}

}
