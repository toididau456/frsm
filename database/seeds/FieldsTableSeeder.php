<?php

use Illuminate\Database\Seeder;

class FieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fields')->insert([
            ['name' => 'PHP', 'max_score' => 5],
            ['name' => 'HTML', 'max_score' => 5],
            ['name' => 'CSS', 'max_score' => 5],
        ]);
    }
}
