<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('continents')->insert([
            [
                "continent" => "Europe"

            ],
            [
                "continent" => "Asie",

            ],
            [
                "continent" => "Afrique",

            ],
            [
                "continent" => "Amerique du Sud",

            ]
            ,[
                "continent" => "Océanie",

            ],
            [
                "continent" => "Antarctique",

            ],[
                "continent" => "Amérique du Nord",

            ]
        ]);
    }
}
