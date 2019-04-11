<?php

use Illuminate\Database\Seeder;

class CarroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('carro')->insert([
            'placa' => 'KBO-8601',
            'modelo' => 'Uno',
            'ano' => 2015,
            'numero_portas' => 4,
            'numero_assento'=> 4,
            'cor' => 'Branco',
            'descricao' => 'Carro confortável e economico',
            'km' => 10.000,
            'combustivel' => 'FLEX',
            'cambio' => 'MANUAL',
            'valor_diaria' => 88.000,
            'status' => 'D',
            'marca_idmarca' => 1,
            'agencia_cnpj' => '22212121',
            'categoria_idcategoria' => 1
        ]);


    }
}
