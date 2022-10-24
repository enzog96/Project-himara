<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticletagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articletags')->insert([
            ['tag' => 'PARTY'],
            ['tag' => 'TRAVEL'],
            ['tag' => 'WEDDING'],
            ['tag' => 'FOOD'],
            ['tag' => 'MUSIC'],
            ['tag' => 'CITY'],
            ['tag' => 'IMAGE'],
            ['tag' => 'HOTEL'],
        ]);
    }
}
