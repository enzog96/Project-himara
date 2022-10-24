<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([

            ['status' => 'HOUSEKEEPER',
            'image' => 'staff1.jpg',
            'name' => 'Jeanette Owens',
            'description' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',],
            
            ['status' => 'RECEPTIONIST',
            'image' => 'staff2.jpg',
            'name' => 'Henry Garrett',
            'description' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',],
            
            ['status' => 'CHEF',
            'image' => 'staff3.jpg',
            'name' => 'Tommy Alexander',
            'description' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',],

            ['status' => 'HOTEL MANAGER',
            'image' => 'staff4.jpg',
            'name' => 'Penny Soto',
            'description' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',],

            ['status' => 'ROOM SERVICE',
            'image' => 'staff5.jpg',
            'name' => 'Alex Cox',
            'description' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',],
            
            ['status' => 'HOTEL MANAGER',
            'image' => 'staff6.jpg',
            'name' => 'Alfredo Romero',
            'description' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',],

            ['status' => 'MARKETING ADVISOR',
            'image' => 'staff7.jpg',
            'name' => 'Glenda Gilbert',
            'description' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',],

            ['status' => 'HOTEL MANAGER',
            'image' => 'staff8.jpg',
            'name' => 'Sheila Carter',
            'description' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',],
            
        ]);
    }
}
