<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->delete();

        DB::table('ingredients')
            ->insert([
                [
                    'id' => 1, 
                    'name' => 'tomatoes',
                    'description' => 'common tomato',
                    'unit_id' => 1,
                ],
                [
                    'id' => 2, 
                    'name' => 'mozzarella',
                    'description' => 'mozarella cheese for pizza',
                    'unit_id' => 1,
                ],
                [
                    'id' => 3, 
                    'name' => 'pepperoni',
                    'description' => 'Usually cutted in slices of 3 or 4 mm',
                    'unit_id' => 1,
                ],
                [
                    'id' => 4, 
                    'name' => 'onion slices',
                    'description' => 'onion cutted in slices',
                    'unit_id' => 1,
                ],
                [
                    'id' => 5, 
                    'name' => 'onion diced',
                    'description' => 'diced onion',
                    'unit_id' => 1,
                ],
                [
                    'id' => 6, 
                    'name' => 'anchovies',
                    'description' => 'cutted in slices of 2 - 3 mm',
                    'unit_id' => 1,
                ],
                [
                    'id' => 7, 
                    'name' => 'pizza sauce',
                    'description' => 'tomato sauce for pizza',
                    'unit_id' => 1,
                ],
                [
                    'id' => 8, 
                    'name' => 'mushrooms',
                    'description' => 'vertical sliced mushrooms',
                    'unit_id' => 2,
                ],
                [
                    'id' => 9, 
                    'name' => 'ham slices',
                    'description' => 'cutted in slices of 2 - 3mm',
                    'unit_id' => 1,
                ],
                [
                    'id' => 10, 
                    'name' => 'pineapple',
                    'description' => 'pineapple slices cut into cubes',
                    'unit_id' => 2,
                ],
                [
                    'id' => 11, 
                    'name' => 'olive oil',
                    'description' => 'extra virgin olive oil',
                    'unit_id' => 3,
                ],
                [
                    'id' => 12, 
                    'name' => 'basil',
                    'description' => 'ground basil',
                    'unit_id' => 4,
                ],
                [
                    'id' => 14, 
                    'name' => 'ham diced',
                    'description' => 'diced ham',
                    'unit_id' => 1,
                ],
                [
                    'id' => 15, 
                    'name' => 'rosemary',
                    'description' => 'rosemary leaves',
                    'unit_id' => 4,
                ],
                [
                    'id' => 16, 
                    'name' => 'pepper',
                    'description' => 'condiment',
                    'unit_id' => 4,
                ],
                [
                    'id' => 17, 
                    'name' => 'chicken',
                    'description' => 'shredded chicken breast',
                    'unit_id' => 1,
                ],
                [
                    'id' => 18, 
                    'name' => 'olive',
                    'description' => 'olive cut in half and pitted',
                    'unit_id' => 2,
                ],
                [
                    'id' => 19, 
                    'name' => 'gorgonzola',
                    'description' => 'a type of blue cheese',
                    'unit_id' => 1,
                ],
                [
                    'id' => 20, 
                    'name' => 'parmesan',
                    'description' => 'parmesan cheese',
                    'unit_id' => 1,
                ],
                [
                    'id' => 24, 
                    'name' => 'goat cheese',
                    'description' => 'goat cheese',
                    'unit_id' => 1,
                ],
                [
                    'id' => 25, 
                    'name' => 'artichokes',
                    'description' => 'cutted in slices',
                    'unit_id' => 2,
                ],
                [
                    'id' => 26, 
                    'name' => 'black olive',
                    'description' => 'black olive cut in half',
                    'unit_id' => 2,
                ],
                [
                    'id' => 27, 
                    'name' => 'salami',
                    'description' => 'a type of highly seasoned sausage, sliced',
                    'unit_id' => 1,
                ],
                [
                    'id' => 28, 
                    'name' => 'basil leaves',
                    'description' => 'basil leaves',
                    'unit_id' => 2,
                ],
                [
                    'id' => 29, 
                    'name' => 'cherry tomato',
                    'description' => 'type of small tomato, cut into slices',
                    'unit_id' => 1,
                ],                
            ]);
    }
}
