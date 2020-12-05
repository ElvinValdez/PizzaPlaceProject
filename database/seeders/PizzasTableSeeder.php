<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizzas')->delete();

        DB::table('pizzas')
          ->insert([
            0 => [
                'id' => 1,
                'name' => 'pepperoni',
                'description' => 'classical pepperoni pizza',
            ],
            1 => [
                'id' => 2,
                'name' => 'hawaiian special',
                'description' => 'this pizza has pineapple cutted in dices and small slices',
            ],
            2 => [
                'id' => 3,
                'name' => 'margherita',
                'description' => 'the most basic and essential pizza',
            ],
            3 => [
                'id' => 4,
                'name' => 'chicken',
                'description' => 'classic chicken pizza	1',
            ],
            4 => [
                'id' => 5,
                'name' => 'quattro formaggi',
                'description' => 'combination of four types of cheese',
            ],
            5 => [
                'id' => 6,
                'name' => 'quattro stagioni',
                'description' => 'each section represents a season of the year	1',
            ],
            6 => [
                'id' => 7,
                'name' => 'roman',
                'description' => 'pizza style originating from Rome	1',
            ],
            7 => [
                'id' => 8,
                'name' => 'goat cheese',
                'description' => 'special pizza with goat milk cheese	1',
            ],
            8 => [
                'id' => 9,
                'name' => 'chicken and bacon',
                'description' => 'the specialty of the pizzeria	1',
            ],
            9 => [
                'id' => 10,
                'name' => 'hawaiian',
                'description' => 'this pizza has pineapple pieces',
            ],
            10 => [
                'id' => 11,
                'name' => 'my pizza',
                'description' => 'My pizza demo',
            ],
          ]);
    }
}
