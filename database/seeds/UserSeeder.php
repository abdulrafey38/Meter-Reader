<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ali',
            'email' => 'ali@email.com',
            'isAdmin' => '1',
            'password' => Hash::make('12345678'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'name' => 'Abdul Rafey',
            'email' => 'abdulrafey38@email.com',
            'isAdmin' => '1',
            'password' => Hash::make('12345678'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'name' => 'Bilal',
            'email' => 'bilal@email.com',
            'isAdmin' => '0',
            'password' => Hash::make('12345678'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ]);
    }
}
