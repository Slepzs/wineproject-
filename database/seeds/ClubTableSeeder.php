<?php

use Illuminate\Database\Seeder;

class ClubTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clubs = [
            [

            ], [

            ]
        ];


        foreach($clubs as $club) {
            Club::Create($club);
        }
    }
}
