<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                "name" => 'Vacances',
                "src" => "vacance.jpg",
                "url" => null,
                "categorie_id" => 8
            ],
            [
                "name" => 'Ile',
                "src" => "ile.jpg",
                "url" => null,
                "categorie_id" => 8
            ],
            [
                "name" => 'Illusion',
                "src" => "illusion.jpg",
                "url" => null,
                "categorie_id" => 7
            ],
            [
                "name" => 'Crypto Worker',
                "src" => "businessman.jpg",
                "url" => null,
                "categorie_id" => 5
            ],
        ]);
    }
}
