<?php

use Illuminate\Database\Seeder;

class EnderecoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('endereco')->insert([
            'bairro' => 'São Lázaro',
            'cep' => '69073136',
            'cidade' => 'Manaus',
            'estado' => 'AM',
            'numero' => '903',
            'logradouro' => 'Beco Nauremberg',
        ]);
    }
}
