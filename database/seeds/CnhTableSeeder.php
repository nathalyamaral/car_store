<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CnhTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cnh')->insert([
            'numero_cnh' => '6589785425',
            'numero_registro' => '50045563727',
            'data_validade' => '2020-12-31',
            'rg' => '215538158',
            'data_nascimento' => '1981-12-31',
            'uf' => 'MS',
            'users_cpf' => '58590421082',
        ]);
    }
}
