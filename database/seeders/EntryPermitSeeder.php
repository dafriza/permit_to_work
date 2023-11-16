<?php

namespace Database\Seeders;

use App\Models\EntryPermit;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EntryPermitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      EntryPermit::truncate();
      EntryPermit::factory()->count(10)->create();
    }
}
