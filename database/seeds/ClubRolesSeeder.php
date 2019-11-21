<?php

use App\ClubRoles;
use Illuminate\Database\Seeder;

class ClubRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'Club Administrator'
            ], [
                'name' => 'Creator'
            ], [
                'name' => 'Taster'
            ], [
                'name' => 'Not Accepted'
            ]

        ];

        foreach($roles as $role) {
            ClubRoles::Create($role);
        }
    }
}
