<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::truncate();
        DB::table('settings')->insert([
            [
                'key' => 'paginate',
                'value' => 2,
                'title' => 'Number items of each page'
            ],
        ]);
    }
}
