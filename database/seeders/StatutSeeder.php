<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuts')->insert([
            ['name' => 'HOUSEKEEPER'],
            ['name' => 'RECEPTIONIST'],
            ['name' => 'CHEF'],
            ['name' => 'HOTEL MANAGER'],
            ['name' => 'ROOM SERVICE'],
            ['name' => 'MARKETING ADVISOR'],
           
        ]);
    }
}
