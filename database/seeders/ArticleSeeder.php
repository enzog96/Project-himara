<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            ['image' => 'images/blog/blog-post1.jpg',
            'title' => '10 Tips for Holiday Travel',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque, officiis dicta! Sit numquam qui tenetur tempore officia minus, a dignissimos ...',
            'author' => 'Jane',
            'authorimage' => 'images/users/admin.jpg',
            'comments' => 1],

            ['image' => 'images/blog/blog-post2.jpg',
            'title' => 'Enjoy your holidays',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque, officiis dicta! Sit numquam qui tenetur tempore officia minus, a dignissimos ...',
            'author' => 'Jane',
            'authorimage' => 'images/users/admin.jpg',
            'comments' => 5],

            ['image' => 'images/blog/blog-post3.jpg',
            'title' => 'Honeymoon in Hotel Himara',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque, officiis dicta! Sit numquam qui tenetur tempore officia minus, a dignissimos ...',
            'author' => 'Jane',
            'authorimage' => 'images/users/admin.jpg',
            'comments' => 3],

            ['image' => 'images/blog/blog-post4.jpg',
            'title' => 'Travel Gift Ideas for Every Type of Traveler',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque, officiis dicta! Sit numquam qui tenetur tempore officia minus, a dignissimos ...',
            'author' => 'Jane',
            'authorimage' => 'images/users/admin.jpg',
            'comments' => 2],

            ['image' => 'images/blog/blog-post5.jpg',
            'title' => 'Breakfast with coffee and orange juice',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque, officiis dicta! Sit numquam qui tenetur tempore officia minus, a dignissimos ...',
            'author' => 'Jane',
            'authorimage' => 'images/users/admin.jpg',
            'comments' => 7],

            ['image' => 'images/blog/blog-post6.jpg',
            'title' => 'Running On Sand',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque, officiis dicta! Sit numquam qui tenetur tempore officia minus, a dignissimos ...',
            'author' => 'Jane',
            'authorimage' => 'images/users/admin.jpg',
            'comments' => 0],

        ]);
    }
}
