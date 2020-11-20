<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrinkPriceOrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drink_price_order')->delete();

        DB::table('drink_price_order')
            ->insert([
                [
                    'drink_price_id' => 6,
                    'order_id' => 1,
                    'quantity' => 1,
                ],
                [
                    'drink_price_id' => 6,
                    'order_id' => 4,
                    'quantity' => 4,
                ],
                [
                    'drink_price_id' => 6,
                    'order_id' => 6,
                    'quantity' => 2,
                ],
                [
                    'drink_price_id' => 6,
                    'order_id' => 7,
                    'quantity' => 5,
                ],
                [
                    'drink_price_id' => 7,
                    'order_id' => 5,
                    'quantity' => 3,
                ],
                [
                    'drink_price_id' => 8,
                    'order_id' => 2,
                    'quantity' => 2,
                ],
                [
                    'drink_price_id' => 9,
                    'order_id' => 3,
                    'quantity' => 3,
                ],                
            ]);
    }
}
