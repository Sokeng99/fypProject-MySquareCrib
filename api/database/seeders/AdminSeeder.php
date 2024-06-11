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
     */
    public function run(): void
    {
        $admin=Admin::where('name','SuperAdmin')->first();
        if(is_null($admin)){
            $admin=new Admin();
            $admin->name="SuperAdmin";
            $admin->email="sadmin@gmail.com";
            $admin->password=Hash::make('sadmin123');
            $admin->save();
        }
    }
}
