<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            ['image' => 'gallery1.jpg',
            'title' => 'Swimming Pool',
            'category_gallery_id' => '1'],

            ['image' => 'gallery2.jpg',
            'title' => 'Room View',
            'category_gallery_id' => '1'],
            
            ['image' => 'gallery3.jpg',
            'title' => 'Cocktail',
            'category_gallery_id' => '1'],

            ['image' => 'gallery4.jpg',
            'title' => 'Breakfast',
            'category_gallery_id' => '1'],
            
            ['image' => 'gallery5.jpg',
            'title' => 'Playground',
            'category_gallery_id' => '1'],

            ['image' => 'gallery6.jpg',
            'title' => 'Restaurant',
            'category_gallery_id' => '1'],

            ['image' => 'gallery7.jpg',
            'title' => 'Wedding Ceremony',
            'category_gallery_id' => '1'],
            

            ['image' => 'gallery8.jpg',
            'title' => 'Beach',
            'category_gallery_id' => '1'],

            ['image' => 'gallery9.jpg',
            'title' => 'Honeymoon Room',
            'category_gallery_id' => '1'],

            ['image' => 'gallery10.jpg',
            'title' => 'Sea',
            'category_gallery_id' => '1'],
            
            ['image' => 'gallery11.jpg',
            'title' => 'Spa therapy',
            'category_gallery_id' => '1'],

            ['image' => 'gallery12.jpg',
            'title' => 'Restaurant',
            'category_gallery_id' => '1'],

            ['image' => 'gallery13.jpg',
            'title' => 'Restaurant',
            'category_gallery_id' => '1'],

            ['image' => 'gallery14.jpg',
            'title' => 'Sea',
            'category_gallery_id' => '1'],

            ['image' => 'gallery15.jpg',
            'title' => 'Restaurant',
            'category_gallery_id' => '1'],

            ['image' => 'gallery16.jpg',
            'title' => 'Room view ',
            'category_gallery_id' => '1'],
            
        ]);
    }
}
