<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'user1',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('12345678'),
            ],
        ];
        foreach ($users as $userItem){
            User::create($userItem);
        }
    }
}
