<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([
            [
                "name" => "Anonyme",
                "src" => "anonym_user.png"
            ],
            [
                "name" => "A Happy Kid",
                "src" => "happykid.png"
            ],
            [
                "name" => "The Golf Master",
                "src" => "golf.png"
            ],
            [
                "name" => "Boss Pingu",
                "src" => "pingu.png"
            ],
            [
                "name" => "The Healthy Boy",
                "src" => "sportboy.png"
            ],
            [
                "name" => "Study",
                "src" => "study.png"
            ],
        ]);
    }
}
