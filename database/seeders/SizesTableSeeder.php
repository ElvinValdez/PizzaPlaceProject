<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->delete();

        DB::table('sizes')
            ->insert([
                0 => [
                    'id' => 1,
                    'name' => 'large',
                    'description' => 'a 14 inches pizza',
                ],
                1 => [
                    'id' => 2,
                    'name' => 'medium',
                    'description' => 'a 11 inches pizza',
                ],
                2 => [
                    'id' => 3,
                    'name' => 'small',
                    'description' => 'a 8 inches pizza',
                ]
            ]);
    }
}
