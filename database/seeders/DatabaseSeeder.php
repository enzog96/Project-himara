<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Statut;
use Illuminate\Database\Seeder;
use Database\Seeders\IconSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\RoomsSeeder;
use Database\Seeders\StaffSeeder;
use Database\Seeders\VideoSeeder;
use Database\Seeders\ReviewSeeder;
use Database\Seeders\SliderSeeder;
use Database\Seeders\StatutSeeder;
use Database\Seeders\ArticleSeeder;
use Database\Seeders\BlogTagSeeder;
use Database\Seeders\ContactSeeder;
use Database\Seeders\GallerySeeder;
use Database\Seeders\RoomtagSeeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\ArticletagSeeder;
use Database\Seeders\RestaurantSeeder;
use Database\Seeders\RoomOptionSeeder;
use Database\Seeders\DescriptionSeeder;
use Database\Seeders\CategoryBlogSeeder;
use Database\Seeders\CategoryRoomSeeder;
use Database\Seeders\RestaurantbgSeeder;
use Database\Seeders\CategoryGallerySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ArticleSeeder::class,
            ArticletagSeeder::class,
            BlogTagSeeder::class,
            CategoryBlogSeeder::class,
            CategoryGallerySeeder::class,
            CategoryRoomSeeder::class,
            ContactSeeder::class,
            DescriptionSeeder::class,
            GallerySeeder::class,
            IconSeeder::class,
            RestaurantSeeder::class,
            RoleSeeder::class,
            ReviewSeeder::class,
            RestaurantbgSeeder::class,
            RoomsSeeder::class,
            RoomtagSeeder::class,
            RoomOptionSeeder::class,
            ServiceSeeder::class,
            SliderSeeder::class,
            StaffSeeder::class,
            StatutSeeder::class,
            VideoSeeder::class,
            UserSeeder::class


            

        ]);
    }
}
