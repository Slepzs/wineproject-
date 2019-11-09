<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
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
                'name' => 'administrator'
            ], [
                'name' => 'user'
            ], [
                'name' => 'banned'
            ]

        ];

        foreach($roles as $role) {
            Role::Create($role);
        }

    }
}
