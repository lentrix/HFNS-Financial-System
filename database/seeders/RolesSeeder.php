<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin =  Role::create(['name' =>'Admin']);
        $role_normal = Role::create(['name' => 'Standard']);

        $manage_user = Permission::create(['name' => 'manage-user']);
        $view_dashboard = Permission::create(['name' =>'view_dashboard']);

        $permission_admin =  [ $manage_user, $view_dashboard];
        $permission_normal =  [ $view_dashboard];

        $role_admin->syncPermissions($permission_admin);
        $role_normal->syncPermissions($permission_normal);

        User::find(1)->assignRole($role_admin);
        User::find(2)->assignRole($role_normal);
    }
}
