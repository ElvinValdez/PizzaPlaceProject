<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->delete();

        DB::table('units')
            ->insert([
                0 => [
                    'id' => 1,
                    'name' => 'gram',
                    'symbol' => 'gr',
                    'description' => 'weight on grams',
                ],
                1 => [
                    'id' => 2,
                    'name' => 'unit',
                    'symbol' => 'u',
                    'description' => 'a countable quantity',
                ],
                2 => [
                    'id' => 3,
                    'name' => 'milliliters',
                    'symbol' => 'ml',
                    'description' => 'volume measure usually for liquids',
                ],
                3 => [
                    'id' => 4,
                    'name' => 'pinch',
                    'symbol' => 'pinch',
                    'description' => '1/16 teaspoon',
                ],
                4 => [
                    'id' => 7,
                    'name' => 'Kilogram',
                    'symbol' => 'Kg',
                    'description' => 'a measure of weight for ingredients',
                ],
                5 => [
                    'id' => 10,
                    'name' => 'Ton',
                    'symbol' => 'Tn',
                    'description' => 'a unit to measure weight',
                ],
            ]);
    }
}
