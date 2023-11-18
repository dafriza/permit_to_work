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
      EntryPermit::factory()->count(50)->create();
    }
}
