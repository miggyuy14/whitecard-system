<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'Miguel Sebastian B. Uy',
                'email'=> 'miggy.uy12@gmail.com',
                'password' => bcrypt('secret'),
                'email_verified_at' => now()
            ]);
    }
}
