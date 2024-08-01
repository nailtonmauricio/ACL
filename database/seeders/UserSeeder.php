<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::where('email', 'dev@jitte.com.br')->first()) {
            $root = User::create([
                'name' => 'root',
                'email' => 'dev@jitte.com.br',
                'password' => Hash::make('op5mnyuf', ['rounds' => 12]),
            ]);

            $root->assignRole('root');
        }

        if (!User::where('email', 'admin@jitte.com.br')->first()) {
            $admin = User::create([
                'name' => 'admin',
                'email' => 'admin@jitte.com.br',
                'password' => Hash::make('admin', ['rounds' => 12]),
            ]);

            $admin->assignRole('admin');
        }

        if (!User::where('email', 'operator@jitte.com.br')->first()) {
            $operator = User::create([
                'name' => 'operator',
                'email' => 'operator@jitte.com.br',
                'password' => Hash::make('operator', ['rounds' => 12]),
            ]);

            $operator->assignRole('operator');
        }
    }
}
