<?php

use Illuminate\Database\Seeder;

class AgenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agencia')->insert([
            'cnpj' => '22212121',
            'razao_social' => 'Corumba agencia' ,
            'users_cpf' => '58590421082'
        ]);
    }
}
