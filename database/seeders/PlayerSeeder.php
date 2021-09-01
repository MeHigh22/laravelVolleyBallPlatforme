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

        DB::table('players')->insert([
            [
                "name" => "Niska",
                "lastname" => "Arrah",
                "sex" => "Homme",
                "age" => 26,
                "phone" => 12345685,
                "email" => "pardon@pasdemail.com",
                "country" => 'Mongolia',
                'photo_id' => 1,
                "role_id" => 1,
                "team_id" => 1,
            ],
            [
                "name" => "LeFric",
                "lastname" => "LaPoche",
                "sex" => "Homme",
                "age" => 28,
                "phone" => 12345656,
                "email" => "pardon@pasdemail.com",
                "country" => 'TheCité',
                'photo_id' => 2,
                "role_id" => 2,
                "team_id" => 2,
            ],
            [
                "name" => "Cristiano",
                "lastname" => "Volley",
                "sex" => "Homme",
                "age" => 30,
                "phone" => 1234546,
                "email" => "pardon@pasdemail.com",
                "country" => 'Portugal',
                'photo_id' => 3,
                "role_id" => 3,
                "team_id" => 3,
            ],
            [
                "name" => "Matador",
                "lastname" => "Bendo",
                "sex" => "Homme",
                "age" => 25,
                "phone" => 1234546,
                "email" => "pardon@pasdemail.com",
                "country" => 'Italy',
                'photo_id' => 4,
                "role_id" => 3,
                "team_id" => null,
            ],
            [
                "name" => "LaPeuf",
                "lastname" => "duShopje",
                "sex" => "Homme",
                "age" => 25,
                "phone" => 1234456,
                "email" => "pardon@pasdemail.com",
                "genre_id" => 1,
                "country" => 'Netherlands',
                'photo_id' => 5,
                "role_id" => 3,
                "team_id" => null,
            ],
            [
                "name" => "Kevin",
                "lastname" => "Malcuit",
                "sex" => "Homme",
                "age" => 25,
                "phone" => 1234546,
                "email" => "pardon@pasdemail.com",
                "country" => 'Belgium',
                'photo_id' => 6,
                "role_id" => 3,
                "team_id" => 3,
            ],
            [
                "name" => "Pedro",
                "lastname" => "Santos Gomez de la Fuentas",
                "sex" => "Homme",
                "age" => 25,
                "phone" => 1234546,
                "email" => "pardon@pasdemail.com",
                "country" => 'Espagne',
                'photo_id' => 7,
                "role_id" => 3,
                "team_id" => 1,
            ],
            [
                "name" => "Michto",
                "lastname" => "Neuse",
                "sex" => "Femme",
                "age" => 25,
                "phone" => 1234546,
                "email" => "pardon@pasdemail.com",
                "genre_id" => 1,
                "country" => 'Croatie',
                'photo_id' => 8,
                "role_id" => 3,
                "team_id" => null,
            ],
            [
                "name" => "Pardon",
                "lastname" => "Monsieur",
                "sex" => "Homme",
                "age" => 25,
                "phone" => 1234456,
                "email" => "pardon@pasdemail.com",
                "genre_id" => 1,
                "country" => 'Algerie',
                'photo_id' => 9,
                "role_id" => 3,
                "team_id" => null,
            ],
            [
                "name" => "Matuidi",
                "lastname" => "Charo",
                "sex" => "Homme",
                "age" => 25,
                "phone" => 123456,
                "email" => "pardon@pasdemail.com",
                'photo_id' => 10,
                "country" => 'France',
                "role_id" => 3,
                "team_id" => 2,
            ],
        ]);
    }
}
