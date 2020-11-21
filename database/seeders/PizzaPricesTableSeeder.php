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
                'pizza_id' => 3,
            ],
            [
                'id' => 2,
                'date' => '2020-08-03',
                'price' => 11.99,
                'pizza_id' => 3,
            ],
            [
                'id' => 3,
                'date' => '2020-08-03',
                'price' => 15.99,
                'pizza_id' => 5,
            ],
            [
                'id' => 4,
                'date' => NULL,
                'price' => 12.99,
                'pizza_id' => 17,
            ],
            [
                'id' => 5,
                'date' => NULL,
                'price' => 14.99,
                'pizza_id' => 2,
            ],
            [
                'id' => 6,
                'date' => NULL,
                'price' => 11.99,
                'pizza_id' => 13,
            ],
            [
                'id' => 7,
                'date' => NULL,
                'price' => 12.99,
                'pizza_id' => 4,
            ],
            [
                'id' => 8,
                'date' => '2020-08-03',
                'price' => 9.99,
                'pizza_id' => 18,
            ],
            [
                'id' => 9,
                'date' => NULL,
                'price' => 16.99,
                'pizza_id' => 6,
            ],
            [
                'id' => 10,
                'date' => NULL,
                'price' => 14.99,
                'pizza_id' => 16,
            ],
            [
                'id' => 11,
                'date' => NULL,
                'price' => 14.99,
                'pizza_id' => 9,
            ],
            [
                'id' => 12,
                'date' => NULL,
                'price' => 11.99,
                'pizza_id' => 14,
            ],
            [
                'id' => 13,
                'date' => NULL,
                'price' => 10.99,
                'pizza_id' => 10,
            ],
            [
                'id' => 14,
                'date' => NULL,
                'price' => 7.99,
                'pizza_id' => 11,
            ],
            [
                'id' => 15,
                'date' => NULL,
                'price' => 15.99,
                'pizza_id' => 7,
            ],
            [
                'id' => 16,
                'date' => NULL,
                'price' => 13.99,
                'pizza_id' => 15,
            ],
            [
                'id' => 17,
                'date' => NULL,
                'price' => 14.99,
                'pizza_id' => 8,
            ],
            [
                'id' => 18,
                'date' => '2020-08-03',
                'price' => 11.99,
                'pizza_id' => 12,
            ],
            [
                'id' => 19,
                'date' => NULL,
                'price' => 12.99,
                'pizza_id' => 3,
            ],
            [
                'id' => 20,
                'date' => '2020-08-03',
                'price' => 120,
                'pizza_id' => 3,
            ],
            [
                'id' => 21,
                'date' => NULL,
                'price' => 19.99,
                'pizza_id' => 3,
            ],
            [
                'id' => 22,
                'date' => '2020-08-03',
                'price' => 12.99,
                'pizza_id' => 18,
            ],
            [
                'id' => 24,
                'date' => '2020-08-03',
                'price' => 200,
                'pizza_id' => 18,
            ],
            [
                'id' => 25,
                'date' => NULL,
                'price' => 23,
                'pizza_id' => 18,
            ],
            [
                'id' => 26,
                'date' => '2020-08-03',
                'price' => 4.2,
                'pizza_id' => 5,
            ],
        ]);
    }
}
