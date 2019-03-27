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
			$table->string('numero_cartao', 191);
			$table->string('validade', 191);
			$table->string('cvv', 191);
			$table->string('titular', 100);
			$table->string('cpf', 45);
			$table->string('bandeira', 45);
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
		Schema::dropIfExists('pagamento');
	}

}
