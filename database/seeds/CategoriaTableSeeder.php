<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
            'nome' => 'Intermediario',
            'descricao' => '4 portas, Ar-Condionado, Câmbio Manual'
        ]);
    }
}
