<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSettingSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('site_settings')->insert([
           'phone_no' => '+91 1234567890',
           'phone_no1' => '',
           'email' => 'jpexim@gmail.com',
           'address' => 'XYZ Ahmedabad India',
           'facebook_url' => 'https://www.facebook.com/jpexim',
           'instagram_url' => 'https://www.instagram.com/jpexim',
        ]);
    }
}
