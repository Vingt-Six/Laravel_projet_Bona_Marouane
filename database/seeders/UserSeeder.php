<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            [
                "name" => "leboss",
                "firstname" => "admin",
                "age" => 22,
                "email" => 'admin@admin.com',
                "avatar_id" => 3,
                "role_id" => 1,
                "password" => Hash::make('admin@admin.com')
            ],
            [
                "name" => "maxi",
                "firstname" => "fred",
                "age" => 45,
                "email" => 'admin1@admin1.com',
                "avatar_id" => 2,
                "role_id" => 1,
                "password" => Hash::make('admin1@admin1.com')
            ],
            [
                "name" => "super",
                "firstname" => "sandrine",
                "age" => 27,
                "email" => 'admin2@admin2.com',
                "avatar_id" => 5,
                "role_id" => 1,
                "password" => Hash::make('admin2@admin2.com')
            ],
            [
                "name" => "people",
                "firstname" => "member",
                "age" => 34,
                "email" => 'member@member.com',
                "avatar_id" => 4,
                "role_id" => 2,
                "password" => Hash::make('member@member.com')
            ],
            [
                "name" => "other",
                "firstname" => "paderole",
                "age" => 30,
                "email" => 'member1@member1.com',
                "avatar_id" => 2,
                "role_id" => 2,
                "password" => Hash::make('member1@member1.com')
            ],
            [
                "name" => "giga",
                "firstname" => "lambda",
                "age" => 24,
                "email" => 'member2@member2.com',
                "avatar_id" => 3,
                "role_id" => 2,
                "password" => Hash::make('member2@member2.com')
            ],
        ]);
    }
}
