<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Settings\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::insert([
            ['id' => 1, 'name' => 'user_management_access',],
            ['id' => 2, 'name' => 'permission_access',],
            ['id' => 3, 'name' => 'permission_create',],
            ['id' => 4, 'name' => 'permission_edit',],
            ['id' => 5, 'name' => 'permission_view',],
            ['id' => 6, 'name' => 'permission_delete',],
            ['id' => 7, 'name' => 'role_access',],
            ['id' => 8, 'name' => 'role_create',],
            ['id' => 9, 'name' => 'role_edit',],
            ['id' => 10, 'name' => 'role_view',],
            ['id' => 11, 'name' => 'role_delete',],
            ['id' => 12, 'name' => 'user_access',],
            ['id' => 13, 'name' => 'user_create',],
            ['id' => 14, 'name' => 'user_edit',],
            ['id' => 15, 'name' => 'user_view',],
            ['id' => 16, 'name' => 'user_delete',],
        ]);
    }
}
