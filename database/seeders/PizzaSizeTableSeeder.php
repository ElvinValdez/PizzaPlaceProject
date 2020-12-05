<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzaSizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizza_size')->delete();

        DB::table('pizza_size')->insert([
            0 => [
                'id' => 1,
                'pizza_id' => 1,
                'size_id' => 1,
                'price' => 12.00,
                'date' => NULL,
            ],
            1 => [
                'id' => 2,
                'pizza_id' => 1,
                'size_id' => 2,
                'price' => 14.99,
                'date' => NULL,
            ],
            2 => [
                'id' => 3,
                'pizza_id' => 2,
                'size_id' => 2,
                'price' => 14.99,
                'date' => '2020-08-03',
            ],
            3 => [
                'id' => 4,
                'pizza_id' => 3,
                'size_id' => 1,
                'price' => 12.99,
                'date' => NULL,
            ],
            4 => [
                'id' => 5,
                'pizza_id' => 3,
                'size_id' => 2,
                'price' => 15.99,
                'date' => '2020-08-03',
            ],
            5 => [
                'id' => 6,
                'pizza_id' => 4,
                'size_id' => 1,
                'price' => 16.99,
                'date' => NULL,
            ],
            6 => [
                'id' => 7,
                'pizza_id' => 4,
                'size_id' => 2,
                'price' => 15.99,
                'date' => NULL,
            ],
            7 => [
                'id' => 8,
                'pizza_id' => 5,
                'size_id' => 1,
                'price' => 11.99,
                'date' => NULL,
            ],
            8 => [
                'id' => 9,
                'pizza_id' => 5,
                'size_id' => 2,
                'price' => 14.99,
                'date' => NULL,
            ],
            9 => [
                'id' => 10,
                'pizza_id' => 6,
                'size_id' => 1,
                'price' => 11.99,
                'date' => NULL,
            ],
            10 => [
                'id' => 11,
                'pizza_id' => 6,
                'size_id' => 2,
                'price' => 12.99,
                'date' => NULL,
            ],
            11 => [
                'id' => 12,
                'pizza_id' => 7,
                'size_id' => 1,
                'price' => 13.45,
                'date' => NULL,
            ],
            12 => [
                'id' => 13,
                'pizza_id' => 7,
                'size_id' => 2,
                'price' => 19.00,
                'date' => NULL,
            ],
            13 => [
                'id' => 14,
                'pizza_id' => 8,
                'size_id' => 1,
                'price' => 9.00,
                'date' => NULL,
            ],
            14 => [
                'id' => 15,
                'pizza_id' => 8,
                'size_id' => 2,
                'price' => 11.41,
                'date' => NULL,
            ],
            15 => [
                'id' => 16,
                'pizza_id' => 9,
                'size_id' => 1,
                'price' => 1.12,
                'date' => NULL,
            ],
            16 => [
                'id' => 17,
                'pizza_id' => 9,
                'size_id' => 2,
                'price' => 25.00,
                'date' => NULL,
            ],
            17 => [
                'id' => 18,
                'pizza_id' => 10,
                'size_id' => 1,
                'price' => 27.00,
                'date' => NULL,
            ],
            18 => [
                'id' => 19,
                'pizza_id' => 10,
                'size_id' => 2,
                'price' => 37.12,
                'date' => NULL,
            ],
            19 => [
                'id' => 20,
                'pizza_id' => 11,
                'size_id' => 2,
                'price' => 24.20,
                'date' => NULL,
            ],
            20 => [
                'id' => 21,
                'pizza_id' => 11,
                'size_id' => 3,
                'price' => 42.00,
                'date' => NULL,
            ],
            21 => [
                'id' => 22,
                'pizza_id' => 1,
                'size_id' => 3,
                'price' => 69.96,
                'date' => NULL,
            ],
            22 => [
                'id' => 23,
                'pizza_id' => 2,
                'size_id' => 2,
                'price' => 11.99,
                'date' => '2020-08-03',
            ],
            23 => [
                'id' => 24,
                'pizza_id' => 2,
                'size_id' => 2,
                'price' => 12.99,
                'date' => '2020-08-03',
            ],
            24 => [
                'id' => 25,
                'pizza_id' => 2,
                'size_id' => 2,
                'price' => 19.99,
                'date' => NULL,
            ],
            25 => [
                'id' => 26,
                'pizza_id' => 3,
                'size_id' => 2,
                'price' => 4.2,
                'date' => NULL,
            ],
        ]);
    }
}
