<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        factory(User::class, 3)->create();
        User::whereId(1)->update([
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'position_id' => 1,
        ]);
        User::whereId(2)->update([
            'name' => 'Trainer PHP',
            'email' => 'trainer@gmail.com',
            'position_id' => 2,
        ]);
        User::whereId(3)->update([
            'name' => 'HR',
            'email' => 'hr@gmail.com',
            'position_id' => 3,
        ]);

    }
}
