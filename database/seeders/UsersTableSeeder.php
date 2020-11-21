<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')
            ->insert([
                0 => [
                    'id' => 2,
                    'first_name' => 'Elizabeth',
                    'last_name' => 'Midford',
                    'username' => 'lizzymoon',
                    'email' => 'lizzymoon@gmail.com',
                    'password' => Hash::make('123liz'),
                    'role_id' => 2,
                ],
                1 => [
                    'id' => 3,
                    'first_name' => 'David',
                    'last_name' => 'Brown',
                    'username' => 'davidbrowm',
                    'email' => 'davidbrowm@gmail.com',
                    'password' => Hash::make('browm879'),
                    'role_id' => 2,
                ],
                2 => [
                    'id' => 4,
                    'first_name' => 'Ghaith',
                    'last_name' => 'Albaker',
                    'username' => 'ghaith',
                    'email' => 'riagnesder@gmail.com',
                    'password' => Hash::make('ghaith'),
                    'role_id' => 1,
                ],
                3 => [
                    'id' => 5,
                    'first_name' => 'Alan',
                    'last_name' => 'Winchester',
                    'username' => 'alanwin',
                    'email' => 'alanwin@gmail.com',
                    'password' => Hash::make('alwin**10'),
                    'role_id' => 1,
                ],
                4 => [
                    'id' => 6,
                    'first_name' => 'Alice',
                    'last_name' => 'Carroll',
                    'username' => 'alicesunshine',
                    'email' => 'alicecarrol5@gmail.com',
                    'password' => Hash::make('sunshine15'),
                    'role_id' => 1,
                ],
                5 => [
                    'id' => 7,
                    'first_name' => 'Derek',
                    'last_name' => 'Myers',
                    'username' => 'myersderek',
                    'email' => 'myersderek@gmail.com',
                    'password' => Hash::make('night657'),
                    'role_id' => 2,
                ],
                6 => [
                    'id' => 8,
                    'first_name' => 'Admin',
                    'last_name' => 'Master',
                    'username' => 'admin',
                    'email' => 'admin@pizzaplace.com',
                    'password' => Hash::make('admin'),
                    'role_id' => 2,
                ],
           ]);
    }
}
