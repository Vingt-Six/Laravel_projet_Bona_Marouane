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
                "name" => "people",
                "firstname" => "member",
                "age" => 34,
                "email" => 'member@member.com',
                "avatar_id" => 4,
                "role_id" => 2,
                "password" => Hash::make('member@member.com')
            ],
        ]);
    }
}
