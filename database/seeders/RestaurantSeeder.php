<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            ['image' => 'restaurant1.jpg',
            'title' => 'SALAT',
            'price' => ' €16.99 ',
            'description' => 'Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet... ',],

            ['image' => 'restaurant2.jpg',
            'title' => 'CROQUETTES',
            'price' => '€9.99',
            'description' => 'Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet... ',],
            
        ]);
    }
}
