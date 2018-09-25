<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siteSettings')->insert([
            'option'=>'whatthejoshuaperez@gmail.com',
            'value'=>'asdasdsasd'    
        ]);
        DB::table('siteSettings')->insert([
            'option'=>'GuestBackground',
            'value'=>'default'
        ]);
        DB::table('siteSettings')->insert([
            'option'=>'Logo',
            'value'=>'default'
        ]);
        DB::table('siteSettings')->insert([
            'option'=>'Sitename',
            'value'=>'default'
        ]);
        DB::table('siteSettings')->insert([
            'option'=>'email',
            'value'=>'default'
        ]);
        DB::table('siteSettings')->insert([
            'option'=>'mobile',
            'value'=>'default'
        ]);
        DB::table('siteSettings')->insert([
            'option'=>'telephone',
            'value'=>'default'
        ]);
        DB::table('siteSettings')->insert([
            'option'=>'aboutus',
            'value'=>'default'
        ]);
    }
}
