<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->delete();

        DB::table('orders')
            ->insert([
                [
                    'id' => 1,
                    'customer_user_id' => 6,
                    'seller_user_id' => 7,
                    'order_status_id' => 1,
                    'address' => 'Sunny Estates, Gardnersville, NY', 
                    'payment_method' => 'Cash On Delivery',
                    'time' => '2020-07-18 03:18:46', 
                ],
                [
                    'id' => 2,
                    'customer_user_id' => 6,
                    'seller_user_id' => 7,
                    'order_status_id' => 1,
                    'address' => 'Dewy Bear Autoroute, Westville, NY', 
                    'payment_method' => 'Cash On Delivery',
                    'time' => '2020-07-18 03:23:07', 
                ],
                [
                    'id' => 3,
                    'customer_user_id' => 5,
                    'seller_user_id' => 3,
                    'order_status_id' => 1,
                    'address' => 'Fallen Brook Grove, West Sparta, NY', 
                    'payment_method' => 'Cash On Delivery',
                    'time' => '2020-07-18 03:26:16', 
                ],
                [
                    'id' => 4,
                    'customer_user_id' => 4,
                    'seller_user_id' => 3,
                    'order_status_id' => 1,
                    'address' => '21 jumpstreet', 
                    'payment_method' => 'Cash On Delivery',
                    'time' => '2020-08-03 19:53:05', 
                ],
                [
                    'id' => 5,
                    'customer_user_id' => 4,
                    'seller_user_id' => 3,
                    'order_status_id' => 1,
                    'address' => 'El Paso', 
                    'payment_method' => 'Cash On Delivery',
                    'time' => '2020-08-03 20:56:39', 
                ],
                [
                    'id' => 6,
                    'customer_user_id' => 4,
                    'seller_user_id' => 3,
                    'order_status_id' => 1,
                    'address' => 'Texas', 
                    'payment_method' => 'Cash On Delivery',
                    'time' => '2020-08-03 22:12:15', 
                ],
                [
                    'id' => 7,
                    'customer_user_id' => 4,
                    'seller_user_id' => 3,
                    'order_status_id' => 1,
                    'address' => '21 jumpstreet', 
                    'payment_method' => 'Cash On Delivery',
                    'time' => '2020-09-03 15:20:54', 
                ],                
            ]);
    }
}
