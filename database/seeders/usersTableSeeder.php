<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->insert([
            'id' => '1',
            'name' =>  'Carlos Martins',
            'email' => 'carlosmartinsdev@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
