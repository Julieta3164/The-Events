<?php

namespace Database\Seeders;

use App\Models\RoleUser;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoleUser::factory(50)->create();
    }
}
