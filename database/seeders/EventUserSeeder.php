<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\EventUser;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        $User =  User::inRandomOrder()->value('id');
$Events = Event::inRandomOrder()->value('id');

DB::table('event_user')->insert(array(
            
    'user_id' => $User,
    'event_id' => $Events,


));
    }
}





