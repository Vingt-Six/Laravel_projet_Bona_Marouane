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
                "src" => "anonym_user.png",
                "url" => null
            ],
            [
                "name" => "A Happy Kid",
                "src" => "happykid.png",
                "url" => null
            ],
            [
                "name" => "The Golf Master",
                "src" => "golf.png",
                "url" => null
            ],
            [
                "name" => "Boss Pingu",
                "src" => "pingu.png",
                "url" => null
            ],
            [
                "name" => "The Healthy Boy",
                "src" => "sportboy.png",
                "url" => null
            ],
            [
                "name" => "Study",
                "src" => "study.png",
                "url" => null
            ],
        ]);
    }
}
