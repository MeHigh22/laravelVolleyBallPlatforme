<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('joueurs')->insert([
            [
                "name" => "Niska",
                "lastname" => "Arrah",
                "age" => 26,
                "sex" => "Homme",
                "phone" => 123456,
                "country" => 'Mongolia',
                "role_id" => 1,
                'photo_id' => 1,
                "team_id" => 1,
            ],
            [
                "name" => "LeFric",
                "lastname" => "LaPoche",
                "age" => 28,
                "sex" => "Homme",
                "phone" => 123456,
                "country" => 'TheCité',
                "role_id" => 2,
                'photo_id' => 2,
                "team_id" => 2,
            ],
            [
                "name" => "Cristiano",
                "lastname" => "Volley",
                "age" => 30,
                "sex" => "Homme",
                "phone" => 123456,
                "country" => 'Portugal',
                "role_id" => 3,
                'photo_id' => 3,
                "team_id" => 3,
            ],
            [
                "name" => "Matador",
                "lastname" => "Bendo",
                "age" => 25,
                "sex" => "Homme",
                "phone" => 123456,
                "country" => 'Italy',
                "role_id" => 3,
                'photo_id' => 4,
                "team_id" => null,
            ],
            [
                "name" => "LaPeuf",
                "lastname" => "duShopje",
                "age" => 25,
                "sex" => "Homme",
                "phone" => 123456,
                "genre_id" => 1,
                "country" => 'Netherlands',
                "role_id" => 3,
                'photo_id' => 5,
                "team_id" => null,
            ],
            [
                "name" => "Kevin",
                "lastname" => "Malcuit",
                "age" => 25,
                "sex" => "Homme",
                "phone" => 123456,
                "country" => 'Belgium',
                "role_id" => 3,
                'photo_id' => 6,
                "team_id" => 3,
            ],
            [
                "name" => "Pedro",
                "lastname" => "Santos Gomez de la Fuentas",
                "age" => 25,
                "sex" => "Homme",
                "phone" => 123456,
                "country" => 'Espagne',
                "role_id" => 3,
                'photo_id' => 7,
                "team_id" => 1,
            ],
            [
                "name" => "Michto",
                "lastname" => "Neuse",
                "age" => 25,
                "sex" => "Femme",
                "phone" => 123456,
                "genre_id" => 1,
                "country" => 'Croatie',
                "role_id" => 3,
                'photo_id' => 8,
                "team_id" => null,
            ],
            [
                "name" => "Pardon",
                "lastname" => "Monsieur",
                "age" => 25,
                "sex" => "Homme",
                "phone" => 123456,
                "genre_id" => 1,
                "country" => 'Algerie',
                "role_id" => 3,
                'photo_id' => 9,
                "team_id" => null,
            ],
            [
                "name" => "Matuidi",
                "lastname" => "Charo",
                "age" => 25,
                "sex" => "Homme",
                "phone" => 123456,
                "country" => 'France',
                'photo_id' => 10,
                "role_id" => 3,
                "team_id" => 2,
            ],
        ]);
    }
}
