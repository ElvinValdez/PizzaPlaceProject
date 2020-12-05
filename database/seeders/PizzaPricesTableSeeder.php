<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzaPricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizza_prices')->delete();

        DB::table('pizza_prices')
          ->insert([
            [
                'id' => 1,
                'date' => '2020-08-03',
                'price' => 14.99,
                'pizza_size_id' => 3,
            ],
            [
                'id' => 2,
                'date' => '2020-08-03',
                'price' => 11.99,
                'pizza_size_id' => 3,
            ],
            [
                'id' => 3,
                'date' => '2020-08-03',
                'price' => 15.99,
                'pizza_size_id' => 5,
            ],
            [
                'id' => 4,
                'date' => NULL,
                'price' => 12.99,
                'pizza_size_id' => 11,
            ],
            [
                'id' => 5,
                'date' => NULL,
                'price' => 14.99,
                'pizza_size_id' => 2,
            ],
            [
                'id' => 6,
                'date' => NULL,
                'price' => 11.99,
                'pizza_size_id' => 10,
            ],
            [
                'id' => 7,
                'date' => NULL,
                'price' => 12.99,
                'pizza_size_id' => 4,
            ],
            [
                'id' => 8,
                'date' => NULL,
                'price' => 16.99,
                'pizza_size_id' => 6,
            ],
            [
                'id' => 9,
                'date' => NULL,
                'price' => 14.99,
                'pizza_size_id' => 9,
            ],
            [
                'id' => 10,
                'date' => NULL,
                'price' => 11.99,
                'pizza_size_id' => 8,
            ],
            [
                'id' => 11,
                'date' => NULL,
                'price' => 15.99,
                'pizza_size_id' => 7,
            ],
            [
                'id' => 12,
                'date' => '2020-08-03',
                'price' => 12.99,
                'pizza_size_id' => 3,
            ],
            [
                'id' => 13,
                'date' => '2020-05-03',
                'price' => 120,
                'pizza_size_id' => 3,
            ],
            [
                'id' => 14,
                'date' => NULL,
                'price' => 19.99,
                'pizza_size_id' => 3,
            ],
            [
                'id' => 15,
                'date' => NULL,
                'price' => 4.2,
                'pizza_size_id' => 5,
            ],
            [
                'id' => 16,
                'date' => NULL,
                'price' => 12.00,
                'pizza_size_id' => 1,
            ],
            [
                'id' => 17,
                'date' => NULL,
                'price' => 13.45,
                'pizza_size_id' => 12,
            ],
            [
                'id' => 18,
                'date' => NULL,
                'price' => 19.00,
                'pizza_size_id' => 13,
            ],
            [
                'id' => 19,
                'date' => NULL,
                'price' => 9.00,
                'pizza_size_id' => 14,
            ],
            [
                'id' => 20,
                'date' => NULL,
                'price' => 11.41,
                'pizza_size_id' => 15,
            ],
            [
                'id' => 21,
                'date' => NULL,
                'price' => 1.12,
                'pizza_size_id' => 16,
            ],
            [
                'id' => 22,
                'date' => NULL,
                'price' => 25.00,
                'pizza_size_id' => 17,
            ],
            [
                'id' => 23,
                'date' => NULL,
                'price' => 27.00,
                'pizza_size_id' => 18,
            ],
            [
                'id' => 24,
                'date' => NULL,
                'price' => 37.12,
                'pizza_size_id' => 19,
            ],
            [
                'id' => 25,
                'date' => NULL,
                'price' => 24.20,
                'pizza_size_id' => 20,
            ],
            [
                'id' => 26,
                'date' => NULL,
                'price' => 42.00,
                'pizza_size_id' => 21,
            ],
            [
                'id' => 27,
                'date' => NULL,
                'price' => 69.96,
                'pizza_size_id' => 22,
            ],
        ]);
    }
}
