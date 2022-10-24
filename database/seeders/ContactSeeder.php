<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'name' => 'contact',
                'logo1' => '1',
                'logo2' => '2',
                'location' => 'LOREM IPSUM DOLOR, 25, HIMARA',
                'phone' => '+ 1 888 123 4567',
                'fax' => '+ 1 888 123 4567',
                'website' => 'WWW.HOTELHIMARA.COM',
                'email' => 'CONTACT@HOTELHIMARA.COM',
            ],
            
        ]);
    }
}
