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
                "age" => 26,
                "country" => 'Mongolia',
                "email" => "pardon@pasdemail.com",
                "lastname" => "Arrah",
                "name" => "Niska",
                "phone" => 12345685,
                'photo_id' => 1,
                "role_id" => 1,
                "sex" => "Homme",
                "team_id" => 1,
            ],
            [
                "age" => 26,
                "country" => 'Mexico',
                "email" => "pardon@pasdemail.com",
                "lastname" => "LeFric",
                "name" => "leBif",
                "phone" => 12345685,
                'photo_id' => 2,
                "role_id" => 2,
                "sex" => "Homme",
                "team_id" => null,
            ],
            [
                "age" => 26,
                "country" => 'Portugal',
                "email" => "pardon@pasdemail.com",
                "lastname" => "Cristiano",
                "name" => "Volley",
                "phone" => 12345685,
                'photo_id' => 3,
                "role_id" => 3,
                "sex" => "Homme",
                "team_id" => 2,
            ],
            [
                "age" => 26,
                "country" => 'Italy',
                "email" => "pardon@pasdemail.com",
                "lastname" => "Bendo",
                "name" => "Matador",
                "phone" => 12345685,
                'photo_id' => 4,
                "role_id" => 2,
                "sex" => "Homme",
                "team_id" => 3,
            ],
            [
                "age" => 26,
                "country" => 'Netherlands',
                "email" => "pardon@pasdemail.com",
                "lastname" => "Oraanje",
                "name" => "Kaas",
                "phone" => 12345685,
                'photo_id' => 5,
                "role_id" => 1,
                "sex" => "Homme",
                "team_id" => 2,
            ],
            [
                "age" => 26,
                "country" => 'Mongolia',
                "email" => "pardon@pasdemail.com",
                "lastname" => "Arrah",
                "name" => "Niska",
                "phone" => 12345685,
                'photo_id' => 6,
                "role_id" => 2,
                "sex" => "Homme",
                "team_id" => null,
            ],
            [
                "age" => 26,
                "country" => 'Belgium',
                "email" => "pardon@pasdemail.com",
                "lastname" => "Kevin",
                "name" => "Malcuit",
                "phone" => 12345685,
                'photo_id' => 7,
                "role_id" => 4,
                "sex" => "Homme",
                "team_id" => null,
            ],
            [
                "age" => 26,
                "country" => 'Spain',
                "email" => "pardon@pasdemail.com",
                "lastname" => "de Santos Gomez",
                "name" => "Pedro",
                "phone" => 12345685,
                'photo_id' => 8,
                "role_id" => 4,
                "sex" => "Homme",
                "team_id" => null,
            ],
            [
                "age" => 26,
                "country" => 'Mongolia',
                "email" => "pardon@pasdemail.com",
                "lastname" => "Michto",
                "name" => "Neuse",
                "phone" => 12345685,
                'photo_id' => 9,
                "role_id" => 2,
                "sex" => "Homme",
                "team_id" => 3,
            ],
            [
                "age" => 26,
                "country" => 'Dreamland',
                "email" => "pardon@pasdemail.com",
                "lastname" => "Cact",
                "name" => "Suse",
                "phone" => 12345685,
                'photo_id' => 10,
                "role_id" => 1,
                "sex" => "Homme",
                "team_id" => 2,
            ],
        ]);
    }
}
