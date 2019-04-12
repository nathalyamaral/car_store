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
			$table->foreign('carro_placa')->references('placa')->on('carro')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('extra_numero_seguro')->references('numero_seguro')->on('extra')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('pagamento_idpagamento')->references('idpagamento')->on('pagamento')->onUpdate('cascade')->onDelete('cascade');
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
		Schema::table('locacao', function(Blueprint $table)
		{
			$table->dropForeign('carro_placa');
			$table->dropForeign('extra_idextra');
			$table->dropForeign('pagamento_idpagamento');
			$table->dropForeign('users_cpf');
		});
	}

}
