<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([

            ['image' => 'restaurant.jpg',
            'icon' => 'flaticon-tray-1',
            'title' => 'Restaurant',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.',],

            ['image' => 'spa.jpg',
            'icon' => 'flaticon-nature',
            'title' => 'Spa - Beauty & Health',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.',],

            ['image' => 'conference.jpg',
            'icon' => 'flaticon-screen-1',
            'title' => 'Conference Room',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.',],

            ['image' => 'swimming.jpg',
            'icon' => 'flaticon-sports',
            'title' => 'Swimming Pool',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.',],
           
        ]);
    }
}
