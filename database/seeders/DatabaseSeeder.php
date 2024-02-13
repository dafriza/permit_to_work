<?php

namespace Database\Seeders;

use App\Models\ToolsEquipment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ToolsEquipmentSeeder::class,
            TradeSeeder::class,
            JobSeeder::class,
            UserSeeder::class,
            RolesAndPermissionsSeeder::class,
            EntryPermitSeeder::class,
            PermitToWorkSeeder::class,
            PtwDummySeeder::class,
      ]);
    }
}
