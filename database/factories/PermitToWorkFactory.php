<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Trade;
use App\Models\ToolsEquipment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PermitToWork>
 */
class PermitToWorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $site_controller = fake()->randomNumber(6, 10);
        // $area_authoriry = fake()->randomNumber(6, 10);
        // $permit_controller = fake()->randomNumber(6, 10);
        $supervisor = User::role('supervisor')
            ->get()
            ->random();
        $employee = User::role('employee')
            ->get()
            ->random();
        return [
            // 'number' => fake()->randomNumber(5, true),
            // 'work_order' => fake()->randomLetter() . '-' . fake()->randomNumber(5, true),
            'request_pa' => $employee['id'],
            'direct_spv' => $supervisor['id'],
            'date_application' => fake()->dateTimeBetween(),
            'location' => fake()->secondaryAddress(),
            'equipment_id' => 'T-' . fake()->randomNumber(3, false) . '/' . fake()->randomElement(['HandTools', 'Tookit', 'Rope']),
            'task_description' => 'test',
            // 'tools_equipment' => fake()->randomElement(['HandTools', 'Tookit', 'Rope']) . ',' . fake()->randomElement(['HandTools', 'Tookit', 'Rope']),
            'tools_equipment' => json_encode([$this->getToolsEquipment(), $this->getToolsEquipment()]),
            // 'trades' => fake()->randomElement(['Operation', 'Commander', 'Executioner']),
            'trades' => json_encode([$this->getTrades(), $this->getTrades()]),
            'personel_involved' => fake()->randomDigitNotNull(),
            'tra_level' => fake()->randomElement([1, 2]),
            'reference_no' => fake()->randomNumber(6),
            'hazard' => json_encode([
                'slipping_hazard' => fake()->randomElement([0, 1]),
                'awkward_access' => fake()->randomElement([0, 1]),
                'flammable_material' => fake()->randomElement([0, 1]),
                'unguarded_opening' => fake()->randomElement([0, 1]),
                'heavy/awkward_object' => fake()->randomElement([0, 1]),
                'tripping_hazard' => fake()->randomElement([0, 1]),
                'lifting_>_10_tons' => fake()->randomElement([0, 1]),
                'dropped_object' => fake()->randomElement([0, 1]),
                'low_level_lighting' => fake()->randomElement([0, 1]),
                'high_temperature' => fake()->randomElement([0, 1]),
                'working_at_height_with_scaffold' => fake()->randomElement([0, 1]),
                'overside_work' => fake()->randomElement([0, 1]),
                'low_or_high_voltage' => fake()->randomElement([0, 1]),
                'radiation' => fake()->randomElement([0, 1]),
                'stored_mechanical_energy' => fake()->randomElement([0, 1]),
                'stored_electrical_charge' => fake()->randomElement([0, 1]),
                'pressurized_hose_failure' => fake()->randomElement([0, 1]),
                'mechanical_spark' => fake()->randomElement([0, 1]),
                'hazardous_material' => fake()->randomElement([0, 1]),
                'pyrophoric_material' => fake()->randomElement([0, 1]),
                'vibration' => fake()->randomElement([0, 1]),
                'noise' => fake()->randomElement([0, 1]),
                'toxic_gas' => fake()->randomElement([0, 1]),
                'smoke_gas' => fake()->randomElement([0, 1]),
                'bad_weather' => fake()->randomElement([0, 1]),
                'hazard_other' => fake()->randomElement(['Hand Injury', 'Equipment Damage', 'Foot Injury']) . ',' . fake()->randomElement(['Hand Injury', 'Equipment Damage', 'Foot Injury']),
            ]),
            'controls' => json_encode([
                'erect_sign_and_barriers' => fake()->randomElement([0, 1]),
                'keep_worksite_free_of_trip' => fake()->randomElement([0, 1]),
                'inital_gas_test_at_specific_intervals' => fake()->randomElement([0, 1]),
                'adhere_to_specific_procedure' => fake()->randomElement([0, 1]),
                'no_electrical_enclosure_containing_live_etc' => fake()->randomElement([0, 1]),
                'ensure_lifting_equipment_certified_etc' => fake()->randomElement([0, 1]),
                'check_worksite_for_potential_etc' => fake()->randomElement([0, 1]),
                'maintain_radio_contact_etc' => fake()->randomElement([0, 1]),
                'use_safe_manual_handling_etc' => fake()->randomElement([0, 1]),
                'standby_man_to_be_in_attendace_etc' => fake()->randomElement([0, 1]),
                'continuous_gas_monitoring_etc' => fake()->randomElement([0, 1]),
                'only_insulated_to_be_used_etc' => fake()->randomElement([0, 1]),
                'a_safe_means_of_access_etc' => fake()->randomElement([0, 1]),
                'communication_wit_adjacent_etc' => fake()->randomElement([0, 1]),
                'make_public_announcements' => fake()->randomElement([0, 1]),
                'secure_loose_objects' => fake()->randomElement([0, 1]),
                'rubber_gloves_for_appropriate_etc' => fake()->randomElement([0, 1]),
                'equipment_to_be_isolated_etc' => fake()->randomElement([0, 1]),
                'review_and_implement_etc' => fake()->randomElement([0, 1]),
                'sun_protection_to_be_etc' => fake()->randomElement([0, 1]),
                'additional_lighting_etc' => fake()->randomElement([0, 1]),
                'waste_to_be_diposed_etc' => fake()->randomElement([0, 1]),
                'safety_harness_reel_to_etc' => fake()->randomElement([0, 1]),
                'oxygen_check_required_etc' => fake()->randomElement([0, 1]),
                'adhere_lifting_plan' => fake()->randomElement([0, 1]),
                'isolation_sheet' => fake()->randomElement([0, 1]),
                'isolation_required' => fake()->randomElement([0, 1]),
                'sop' => fake()->randomElement([0, 1]),
                'jsa' => fake()->randomElement([0, 1]),
                'temporary_deviate_etc' => fake()->randomElement([0, 1]),
                'loto' => fake()->randomElement([0, 1]),
                'controls_other' => fake()->randomElement(['Buddy Sistem', 'Pre Check Equipment', 'Team Work']) . ',' . fake()->randomElement(['Buddy Sistem', 'Pre Check Equipment', 'Team Work']),
                'additional_ppe' => fake()->randomElement(['Hand Glove', 'Ear Plug', 'Helmet']) . ',' . fake()->randomElement(['Hand Glove', 'Ear Plug', 'Helmet']),
            ]),
            'cross_referenced_certificates' => json_encode([
                'permit' => 'Lorem Ipsum',
                'isolation' => 'Lorem Ipsum',
                'Others' => 'Lorem Ipsum',
            ]),
            'submission' => json_encode([
                'site_controller' => $supervisor['id'],
                'area_authoriry' => $supervisor['id'],
                'permit_controller' => $supervisor['id'],
            ]),
            'authorization_and_issuing' => json_encode([
                'site_controller' => fake()->imageUrl(360, 360, 'signature', true),
                'permit_controller' => fake()->imageUrl(360, 360, 'signature', true),
                'authorized_gas_tester' => fake()->imageUrl(360, 360, 'signature', true),
                'area_authority' => fake()->imageUrl(360, 360, 'signature', true),
                'performing_authority' => fake()->imageUrl(360, 360, 'signature', true),
            ]),
            'completion' => json_encode([
                'performing_authority' => fake()->imageUrl(360, 360, 'signature', true),
                'area_authority' => fake()->imageUrl(360, 360, 'signature', true),
                'permit_controller' => fake()->imageUrl(360, 360, 'signature', true),
            ]),
        ];
    }
    function getToolsEquipment()
    {
        return ToolsEquipment::get()->random();
    }
    function getTrades()
    {
        return Trade::get()->random();
    }
}
