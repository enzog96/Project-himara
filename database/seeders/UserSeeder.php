<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['firstname' => 'Enzo',
            'lastname' => 'Grillo',
            'city' => 'Bruxelles',
            'country' => 'Belgium',
            'phone' => '0488088527',
            'role_id' => 1,
            'email' => 'enzogrillo96@gmail.com',
            'password' => bcrypt('himara')],

            ['firstname' => 'Enzo',
            'lastname' => 'Grillo',
            'city' => 'Bruxelles',
            'country' => 'Belgium',
            'phone' => '0488088527',
            'role_id' => 2,
            'email' => 'enzogrillo96666@gmail.com',
            'password' => bcrypt('himara')],

            ['firstname' => 'Enzo',
            'lastname' => 'Grillo',
            'city' => 'Bruxelles',
            'country' => 'Belgium',
            'phone' => '0488088527',
            'role_id' => 3,
            'email' => 'enzogrillo96555555@gmail.com',
            'password' => bcrypt('himara')],
            
        ]);
    }
}
