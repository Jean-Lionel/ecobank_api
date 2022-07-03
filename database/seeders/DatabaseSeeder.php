<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\DeviseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user = [
            'name' => "JEAN LEO",
            'email' => "nijeanlionel@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt("12345678"), // password
            'remember_token' => Str::random(10),
        ];

        User::create($user);

        $this->call(DeviseSeeder::class);
    }
}
