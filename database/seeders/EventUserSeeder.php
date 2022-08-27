<?php

namespace Database\Seeders;

use App\Models\EventUser;
use Illuminate\Database\Seeder;

class EventUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventUser::factory(50)->create();
    }
}
