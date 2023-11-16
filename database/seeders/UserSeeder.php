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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        User::truncate();
        User::factory(10)
            ->create()
            ->each(function ($user) {
                $user->assignRole(fake()->randomElement(['employee', 'supervisor']));
            });
        User::create([
            'name' => 'superadmin',
            'nip' => 'superadmin',
            'password' => bcrypt('1'),
        ])->assignRole('superadmin');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
