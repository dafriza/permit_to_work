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
        $romanize = ['XII', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI'];
        return [
            'number' => 'HCML/' . fake()->randomElement($romanize) . '/2023' . '/' . fake()->randomDigit(),
            'work_order' => fake()->randomLetter() . '-' . fake()->randomNumber(5, true),
            'request_pa' => fake()->randomElement([$employee['id'], $supervisor['id']]),
            'date_application' => fake()->dateTimeBetween('-1 months'),
            'sign_pa' => fake()->imageUrl(360, 360, 'signature', true),
            'direct_spv' => $supervisor['id'],
            'sign_spv' => fake()->imageUrl(360, 360, 'signature', true),
            'location' => fake()->address(),
            'task_description' => 'test',
            'tools_equipment' => [$this->getToolsEquipment(), $this->getToolsEquipment()],
            // 'equipment_id' => 'T-' . fake()->randomNumber(3, false) . '/' . fake()->randomElement(['HandTools', 'Tookit', 'Rope']),
            // 'tools_equipment' => fake()->randomElement(['HandTools', 'Tookit', 'Rope']) . ',' . fake()->randomElement(['HandTools', 'Tookit', 'Rope']),
            // 'trades' => fake()->randomElement(['Operation', 'Commander', 'Executioner']),
            'trades' => [$this->getTrades(), $this->getTrades()],
            'personel_involved' => fake()->randomDigitNotNull(),
            'tra_level_1' => fake()->randomElement(['true', 'false']),
            'tra_level_2' => fake()->randomElement(['true', 'false']),
            'reference_no' => fake()->randomNumber(6),
            'hazard' => [
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
            ],
            'controls' => [
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
            ],
            'sscr' => [
                'equipment_depressurised' => fake()->randomElement(['1', '0']),
                'equipment_drained' => fake()->randomElement(['1', '0']),
                'equipment_purged' => fake()->randomElement(['1', '0']),
                'equipment_vented' => fake()->randomElement(['1', '0']),
                'blind_list_attached' => fake()->randomElement(['1', '0']),
                'equipment_isolated' => fake()->randomElement(['1', '0']),
                'closed_valves' => fake()->randomElement(['1', '0']),
                'double_block' => fake()->randomElement(['1', '0']),
                'blind' => fake()->randomElement(['1', '0']),
                'electrical_isolation' => fake()->randomElement(['1', '0']),
            ],
            'cross_referenced_certificates' => [
                'permit' => 'Lorem Ipsum',
                'isolation' => 'Lorem Ipsum',
                'Others' => 'Lorem Ipsum',
            ],
            'authorisation' => [
                'name' => 'Lorem',
                'signed' => fake()->imageUrl(360, 360, 'signature', true),
                'designation' => 'site_controller',
                'date' => fake()->dateTimeBetween('-1 months'),
                'time' => fake()->time(),
                'status' => fake()->randomElement(['success', 'failure', 'draft']),
                'approver' => User::role('supervisor')
                ->get()
                ->random()['id']
            ],
            'permit_registry' => [
                'name' => 'Lorem',
                'signed' => fake()->imageUrl(360, 360, 'signature', true),
                'date' => fake()->dateTimeBetween('-1 months'),
                'time' => fake()->time(),
                'status' => fake()->randomElement(['success', 'failure', 'draft']),
                'approver' => User::role('supervisor')
                ->get()
                ->random()['id']
            ],
            'site_gas_test' => [
                'flammable' => 0,
                'h2s' => 0,
                'oxygen' => 0,
                'name' => 'Lorem',
                'signed' => fake()->imageUrl(360, 360, 'signature', true),
                'date' => fake()->dateTimeBetween('-1 months'),
                'time' => fake()->time(),
                'status' => fake()->randomElement(['success', 'failure', 'draft']),
                'approver' => User::role('supervisor')
                ->get()
                ->random()['id']
            ],
            'issue' => [
                'name' => 'Lorem',
                'signed' => fake()->imageUrl(360, 360, 'signature', true),
                'date' => fake()->dateTimeBetween('-1 months'),
                'time' => fake()->time(),
                'status' => fake()->randomElement(['success', 'failure', 'draft']),
                'approver' => User::role('supervisor')
                ->get()
                ->random()['id']
            ],
            'acceptance' => [
                'name' => 'Lorem',
                'signed' => fake()->imageUrl(360, 360, 'signature', true),
                'date' => fake()->dateTimeBetween('-1 months'),
                'time' => fake()->time(),
                'status' => fake()->randomElement(['success', 'failure', 'draft']),
                'approver' => User::role('supervisor')
                ->get()
                ->random()['id']
            ],
            'close_out_pa' => [
                'complete' => fake()->randomElement([false, true]),
                'incomplete' => fake()->randomElement([false, true]),
                'description' => 'lorem',
                'name' => 'Lorem',
                'signed' => fake()->imageUrl(360, 360, 'signature', true),
                'date' => fake()->dateTimeBetween('-1 months'),
                'time' => fake()->time(),
                'status' => fake()->randomElement(['success', 'failure', 'draft']),
                'approver' => User::role('supervisor')
                ->get()
                ->random()['id']
            ],
            'close_out_aa' => [
                'complete' => fake()->randomElement([false, true]),
                'incomplete' => fake()->randomElement([false, true]),
                'name' => 'Lorem',
                'signed' => fake()->imageUrl(360, 360, 'signature', true),
                'date' => fake()->dateTimeBetween('-1 months'),
                'time' => fake()->time(),
                'status' => fake()->randomElement(['success', 'failure', 'draft']),
                'approver' => User::role('supervisor')
                ->get()
                ->random()['id']
            ],
            'registry_of_work_completion' => [
                'name' => 'Lorem',
                'signed' => fake()->imageUrl(360, 360, 'signature', true),
                'date' => fake()->dateTimeBetween('-1 months'),
                'time' => fake()->time(),
                'status' => fake()->randomElement(['success', 'failure', 'draft']),
                'approver' => User::role('supervisor')
                ->get()
                ->random()['id']
            ],
            'status' => fake()->randomElement([1, 2, 3, 4]),
            // 'submission' => [
            //     'site_controller' => $supervisor['id'],
            //     'area_authoriry' => $supervisor['id'],
            //     'permit_controller' => $supervisor['id'],
            // ],
            // 'authorization_and_issuing' => [
            //     'site_controller' => fake()->randomElement([fake()->imageUrl(360, 360, 'signature', true), 'rejected', 'on going']),
            //     'permit_controller' => fake()->randomElement([fake()->imageUrl(360, 360, 'signature', true), 'rejected', 'on going']),
            //     'authorized_gas_tester' => fake()->randomElement([fake()->imageUrl(360, 360, 'signature', true), 'rejected', 'on going']),
            //     'area_authority' => fake()->randomElement([fake()->imageUrl(360, 360, 'signature', true), 'rejected', 'on going']),
            //     'performing_authority' => fake()->randomElement([fake()->imageUrl(360, 360, 'signature', true), 'rejected', 'on going']),
            // ],
            // 'completion' => [
            //     'performing_authority' => fake()->imageUrl(360, 360, 'signature', true),
            //     'area_authority' => fake()->imageUrl(360, 360, 'signature', true),
            //     'permit_controller' => fake()->imageUrl(360, 360, 'signature', true),
            // ],
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
