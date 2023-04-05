<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'azzam',
            'name' => 'Abdullah Azzam',
            'email' => 'azzam17102003@gmail.com',
            'password' => Hash::make('azzam')
        ]);
        DB::table('users')->insert(data);
    }
}
