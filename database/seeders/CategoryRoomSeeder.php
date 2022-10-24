<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_rooms')->insert([
            ['category' => 'Single Room'],
            ['category' => 'Double Room'],
            ['category' => 'Family Room'],
            ['category' => 'Deluxe Room'],
        ]);
    }
}
