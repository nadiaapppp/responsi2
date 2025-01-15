<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;
use Spatie\Permission\Models\Role;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin =User::create([
            'name' => 'Administrator',
            'email' => 'verrelladriano08@gmail.com',
            'password' => bcrypt('password'),
        ]);
        $roleAdmin =Role::create(['name' =>'admin']);
        $roleCustomer =Role::create(['name' =>'customer']);

        $admin ->assignRole($roleAdmin);

    }
}