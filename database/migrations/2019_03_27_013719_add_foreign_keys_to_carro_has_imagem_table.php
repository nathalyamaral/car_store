<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCarroHasImagemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('carro_has_imagem', function(Blueprint $table)
		{
			$table->foreign('carro_placa', 'fk_carro_has_imagem_carro1')->references('placa')->on('carro')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('imagem_idimagem', 'fk_carro_has_imagem_imagem1')->references('idimagem')->on('imagem')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('carro_has_imagem', function(Blueprint $table)
		{
			$table->dropForeign('fk_carro_has_imagem_carro1');
			$table->dropForeign('fk_carro_has_imagem_imagem1');
		});
	}

}
