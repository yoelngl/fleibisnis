<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'username' => 'Fleibisnis Admin',
            'email' => 'admin@fleibisnis.com',
            'password' => Hash::make('password'),
            'verified' => 1,
            'role' => 'admin',
        ]);

        $user->assignRole('admin');
    }
}
