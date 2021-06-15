<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            ['name'=>'kaushick',
            'email'=>'kau@gmail',
            'password'=>Hash::make('1234')],
            ['name'=>'gopal',
            'email'=>'gopal@gmail',
            'password'=>Hash::make('1234')],
            
        ]);
    }
}
