<?php

namespace Database\Seeders;

use DB;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(50)
            ->create()
            ->each(function ($user) {
                $user->assignRole(fake()->randomElement(['employee', 'supervisor']));
            });

        User::create([
            'first_name' => 'super',
            'last_name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('1'),
            'phone_number' => 000000000000,
            'address' => 'X Street',
        ])->assignRole('superadmin');
    }
}
