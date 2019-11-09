<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            [
                'role_id' => 1,
                'is_active' => 1,
                'name' => 'Tobias Heide',
                'last_name' => 'Jensen',
                'email' => 'slepzs@gmail.com',
                'password' => bcrypt('superpassword123')
            ], [
                'role_id' => 1,
                'is_active' => 1,
                'name' => 'Signe',
                'last_name' => 'Frederiksen',
                'email' => 'signe@etellerandetemail',
                'password' => bcrypt('superpassword123')
            ]
        ];


        foreach($users as $user) {
            User::Create($user);
        }



    }
}
