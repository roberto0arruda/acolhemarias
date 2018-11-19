<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Settings\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            ['id' => 1, 'name' => 'Administrador',],
        ]);
    }
}
