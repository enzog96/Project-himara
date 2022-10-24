<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_tags')->insert([
            ['name' => 'PARTY'],
            ['name' => 'TRAVEL'],
            ['name' => 'WEDDING'],
            ['name' => 'FOOD'],
            ['name' => 'MUSIC'],
            ['name' => 'CITY'],
            ['name' => 'IMAGE'],
            ['name' => 'HOTEL'],
        ]);
    }
}
