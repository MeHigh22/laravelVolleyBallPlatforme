<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'club' => 'Equipe Drari Bx',
                'city' => 'Brussels',
                'country' => 'Belgium',
                'maxplayers' => 6,
                'AVN' => 2,
                'CTR' => 2,
                'ARR' => 2,
                'RMP' => 2,
                'continent_id' => 1,
            ],
            [
                'club' => 'Equipe Drari Jaunes',
                'city' => 'Pekin',
                'country' => 'China',
                'maxplayers' => 6,
                'AVN' => 2,
                'CTR' => 2,
                'ARR' => 2,
                'RP' => 2,
                'continent_id' => 2,
            ],
            [
                'club' => 'Equipe Drari Savane',
                'city' => 'Brazzaville',
                'country' => 'RARR',
                'maxplayers' => 12,
                'AVN' => 2,
                'CTR' => 2,
                'ARR' => 2,
                'RP' => 1,
                'continent_id' => 3,
            ],
            [
                'club' => 'Equipe No Lacking',
                'city' => 'Mississipi',
                'country' => 'USA',
                'maxplayers' => 6,
                'AVN' => 2,
                'CTR' => 2,
                'ARR' => 2,
                'RP' => 2,
                'continent_id' => 7,
            ],

        ]);
    }
}
