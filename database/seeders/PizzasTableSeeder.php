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
                'id' => 2,
                'name' => 'pepperoni',
                'description' => 'classical pepperoni pizza',
                'size_id' => 1,
            ],
            1 => [
                'id' => 3,
                'name' => 'hawaiian special',
                'description' => 'this pizza has pineapple cutted in dices and small slices',
                'size_id' => 2,
            ],
            2 => [
                'id' => 4,
                'name' => 'margherita',
                'description' => 'the most basic and essential pizza',
                'size_id' => 1,
            ],
            3 => [
                'id' => 5,
                'name' => 'chicken',
                'description' => 'classic chicken pizza	1',
                'size_id' => 1,
            ],
            4 => [
                'id' => 6,
                'name' => 'quattro formaggi',
                'description' => 'combination of four types of cheese',
                'size_id' => 1,
            ],
            5 => [
                'id' => 7,
                'name' => 'quattro stagioni',
                'description' => 'each section represents a season of the year	1',
                'size_id' => 1,
            ],
            6 => [
                'id' => 8,
                'name' => 'roman',
                'description' => 'pizza style originating from Rome	1',
                'size_id' => 1,
            ],
            7 => [
                'id' => 9,
                'name' => 'goat cheese',
                'description' => 'special pizza with goat milk cheese	1',
                'size_id' => 1,
            ],
            8 => [
                'id' => 10,
                'name' => 'chicken and bacon',
                'description' => 'the specialty of the pizzeria	1',
                'size_id' => 1,
            ],
            9 => [
                'id' => 11,
                'name' => 'chicken and bacon M',
                'description' => 'medium chicken and bacon pizza',
                'size_id' => 2,
            ],
            10 => [
                'id' => 12,
                'name' => 'roman M',
                'description' => 'medium roman pizza',
                'size_id' => 2,
            ],
            11 => [
                'id' => 13,
                'name' => 'pepperoni M',
                'description' => 'medium pepperoni pizza',
                'size_id' => 2,
            ],
            12 => [
                'id' => 14,
                'name' => 'goat cheese M',
                'description' => 'medium goat cheese pizza',
                'size_id' => 2,
            ],
            13 => [
                'id' => 15,
                'name' => 'quattro stagioni M',
                'description' => 'medium quattro stagioni pizza',
                'size_id' => 2,
            ],
            14 => [
                'id' => 16,
                'name' => 'quattro formaggi M',
                'description' => 'Medium sized quattro formaggi pizza',
                'size_id' => 2,
            ],
            15 => [
                'id' => 17,
                'name' => 'chicken M',
                'description' => 'medium chicken pizza',
                'size_id' => 2,
            ],
            16 => [
                'id' => 18,
                'name' => 'margherita M',
                'description' => 'medium margherita pizza',
                'size_id' => 2,
            ],
            17 => [
                'id' => 19,
                'name' => 'hawaiian M',
                'description' => 'medium hawaiian pizza',
                'size_id' => 2,
            ],
            18 => [
                'id' => 23,
                'name' => 'hawaiian',
                'description' => 'this pizza has pineapple pieces',
                'size_id' => 1,
            ],
            19 => [
                'id' => 25,
                'name' => 'my pizza',
                'description' => 'My pizza demo',
                'size_id' => 2,
            ],
          ]);
    }
}
