<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();

        DB::table('roles')
            ->insert([
                0 => [
                    'id' => 1,
                    'name' => 'customer',
                    'description' => ' ',
                ],
                1 => [
                    'id' => 2,
                    'name' => 'employee',
                    'description' => ' ',
                ],
            ]);
    }
}
