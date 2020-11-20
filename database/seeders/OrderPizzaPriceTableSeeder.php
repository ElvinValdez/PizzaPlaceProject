<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderPizzaPriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_pizza_price')->delete();

        DB::table('order_pizza_price')
            ->insert([
            [
                'pizza_price_id' => 4,
                'order_id' => 1,
                'quantity' => 2,
            ],
            [
                'pizza_price_id' => 4,
                'order_id' => 5,
                'quantity' => 4,
            ],
            [
                'pizza_price_id' => 4,
                'order_id' => 7,
                'quantity' => 4,
            ],
            [
                'pizza_price_id' => 6,
                'order_id' => 2,
                'quantity' => 1,
            ],
            [
                'pizza_price_id' => 7,
                'order_id' => 3,
                'quantity' => 2,
            ],
            [
                'pizza_price_id' => 13,
                'order_id' => 6,
                'quantity' => 3,
            ],
            [
                'pizza_price_id' => 17,
                'order_id' => 3,
                'quantity' => 1,
            ],
        ]);
    }
}
