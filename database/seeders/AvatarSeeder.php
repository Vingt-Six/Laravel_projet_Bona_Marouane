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
                "name" => "Student",
                "src" => "student.png"
            ],
            [
                "name" => "Cozy student",
                "src" => "cozy.png"
            ],
            [
                "name" => "Bear with a gun",
                "src" => "beargun.png"
            ],
            [
                "name" => "Fake worker",
                "src" => "fakeworker.jpg"
            ],
            [
                "name" => "Worker",
                "src" => "worker.png"
            ],
        ]);
    }
}
