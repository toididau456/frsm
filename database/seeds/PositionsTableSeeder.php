<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            [
                'name' => 'Manager',
                'type' => 'user',
            ],
            [
                'name' => 'Trainer PHP',
                'type' => 'user',
            ],
            [
                'name' => 'HR',
                'type' => 'user',
            ],
            [
                'name' => 'trainer PHP',
                'type' => 'candidate',
            ],
        ]);
    }
}
