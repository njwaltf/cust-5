<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Database\Seeders\BookSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run() : void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(BookSeeder::class);
        User::create([
            'username' => 'gojooo',
            'name' => 'Gojo Satoru',
            'email' => 'gojo@gmail.com',
            'prof_pic' => 'profile/user.jpg',
            'password' => Hash::make('gojooo')
        ]);
    }
}
