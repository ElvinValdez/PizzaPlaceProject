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
                    'image' => '/storage/drinks/1cb237cac43cf4041589e31daf0006d2.png',
                ],
                [
                    'id' => 3,
                    'name' => 'Fanta',
                    'description' => 'Plastic Bottle', 
                    'size' => '2 lt',
                    'image' => '/storage/drinks/e76b403b3d372cf0f692eb444ec2a4d1.png',
                ],
                [
                    'id' => 4,
                    'name' => 'Sprite',
                    'description' => 'Plastic Bottle', 
                    'size' => '2 lt',
                    'image' => '/storage/drinks/ecf6416371c79da5254574f6b58e4ebf.png',
                ],
                [
                    'id' => 5,
                    'name' => 'Pepsi',
                    'description' => 'Plastic Bottle', 
                    'size' => '2 lt',
                    'image' => '/storage/drinks/b2a493baeda2232e3faab6df5e6e7efb.png',
                ],                
            ]);
    }
}
