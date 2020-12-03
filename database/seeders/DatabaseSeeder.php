<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
        $this->call(SizesTableSeeder::class);
        $this->call(SizesTableSeeder::class);
        $this->call(PizzasTableSeeder::class);
        $this->call(PizzaPricesTableSeeder::class);
        $this->call(OrderStatusesTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrderPizzaPriceTableSeeder::class);
        $this->call(IngredientsTableSeeder::class);
        $this->call(IngredientPizzaTableSeeder::class);
        $this->call(DrinksTableSeeder::class);
        $this->call(DrinkPricesTableSeeder::class);
        $this->call(DrinkPriceOrderTableSeeder::class);
    }
}
