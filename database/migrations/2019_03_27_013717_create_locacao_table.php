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
			$table->string('numero_locacao', 50)->primary();
			$table->date('data_retirada');
			$table->date('data_devolucao');
			$table->float('total');
			$table->time('hora_retirada');
			$table->time('hora_devolucao');
			$table->integer('numero_parcela');
			$table->dateTime('data_reserva');
			$table->integer('extra_numero_seguro');
			$table->integer('pagamento_idpagamento');
			$table->string('carro_placa', 15);
			$table->string('users_cpf', 20);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('locacao');
	}

}
