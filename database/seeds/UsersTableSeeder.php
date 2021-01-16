<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    

        $adminRole = Role::where('name', 'admin')->first();
        $dosenRole = Role::where('name', 'dosen')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')

        ]);
        $dosen = User::create([
            'name' => 'Dosen User',
            'email' => 'dosen@dosen.com',
            'password' => Hash::make('password')

        ]);

        $user = User::create([
            'name' => 'Generic User',
            'email' => 'user@user.com',
            'password' => Hash::make('password')

        ]);

        $admin->roles()->attach($adminRole);
        $dosen->roles()->attach($dosenRole);
        $user->roles()->attach($userRole);
    }
}

