<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Admin',
            'email'     => 'admin@admin.com',
            'password' => '$2y$10$P/v3FbgEZw36.oSwKo15yONFuXmCILvw/Fxz63eki3Bi.2cbqk9jG',
        ]);
    }
}
