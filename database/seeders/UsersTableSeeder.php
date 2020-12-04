<?php

namespace Database\Seeders;

use App\Models\User;
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

        $user = User::create([
            'id' => 1,
            'first_name' => 'Admin',
            'last_name' => 'Master',
            'username' => 'admin',
            'email' => 'admin@pizzaplace.com',
            'password' => Hash::make('admin'),
        ]);
        $user->assignRole('cashier');
        
        $user = User::create([
            'id' => 2,
            'first_name' => 'Elizabeth',
            'last_name' => 'Midford',
            'username' => 'lizzymoon',
            'email' => 'lizzymoon@gmail.com',
            'password' => Hash::make('123liz'),
        ]);
        $user->assignRole('chef');
        
        $user = User::create([
            'id' => 3,
            'first_name' => 'David',
            'last_name' => 'Brown',
            'username' => 'davidbrowm',
            'email' => 'davidbrowm@gmail.com',
            'password' => Hash::make('browm879'),
        ]);
        $user->assignRole('cashier');

        $user = User::create([
            'id' => 4,
            'first_name' => 'Ghaith',
            'last_name' => 'Albaker',
            'username' => 'ghaith',
            'email' => 'riagnesder@gmail.com',
            'password' => Hash::make('ghaith'),
        ]);
        $user->assignRole('customer');

        $user = User::create([
            'id' => 5,
            'first_name' => 'Alan',
            'last_name' => 'Winchester',
            'username' => 'alanwin',
            'email' => 'alanwin@gmail.com',
            'password' => Hash::make('alwin**10'),
        ]);
        $user->assignRole('customer');

        $user = User::create([
            'id' => 6,
            'first_name' => 'Alice',
            'last_name' => 'Carroll',
            'username' => 'alicesunshine',
            'email' => 'alicecarrol5@gmail.com',
            'password' => Hash::make('sunshine15'),
        ]);
        $user->assignRole('customer');

        $user = User::create([
            'id' => 7,
            'first_name' => 'Derek',
            'last_name' => 'Myers',
            'username' => 'myersderek',
            'email' => 'myersderek@gmail.com',
            'password' => Hash::make('night657'),
        ]);
        $user->assignRole('cashier');

        $user = User::create([
            'id' => 8,
            'first_name' => 'vitoria',
            'last_name' => 'dulliu',
            'username' => 'vitoriadulliu',
            'email' => '5vitoriadulliu@ikimaru.com',
            'password' => Hash::make('vitoria123'),
        ]);
        $user->assignRole('driver');
    }
}
