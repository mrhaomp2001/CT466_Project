<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = new Role;
        $role->name = 'Student';
        $role->description = "Tài khoản của học sinh";
        $role->permission = 1;

        $role->save();

        $role = new Role;
        $role->name = 'Teacher';
        $role->description = "Tài khoản của giáo viên";
        $role->permission = 10;

        $role->save();

        $role = new Role;
        $role->name = 'Moderator';
        $role->description = "Tài khoản của quản trị viên";
        $role->permission = 50;

        $role->save();

        $role = new Role;
        $role->name = 'Administrator';
        $role->description = "Tài khoản của điều hành viên";
        $role->permission = 100;

        $role->save();
    }
}
