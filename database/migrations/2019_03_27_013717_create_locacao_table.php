<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locacao', function(Blueprint $table)
		{
			$table->string('numero_locacao', 50)->unique('numero_locacao_UNIQUE');
			$table->date('data_retirada');
			$table->date('data_devolucao');
			$table->float('total', 10, 0);
			$table->time('hora_retirada');
			$table->time('hora_devolucao');
			$table->integer('numero_parcela');
			$table->dateTime('data_reserva');
			$table->integer('extra_idextra')->index('fk_locacao_extra1_idx');
			$table->integer('pagamento_idpagamento')->index('fk_locacao_pagamento1_idx');
			$table->string('carro_placa', 15)->index('fk_locacao_carro1_idx');
			$table->string('usuario_cpf', 20)->index('fk_locacao_usuario1_idx');
			$table->primary(['numero_locacao','extra_idextra','pagamento_idpagamento']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('locacao');
	}

}
