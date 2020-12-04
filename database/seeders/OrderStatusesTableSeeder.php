<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_statuses')->delete();

        DB::table('order_statuses')
            ->insert([
                0 => [
                    'id' => 1,
                    'status' => 'Waiting for assignment',
                ],
                1 => [
                    'id' => 2,
                    'status' => 'Assigned to a chef',
                ],
                2 => [
                    'id' => 3,
                    'status' => 'Waiting to the driver',
                ],
                3 => [
                    'id' => 4,
                    'status' => 'Order sent',
                ],
                4 => [
                    'id' => 5,
                    'status' => 'Order delivered successfully',
                ],
                5 => [
                    'id' => 6,
                    'status' => 'Order refused',
                ],
                6 => [
                    'id' => 7,
                    'status' => 'Order cancelled'
                ],
            ]);
    }
}
