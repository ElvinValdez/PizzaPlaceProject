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
                'image' => '/storage/pizzas/b14f4f3066f544eab9e62a3d1ce9919b.png',
            ],
            1 => [
                'id' => 2,
                'name' => 'hawaiian special',
                'description' => 'this pizza has pineapple cutted in dices and small slices',
                'image' => '/storage/pizzas/bfb910d5e39b25a928484042560b8e49.png',
            ],
            2 => [
                'id' => 3,
                'name' => 'margherita',
                'description' => 'the most basic and essential pizza',
                'image' => '/storage/pizzas/a2abf638b8349eef9961f9127691cb03.png',
            ],
            3 => [
                'id' => 4,
                'name' => 'chicken',
                'description' => 'classic chicken pizza	1',
                'image' => '/storage/pizzas/4374a0108b10db0c4fd3917174f97847.png',
            ],
            4 => [
                'id' => 5,
                'name' => 'quattro formaggi',
                'description' => 'combination of four types of cheese',
                'image' => '/storage/pizzas/0ca78cb7f8209a8b92bb42de8464903a.png',
            ],
            5 => [
                'id' => 6,
                'name' => 'quattro stagioni',
                'description' => 'each section represents a season of the year	1',
                'image' => '/storage/pizzas/2f6422b183f83d6987c098c092d0c5ca.png',
            ],
            6 => [
                'id' => 7,
                'name' => 'roman',
                'description' => 'pizza style originating from Rome	1',
                'image' => '/storage/pizzas/b4c23fedbafb4fb6db34eddd8902d0bb.png',
            ],
            7 => [
                'id' => 8,
                'name' => 'goat cheese',
                'description' => 'special pizza with goat milk cheese	1',
                'image' => '/storage/pizzas/dffb8e5da3b23e2b5de5b90898916c93.png',
            ],
            8 => [
                'id' => 9,
                'name' => 'chicken and bacon',
                'description' => 'the specialty of the pizzeria	1',
                'image' => '/storage/pizzas/4374a0108b10db0c4fd3917174f97847.png',
            ],
            9 => [
                'id' => 10,
                'name' => 'hawaiian',
                'description' => 'this pizza has pineapple pieces',
                'image' => '/storage/pizzas/bfb910d5e39b25a928484042560b8e49.png',
            ],
            10 => [
                'id' => 11,
                'name' => 'my pizza',
                'description' => 'My pizza demo',
                'image' => '/storage/pizzas/b14f4f3066f544eab9e62a3d1ce9919b.png',
            ],
          ]);
    }
}
