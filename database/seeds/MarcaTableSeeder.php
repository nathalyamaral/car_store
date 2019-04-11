<?php

use Illuminate\Database\Seeder;

class MarcaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marca')->insert([
            'nome' => 'FIAT'
        ]);
    }
}
