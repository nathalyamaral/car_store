<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pagamento', function(Blueprint $table)
		{
			$table->integer('idpagamento', true);
			$table->string('numero_cartao');
			$table->string('validade');
			$table->string('cvv');
			$table->string('titular', 100);
			$table->string('cpf', 45);
			$table->string('bandeira', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pagamento');
	}

}
