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
        User::factory(9)
            ->create()
            ->each(function ($user) {
                $user->assignRole(fake()->randomElement(['employee', 'supervisor']));
            });

        User::create([
            'first_name' => 'super',
            'last_name' => 'admin 01',
            'email' => 'superadmin01@gmail.com',
            'level' => 'super admin',
            'password' => bcrypt('super1admin'),
            'phone_number' => 000000000000,
            'address' => 'X Street',
        ])->assignRole('superadmin');
    }
}
