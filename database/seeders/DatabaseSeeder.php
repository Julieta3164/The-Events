<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        $roles = ['user', 'admin'];
        foreach ($roles as $role){
            Role::create(['role' => $role]);
        }

        foreach (User::all() as $user){
            foreach (Role::all() as $role){
                $user->roles()->attach($role->id);
            }
        }
    }
}
