<?php

namespace Database\Seeders;

use App\Models\Rol_User;
use Illuminate\Database\Seeder;

class RolUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol_User::factory(10)->create();
    }
}
