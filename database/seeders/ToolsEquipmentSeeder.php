<?php

namespace Database\Seeders;

use App\Models\ToolsEquipment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ToolsEquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tools_equipment = ['HandTools', 'Tookit', 'Rope', 'Knive', 'Wood'];
        foreach ($tools_equipment as $tool_equipment) {
            ToolsEquipment::create(['name' => $tool_equipment]);
        }
    }
}
