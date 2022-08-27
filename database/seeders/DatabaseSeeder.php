<?php

namespace Database\Seeders;

use App\Models\Event;
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
        User::factory(50)->create();
        $roles = ['user', 'admin'];
        foreach ($roles as $role){
            Role::create(['role' => $role]);
        }

            foreach (User::all() as $user){
                $roles = Role::take(1)->pluck('id');
                $user->roles()->attach($roles);
            }
            
        $events = [];
        foreach ($events as $event){
            Event::create(['event' => $event]);
        }
    }
}