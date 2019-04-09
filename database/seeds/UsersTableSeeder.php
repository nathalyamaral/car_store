<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class UsersTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'cpf' => '58590421082',
            'name' => 'Vitor Iago Melo',
            'email' => 'vitor@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
