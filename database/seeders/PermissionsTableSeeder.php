<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Models\User;

class PermissionsTableSeeder extends Seeder
{
    private $exceptNames = [
        'home*'
    ];

    private $exceptControllers = [
        'LoginController',
        'ForgotPasswordController',
        'ResetPasswordController',
        'RegisterController',
        'ConfirmPasswordController'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->delete();

        $routeCollection = Route::getRoutes();
        $role = Role::findByName('cashier');

        foreach ($routeCollection as $route)
            if ($this->match($route))
                $permission = Permission::create(['name' => $route->getName()]);
                
        $user = User::find(1);
        if (!$user->hasRole('cashier')) 
            $user->assignRole('cashier');
    }

    private function match(\Illuminate\Routing\Route $route)
    {
        if ($route->getName() === null) {
            return false;
        } else {
            if (in_array(class_basename($route->getController()), $this->exceptControllers))
                return false;
            foreach ($this->exceptNames as $except)
                if (Str::is($except, $route->getName()))
                    return false;
        }
        return true;
    }
}
