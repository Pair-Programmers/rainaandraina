<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Admin::create(['name'=>'Hamza Saqib','email'=>'mianhamza7262@gmail.com', 'role'=>'Super Admin', 'password'=>Hash::make('hamza7262')]);
        Admin::create(['name'=>'Yasir','email'=>'yasirranagh@gmail.com', 'role'=>'Admin', 'password'=>Hash::make('yasir@123')]);
        Admin::create(['name'=>'Admin','email'=>'editor@gmail.com', 'role'=>'Admin', 'password'=>Hash::make('editor@123')]);
    }
}
