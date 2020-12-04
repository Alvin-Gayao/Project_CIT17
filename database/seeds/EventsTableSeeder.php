<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $events = [
        	['type' => 'Birthday'],
        	['type' => 'Wedding'],
        	['type' => 'Graduation'],
        	['type' => 'Anniversary']
        ];
        DB::table('events')->insert($events);
    }
}
