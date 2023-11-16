<?php

namespace Database\Seeders;

use App\Models\PermitToWork;
use Illuminate\Database\Seeder;
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
      PermitToWork::factory()->count(10)->create();
    }
}
