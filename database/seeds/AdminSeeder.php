<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new App\Admin();
        $admin->first_name = "Dip";
        $admin->last_name = "Protik";
        $admin->email = "admin@gmail.com";
        $admin->password = Hash::make('password');
        $admin->phone = "+01784585485";
        $admin->address = "Adddress";
        $admin->area = "Modina Market";
        $admin->city = "Sylhet";
        $admin->zip = "3100";
        $admin->avatar = "admin.jpg";
        $admin->role_id = "1";
        $admin->save();

    }
}
