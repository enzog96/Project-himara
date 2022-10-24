<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
           [ 
            'image' => 'images/users/user1.jpg',
            'name' => 'Marlene Simpson',
            'location' => 'Madrid / Spain',
            'stars'  => '5',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.',
            ],

           [ 
            'image' => 'images/users/user2.jpg',
            'name' => 'Brad Knight',
            'location' => 'Athens / Greece',
            'stars'  => '4',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.',
            ],

           [ 
            'image' => 'images/users/user3.jpg',
            'name' => 'Daryl Phillips',
            'location' => 'Lisbon / Portugal',
            'stars'  => '5',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.',
            ],


           [ 
            'image' => 'images/users/user4.jpg',
            'name' => 'Felecia Lawson',
            'location' => 'Paris / France',
            'stars'  => '5',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.',
            ],

           [ 
            'image' => 'images/users/user5.jpg',
            'name' => 'Joanne Robinson',
            'location' => 'New York / USA',
            'stars'  => '4',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.',
            ],

           [ 
            'image' => 'images/users/user6.jpg',
            'name' => 'Emily / Hill',
            'location' => 'Rome / Italy',
            'stars'  => '5',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.',
            ],


           [ 
            'image' => 'images/users/user7.jpg',
            'name' => 'Mabel Hicks',
            'location' => 'Moscow / Russia',
            'stars'  => '1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.',
            ],

           [ 
            'image' => 'images/users/user8.jpg',
            'name' => 'Kent Lambert',
            'location' => 'Berlin / Germany',
            'stars'  => '4',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.',
            ],

           [ 
            'image' => 'images/users/user9.jpg',
            'name' => 'Gerald Schmidt',
            'location' => 'Zagreb / Croatia',
            'stars'  => '3',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.',
            ],

            
           
        ]);
    }
}
