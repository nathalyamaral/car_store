<?php

use Illuminate\Database\Seeder;

class TelefoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('telefone')->insert([
            'numero' => '3232-2061'
        ]);
    }
}
