<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_blogs')->insert([
            ['category' => 'Travel'],
            ['category' => 'Rooms'],
            ['category' => 'Holidays'],
            ['category' => 'Travel'],
            ['category' => 'Events'],
        ]);
    }
}
