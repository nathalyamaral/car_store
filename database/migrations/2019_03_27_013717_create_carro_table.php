<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carro', function(Blueprint $table)
		{
			$table->string('placa', 15)->primary();
			$table->string('modelo', 45);
			$table->integer('ano');
			$table->integer('numero_portas');
			$table->integer('numero_assento');
			$table->string('cor', 45);
			$table->string('descricao', 100)->nullable();
			$table->float('km');
			$table->enum('combustivel', array('AL','GA','FLEX'));
			$table->enum('cambio', array('AUTOMATICO','MANUAL'));
			$table->float('valor_diaria');
			$table->enum('status', array('A','D'));
			$table->integer('marca_idmarca');
			$table->integer('categoria_idcategoria');
			$table->string('agencia_cnpj', 30);
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
		Schema::dropIfExists('carro');
	}

}
