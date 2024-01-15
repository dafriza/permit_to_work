<?php

namespace Database\Seeders;

use DB;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Helper\RolesAndPermissionsHelper;
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
        $roles = RolesAndPermissionsHelper::roles;
        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
        User::factory(9)
            ->create()
            ->each(function ($user)use($roles) {
                $user->assignRole(fake()->randomElement([$roles[1], $roles[2]]));
                if ($user->getRoleNames()->first() == $roles[2]) {
                    $user->update(['role_assignment' => fake()->randomElement(['authorisation', 'permit_registry', 'site_gas_test', 'issue', 'acceptance', 'close_out_pa','close_out_aa','registry_of_work_completion'])]);
                } else {
                    $user->update(['role_assignment' => $roles[1]]);
                }
            });

        User::create([
            'first_name' => 'super',
            'last_name' => 'admin 01',
            'email' => 'superadmin01@gmail.com',
            'password' => bcrypt('super1admin'),
            'phone_number' => 000000000000,
            'address' => 'X Street',
        ])->assignRole('superadmin');
    }
}
