<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Role::where('name', 'root')->first()) {
            Role::create([
                'name'=> 'root',
                'order_roles' => 1,
            ]);
        }

        if (!Role::where('name', 'admin')->first()) {
            $admin = Role::create([
                'name'=> 'admin',
                'order_roles' => 2,
            ]);
        } else {
            $admin = Role::where('name', 'admin')->first();
        }

        if (!Role::where('name', 'operator')->first()) {
            $operator = Role::create([
                'name'=> 'operator',
                'order_roles' => 3,
            ]);

        } else {
            $operator = Role::where('name', 'operator')->first();
        }

        $admin->givePermissionTo([
            'home-index',
            'profile-edit',
            'role-index',
            'role-update',
            'user-index',
            'user-create',
            'user-show',
            'user-edit',
            'user-destroy',
        ]);

        $operator->givePermissionTo([
            'home-index',
            'profile-edit',
            //'role-index',
            //'role-update',
            //'user-index',
            //'user-create',
            //'user-show',
            //'user-edit',
            //'user-destroy',
        ]);
    }
}
