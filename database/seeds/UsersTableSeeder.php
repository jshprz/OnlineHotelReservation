<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'email'=>'whatthejoshuaperez@gmail.com',
            'password'=>bcrypt('asdasd'),
            'firstname'=>'joshua',
            'lastname'=>'perez',
            'mobile_number'=>'+639294056334',
            'sex'=>'male',
            'profile_photo'=>null,
            'permission'=>'',
            'token'=>null,
            'confirmed'=>true,
            'remember_token'=>str_random(10),
            'created_at'=>date_create()         
        ],[
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('asdasd'),
            'firstname'=>'joshua',
            'lastname'=>'perez',
            'mobile_number'=>'+639294056334',
            'sex'=>'male',
            'profile_photo'=>null,
            'permission'=>'admin',
            'token'=>null,
            'confirmed'=>true,
            'remember_token'=>str_random(10),
            'created_at'=>date_create()  
        ],
    [
        'email'=>'frontdesk@gmail.com',
            'password'=>bcrypt('asdasd'),
            'firstname'=>'joshua',
            'lastname'=>'perez',
            'mobile_number'=>'+639294056334',
            'sex'=>'male',
            'profile_photo'=>null,
            'permission'=>'frontdesk',
            'token'=>null,
            'confirmed'=>true,
            'remember_token'=>str_random(10),
            'created_at'=>date_create()  
    ]]
    );
    }
}
