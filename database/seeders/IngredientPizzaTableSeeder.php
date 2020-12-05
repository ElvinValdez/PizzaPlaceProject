<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientPizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredient_pizza')->delete();

        DB::table('ingredient_pizza')
            ->insert([
                [
                    'pizza_id' => 2,
                    'ingredient_id' => 2,
                    'quantity' => 250,
                ],
                [
                    'pizza_id' => 2,
                    'ingredient_id' => 3,
                    'quantity' => 300,
                ],
                [
                    'pizza_id' => 2,
                    'ingredient_id' => 5,
                    'quantity' => 100,
                ],
                [
                    'pizza_id' => 2,
                    'ingredient_id' => 7,
                    'quantity' => 100,
                ],
                [
                    'pizza_id' => 2,
                    'ingredient_id' => 11,
                    'quantity' => 10,
                ],
                [
                    'pizza_id' => 2,
                    'ingredient_id' => 12,
                    'quantity' => 1,
                ],
                [
                    'pizza_id' => 2,
                    'ingredient_id' => 15,
                    'quantity' => 1,
                ],
                [
                    'pizza_id' => 2,
                    'ingredient_id' => 16,
                    'quantity' => 1,
                ],
                [
                    'pizza_id' => 3,
                    'ingredient_id' => 2,
                    'quantity' => 250,
                ],
                [
                    'pizza_id' => 3,
                    'ingredient_id' => 7,
                    'quantity' => 100,
                ],
                [
                    'pizza_id' => 3,
                    'ingredient_id' => 10,
                    'quantity' => 4,
                ],
                [
                    'pizza_id' => 3,
                    'ingredient_id' => 11,
                    'quantity' => 15,
                ],
                [
                    'pizza_id' => 3,
                    'ingredient_id' => 14,
                    'quantity' => 250,
                ],
                [
                    'pizza_id' => 4,
                    'ingredient_id' => 2,
                    'quantity' => 250,
                ],
                [
                    'pizza_id' => 4,
                    'ingredient_id' => 7,
                    'quantity' => 100,
                ],
                [
                    'pizza_id' => 4,
                    'ingredient_id' => 11,
                    'quantity' => 15,
                ],
                [
                    'pizza_id' => 5,
                    'ingredient_id' => 2,
                    'quantity' => 250,
                ],
                [
                    'pizza_id' => 5,
                    'ingredient_id' => 7,
                    'quantity' => 100,
                ],
                [
                    'pizza_id' => 5,
                    'ingredient_id' => 11,
                    'quantity' => 15,
                ],
                [
                    'pizza_id' => 5,
                    'ingredient_id' => 17,
                    'quantity' => 200,
                ],
                [
                    'pizza_id' => 5,
                    'ingredient_id' => 18,
                    'quantity' => 10,
                ],
                [
                    'pizza_id' => 6,
                    'ingredient_id' => 2,
                    'quantity' => 150,
                ],
                [
                    'pizza_id' => 6,
                    'ingredient_id' => 7,
                    'quantity' => 100,
                ],
                [
                    'pizza_id' => 6,
                    'ingredient_id' => 11,
                    'quantity' => 15,
                ],
                [
                    'pizza_id' => 6,
                    'ingredient_id' => 19,
                    'quantity' => 100,
                ],
                [
                    'pizza_id' => 1,
                    'ingredient_id' => 14,
                    'quantity' => 2,
                ],
                [
                    'pizza_id' => 1,
                    'ingredient_id' => 16,
                    'quantity' => 1,
                ],
                [
                    'pizza_id' => 1,
                    'ingredient_id' => 1,
                    'quantity' => 2,
                ],
                [
                    'pizza_id' => 7,
                    'ingredient_id' => 29,
                    'quantity' => 1,
                ],
                [
                    'pizza_id' => 7,
                    'ingredient_id' => 28,
                    'quantity' => 1,
                ],
                [
                    'pizza_id' => 7,
                    'ingredient_id' => 27,
                    'quantity' => 1,
                ],
                [
                    'pizza_id' => 8,
                    'ingredient_id' => 26,
                    'quantity' => 5,
                ],
                [
                    'pizza_id' => 9,
                    'ingredient_id' => 15,
                    'quantity' => 1,
                ],
                [
                    'pizza_id' => 9,
                    'ingredient_id' => 16,
                    'quantity' => 2,
                ],
                [
                    'pizza_id' => 9,
                    'ingredient_id' => 17,
                    'quantity' => 1,
                ],
                [
                    'pizza_id' => 9,
                    'ingredient_id' => 18,
                    'quantity' => 2,
                ],
                [
                    'pizza_id' => 9,
                    'ingredient_id' => 19,
                    'quantity' => 2,
                ],
                [
                    'pizza_id' => 10,
                    'ingredient_id' => 21,
                    'quantity' => 3,
                ],
                [
                    'pizza_id' => 10,
                    'ingredient_id' => 22,
                    'quantity' => 4,
                ],
                [
                    'pizza_id' => 11,
                    'ingredient_id' => 21,
                    'quantity' => 1,
                ],
                [
                    'pizza_id' => 11,
                    'ingredient_id' => 19,
                    'quantity' => 1,
                ],
                [
                    'pizza_id' => 11,
                    'ingredient_id' => 17,
                    'quantity' => 1,
                ],
                [
                    'pizza_id' => 11,
                    'ingredient_id' => 15,
                    'quantity' => 1,
                ],
                [
                    'pizza_id' => 11,
                    'ingredient_id' => 13,
                    'quantity' => 1,
                ],
                [
                    'pizza_id' => 11,
                    'ingredient_id' => 11,
                    'quantity' => 1,
                ],
                [
                    'pizza_id' => 11,
                    'ingredient_id' => 9,
                    'quantity' => 1,
                ],
                [
                    'pizza_id' => 11,
                    'ingredient_id' => 7,
                    'quantity' => 1,
                ],
                [
                    'pizza_id' => 11,
                    'ingredient_id' => 5,
                    'quantity' => 1,
                ],
                [
                    'pizza_id' => 11,
                    'ingredient_id' => 3,
                    'quantity' => 1,
                ],                
            ]);
    }
}
