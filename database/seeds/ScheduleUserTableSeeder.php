<?php

use Illuminate\Database\Seeder;

class ScheduleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedule_user')->insert([
            ['user_id' => 1, 'schedule_id' => 1],
            ['user_id' => 2, 'schedule_id' => 2],
        ]);
    }
}
