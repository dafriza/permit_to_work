<?php
namespace App\Helper;
class CRCHelper
{
    private static $instance = null;
    const field = [
        'erect_sign_and_barriers' ,
        'keep_worksite_free_of_trip' ,
        'inital_gas_test_at_specific_intervals' ,
        'adhere_to_specific_procedure' ,
        'no_electrical_enclosure_containing_live_etc' ,
        'ensure_lifting_equipment_certified_etc' ,
        'check_worksite_for_potential_etc' ,
        'maintain_radio_contact_etc' ,
        'use_safe_manual_handling_etc' ,
        'standby_man_to_be_in_attendace_etc' ,
        'continuous_gas_monitoring_etc' ,
        'only_insulated_to_be_used_etc' ,
        'a_safe_means_of_access_etc' ,
        'communication_wit_adjacent_etc' ,
        'make_public_announcements' ,
        'secure_loose_objects' ,
        'rubber_gloves_for_appropriate_etc' ,
        'equipment_to_be_isolated_etc' ,
        'review_and_implement_etc' ,
        'sun_protection_to_be_etc' ,
        'additional_lighting_etc' ,
        'waste_to_be_diposed_etc' ,
        'safety_harness_reel_to_etc' ,
        'oxygen_check_required_etc' ,
        'adhere_lifting_plan' ,
        'isolation_sheet' ,
        'isolation_required' ,
        'sop' ,
        'jsa' ,
        'temporary_deviate_etc' ,
        'loto' ,
    ];
    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new CRCHelper();
        }
        return static::$instance;
    }
}
