<?php

use Illuminate\Database\Seeder;

class FieldScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('field_schedule')->insert([
            ['field_id' => 1, 'schedule_id' => 1, 'score' => 5],
            ['field_id' => 2, 'schedule_id' => 2, 'score' => 5],
            ['field_id' => 3, 'schedule_id' => 3, 'score' => 5],
        ]);
    }
}
