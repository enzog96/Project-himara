<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            ['stars' => 0,
            'name' => '/images/slider/slider1.jpg',
            'title' => 'TOUCH THE DREAM',
            'description' => 'Live Your Myth In Hotel Himara',],

            ['stars' => '0',
            'name' => '/images/slider/slider3.jpg',
            'title' => 'WHERE DREAMS COME TRUE',
            'description' => 'You ll Never Forget Your Stay',],

            ['stars' => '0',
            'name' => '/images/slider/slider13.jpg',
            'title' => 'ENJOY YOUR HOLIDAYS',
            'description' => 'Family Room from €89 Per Night',],
            
        ]);
    }
}
