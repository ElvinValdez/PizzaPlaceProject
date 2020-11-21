<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrinkPricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drink_prices')->delete();

        DB::table('drink_prices')
            ->insert([
                [
                    'id' => 6,
                    'date' => NULL,
                    'price' => 2.99,
                    'drink_id' => 1,
                ],
                [
                    'id' => 7,
                    'date' => NULL,
                    'price' => 2.99,
                    'drink_id' => 5,
                ],
                [
                    'id' => 8,
                    'date' => NULL,
                    'price' => 2.99,
                    'drink_id' => 3,
                ],
                [
                    'id' => 9,
                    'date' => NULL,
                    'price' => 2.99,
                    'drink_id' => 4,
                ],                
            ]);
    }
}
