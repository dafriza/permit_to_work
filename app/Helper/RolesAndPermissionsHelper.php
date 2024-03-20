<?php
namespace App\Helper;
class RolesAndPermissionsHelper
{
    public const actions = ['create', 'read', 'update', 'delete'];
    public const accesses = [
        'permit_to_work_cold',
        'permit_to_work_hot',
        'entry_permit',
        'user_management',
        'permit_to_work_management',
        // 'choose_reponsibility',
        // 'demand_work_request',
        // 'demand_entry_permit',
        // 'permit_to_work_request',
        'entry_permit_request',
        'user_profile',
        //   'request_delete_account',
        'dashboard_admin',
        'dashboard_user',
    ];
    public const roles = ['superadmin', 'employee', 'approver'];
    public $permissions = [];

    function linkPermissions()
    {
        foreach (self::accesses as $key_access => $access) {
            foreach (self::actions as $key_action => $action) {
                $this->permissions[$access][] = $action . ' ' . $access;
            }
        }
        return $this->permissions;
    }
    function getRoleName(int $roleElement)
    {
        return ucfirst(self::roles[$roleElement]);
    }
    function getFullAccessesName(int $accessesElement)
    {
        return str()->headline(implode(' ', explode('_', self::accesses[$accessesElement])));
    }
}
