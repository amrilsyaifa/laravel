<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_administrator = new Role();
        $role_administrator->name = 'administrator';
        $role_administrator->full_name = 'Administrator';
        $role_administrator->save();

        $role_dsu = new Role();
        $role_dsu->name = 'dsu';
        $role_dsu->full_name = 'Driver Support Unit';
        $role_dsu->save();

        $role_onb = new Role();
        $role_onb->name = 'onb';
        $role_onb->full_name = 'Onboarding';
        $role_onb->save();

        $role_dsu_tv = new Role();
        $role_dsu_tv->name = 'dsu_tv';
        $role_dsu_tv->full_name = 'Tampil DSU';
        $role_dsu_tv->save();

        $role_onb_tv = new Role();
        $role_onb_tv->name = 'onb_tv';
        $role_onb_tv->full_name = 'Tampil ONB';
        $role_onb_tv->save();

        $role_input_tv = new Role();
        $role_input_tv->name = 'input_tv';
        $role_input_tv->full_name = 'Input Antrian';
        $role_input_tv->save();

        $role_guest = new Role();
        $role_guest->name = 'guest';
        $role_guest->full_name = 'Guest';
        $role_guest->save();
    }
}
