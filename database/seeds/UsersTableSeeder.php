<?php

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
        \App\User::truncate();

        \App\User::create(['name' => 'rachael', 'email' => 'crookedtailproductions@gmail.com', 'password' => 'yoshi']);
        \App\User::create(['name' => 'andy', 'email' => 'kandrewstone@gmail.com', 'password' => 'yoshi']);
    }
}
