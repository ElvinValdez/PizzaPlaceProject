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
                    'customer_user_id' => 2,
                    'seller_user_id' => 7,
                    'address' => 'Sunny Estates, Gardnersville, NY', 
                    'time' => '2020-07-18 03:18:46', 
                    'sent' => 0,
                ],
                [
                    'id' => 2,
                    'customer_user_id' => 6,
                    'seller_user_id' => 4,
                    'address' => 'Dewy Bear Autoroute, Westville, NY', 
                    'time' => '2020-07-18 03:23:07', 
                    'sent' => 1,
                ],
                [
                    'id' => 3,
                    'customer_user_id' => 5,
                    'seller_user_id' => 3,
                    'address' => 'Fallen Brook Grove, West Sparta, NY', 
                    'time' => '2020-07-18 03:26:16', 
                    'sent' => 0,
                ],
                [
                    'id' => 4,
                    'customer_user_id' => 4,
                    'seller_user_id' => 3,
                    'address' => '21 jumpstreet', 
                    'time' => '2020-08-03 19:53:05', 
                    'sent' => 1,
                ],
                [
                    'id' => 5,
                    'customer_user_id' => 4,
                    'seller_user_id' => 3,
                    'address' => 'El Paso', 
                    'time' => '2020-08-03 20:56:39', 
                    'sent' => 0,
                ],
                [
                    'id' => 6,
                    'customer_user_id' => 4,
                    'seller_user_id' => 3,
                    'address' => 'Texas', 
                    'time' => '2020-08-03 22:12:15', 
                    'sent' => 1,
                ],
                [
                    'id' => 7,
                    'customer_user_id' => 4,
                    'seller_user_id' => 3,
                    'address' => '21 jumpstreet', 
                    'time' => '2020-09-03 15:20:54', 
                    'sent' => 1,
                ],                
            ]);
    }
}
