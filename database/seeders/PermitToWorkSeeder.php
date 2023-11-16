<?php

namespace Database\Seeders;

use App\Models\PermitToWork;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermitToWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        PermitToWork::truncate();
        PermitToWork::factory()
            ->count(10)
            ->create();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
