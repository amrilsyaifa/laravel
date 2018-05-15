<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_administrator = new User();
        $role_administrator->role_id = '1';
        $role_administrator->name = 'administrator';
        $role_administrator->username = 'Administrator';
        $role_administrator->email = 'administrator@laravel.com';
        $role_administrator->password = bcrypt('administrator');
        $role_administrator->save();
    }
}
