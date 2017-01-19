<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (['linus', 'martina'] as $username) {
            $user = new \App\User();
            $user->username = $username;
            $user->password = $username;
            $user->save();
        }
    }
}
