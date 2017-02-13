<?php

use Illuminate\Database\Seeder;

class RoundsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rounds')->insert([
            ['name' => 'Test'],
            ['name' => 'PV Technical'],
            ['name' => 'PV HR'],
        ]);
    }
}
