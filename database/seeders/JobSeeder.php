<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = ['Fisherman', 'Oceanman', 'Worker', 'Technician'];
        foreach ($jobs as $job) {
            Job::create(['name' => $job]);
        }
        // Job::factory()->count(10)->create();
    }
}
