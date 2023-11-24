<?php

namespace Database\Seeders;

use App\Models\Trade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trades = ['Operation', 'Commander', 'Executioner', 'Planner', 'Thinker'];
        foreach ($trades as $trade) {
            Trade::create([
                'name' => $trade,
            ]);
        }
    }
}
