<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleHasPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_has_permissions')->delete();

        $permissions      = Permission::all();
        $customer_role_id = Role::findByName('customer')->id;
        $cashier_role_id  = Role::findByName('cashier')->id;
        $driver_role_id   = Role::findByName('driver')->id;
        $chef_role_id     = Role::findByName('chef')->id;

        $permissions_for_customer = [
            'orders.create',
            'orders.store',
            'main',
        ];

        $permissions_for_cashier = [
            '*',
        ];

        $permissions_for_driver = [

        ];

        $permissions_for_chef = [

        ];
        
        foreach($permissions as $permission) {
            /*if (in_array($permission->name, $permissions_for_customer_and_cashier)) {
                foreach ($cashier_and_customer_role_id as $role_id)
                    $this->insert_permission($role_id, $permission->id);
                continue;
            }*/
            if (in_array($permission->name, $permissions_for_cashier) || in_array('*', $permissions_for_cashier))
                $this->insert_permission($cashier_role_id, $permission->id);
            if (in_array($permission->name, $permissions_for_customer) || in_array('*', $permissions_for_customer))
                $this->insert_permission($customer_role_id, $permission->id);
            if (in_array($permission->name, $permissions_for_driver) || in_array('*', $permissions_for_driver))
                $this->insert_permission($driver_role_id, $permission->id);
            if (in_array($permission->name, $permissions_for_chef) || in_array('*', $permissions_for_chef))
                $this->insert_permission($chef_role_id, $permission->id);
        }
    }

    /**
     * Insert permissions for roles
     * @param Integer $role_id
     * @param Integer $permission_id
     * 
     * @return void
     */
    private function insert_permission($role_id, $permission_id)
    {
        DB::table('role_has_permissions')->insert([
            'role_id' => $role_id,
            'permission_id' => $permission_id
        ]);
        return true;
    }
}
