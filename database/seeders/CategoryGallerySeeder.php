<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_galleries')->insert([
            ['category' => 'ALL'],
            ['category' => 'RESTAURANT'],
            ['category' => 'SWIMMING POOL'],
            ['category' => 'SPA'],
            ['category' => 'ROOM VIEW'],
        ]);
    }
}
