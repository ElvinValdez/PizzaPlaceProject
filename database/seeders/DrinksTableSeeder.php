<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drinks')->delete();

        DB::table('drinks')
            ->insert([
                [
                    'id' => 1,
                    'name' => 'Coca-Cola',
                    'description' => 'Plastic Bottle', 
                    'size' => '2 lt',
                ],
                [
                    'id' => 3,
                    'name' => 'Fanta',
                    'description' => 'Plastic Bottle', 
                    'size' => '2 lt',
                ],
                [
                    'id' => 4,
                    'name' => 'Sprite',
                    'description' => 'Plastic Bottle', 
                    'size' => '2 lt',
                ],
                [
                    'id' => 5,
                    'name' => 'Pepsi',
                    'description' => 'Plastic Bottle', 
                    'size' => '2 lt',
                ],                
            ]);
    }
}
