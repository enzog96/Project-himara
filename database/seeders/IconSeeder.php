<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->insert([
            ['name' => 'flaticon-full-screen'],
            ['name' => 'flaticon-search'],
            ['name' => 'flaticon-link'],
            ['name' => 'flaticon-add'],
            ['name' => 'flaticon-tray-1'],
            ['name' => 'flaticon-screen-1'],
            ['name' => 'flaticon-nature'],
            ['name' => 'flaticon-slider'],
            ['name' => 'flaticon-tray'],
            ['name' => 'flaticon-hotel'],
            ['name' => 'flaticon-sports'],
            ['name' => 'flaticon-bell-boy'],
            ['name' => 'flaticon-screen'],
            ['name' => 'flaticon-information-button']
        ]);
    }
}
