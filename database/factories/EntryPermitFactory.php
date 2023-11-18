<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EntryPermit>
 */
class EntryPermitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->name();
        return [
            'number' => fake()->randomNumber(5, true),
            'work_order' => fake()->randomLetter() . '-' . fake()->randomNumber(5, true),
            'task_description' => json_encode([
                'performing_autority_name' => $name,
                'date_issue' => fake()->dateTimeBetween('-1 week', '+1 week'),
                'location' => fake()->randomElement(['Laut A', 'Laut B', 'Laut C', 'Laut D', 'Laut E']),
                'work_to_be_performed' => $name,
                'departmen' => fake()->randomElement(['Dept A', 'Dept B', 'Dept C', 'Dept D', 'Dept E']),
                'time_issued' => fake()->time(),
                'permit_entrants' => fake()->randomElements([fake()->name(), fake()->name(), fake()->name(), fake()->name()], 3),
            ]),
            'additional_permits' => json_encode([
                'confined_space_entry_permit' => fake()->randomElements([0, 1]),
                'hot_work_permit' => fake()->randomElements([0, 1]),
                'cold_work_permit' => fake()->randomElements([0, 1]),
            ]),
            'preparation_required' => json_encode([
                'personel_protective' => fake()->randomElements([0, 1]),
                'h2s_monitoring_equipment' => json_encode([
                    'gas_detector' => fake()->randomElements([0, 1]),
                    'have_gas_detector_been_calibrated' => fake()->randomElements([0, 1]),
                    'have_gas_detector_been_dump_test' => fake()->randomElements([0, 1]),
                ]),
                'respiratory_equipment' => json_encode([
                    'scba' => fake()->randomElements([0, 1]),
                    'saba' => fake()->randomElements([0, 1]),
                    'eeba' => fake()->randomElements([0, 1]),
                    'gas_mask' => fake()->randomElements([0, 1]),
                ]),
                'h2s_training_certification' => fake()->randomElements([0, 1]),
                'safety_induction' => fake()->randomElements([0, 1]),
                'buddy_system' => fake()->randomElements([0, 1]),
                'performing_authority_notify' => fake()->randomElements([0, 1]),
            ]),
            'communication_method' => json_encode([
                'radio' => fake()->randomElements([0, 1]),
                'voice' => fake()->randomElements([0, 1]),
                'other' => fake()->randomElement(['Handphone', 'HT', 'VoIP']),
            ]),
            'h2s_initial_gas_testing' => json_encode([
                'date' => fake()->dateTimeBetween('-1 week', '+1 week'),
                'time' => fake()->time(),
                'tester_no' => fake()->randomDigitNotNull(),
                'h2s' => fake()->word(),
                'agt_name' => fake()->word(),
                'agt_signature' => fake()->imageUrl(360, 360, 'signature', true),
            ]),
            'regular_gas_testing' => json_encode([
                'date' => fake()->dateTimeBetween('-1 week', '+1 week'),
                'time' => fake()->time(),
                'tester_no' => fake()->randomDigitNotNull(),
                'h2s' => fake()->word(),
                'agt_name' => fake()->word(),
                'agt_signature' => fake()->imageUrl(360, 360, 'signature', true),
            ]),
            'authorization' => json_encode([
                [
                    'sc' => fake()->name(),
                    'signature' => fake()->imageUrl(360, 360, 'signature', true),
                    'date' => fake()->dateTimeBetween('-1 week', '+1 week'),
                    'time' => fake()->time(),
                ],
                [
                    'aa' => fake()->name(),
                    'signature' => fake()->imageUrl(360, 360, 'signature', true),
                    'date' => fake()->dateTimeBetween('-1 week', '+1 week'),
                    'time' => fake()->time(),
                ],
            ]),
            'permit_cancellation' => json_encode([
                'author_name' => fake()->name(),
                'signature' => fake()->imageUrl(360, 360, 'signature', true),
                'date' => fake()->dateTimeBetween('-1 week', '+1 week'),
                'time' => fake()->time(),
            ]),
        ];
    }
}
