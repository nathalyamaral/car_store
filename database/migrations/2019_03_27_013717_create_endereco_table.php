<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnderecoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('endereco', function(Blueprint $table)
		{
			$table->integer('idendereco', true);
			$table->string('bairro', 45);
			$table->string('cep', 45);
			$table->string('cidade', 45);
			$table->string('estado', 45);
			$table->string('numero', 10);
			$table->string('logradouro', 45);
			$table->string('complemento', 100)->nullable();
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
		Schema::dropIfExists('endereco');
	}

}
