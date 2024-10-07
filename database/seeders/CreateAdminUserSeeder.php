<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permsissions = Permission::get()->pluck("name");

        $role = Role::updateOrCreate(["name"=>"admin"]);

        $role->syncPermissions($permsissions->toArray());

        $user = User::updateOrCreate(["name"=>"admin","email"=>"admin@gmail.com","password"=>Hash::make("12345678")]);

        $user->assignRole('admin');
    }
}
