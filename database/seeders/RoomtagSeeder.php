<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomtagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roomtags')->insert([
            ['tag' => 'RED'],
            ['tag' => 'DARK'],
            ['tag' => 'YELLOW'],
            ['tag' => 'BLUE'],
            ['tag' => 'PINK'],
            ['tag' => 'GREEN'],
            ['tag' => 'GRAY'],
            ['tag' => 'BROWN'],
        ]);
    }
}
