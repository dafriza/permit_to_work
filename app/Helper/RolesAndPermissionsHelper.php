<?php
namespace App\Helper;
class RolesAndPermissionsHelper
{
    public $actions = ['create', 'read', 'update', 'delete'];
    public $accesses = [
      'permit_to_work',
      'entry_permit',
      'employee_management',
      'choose_reponsibility',
      'demand_work_request',
      'demand_entry_permit',
      'permit_to_work_request',
      'entry_permit_request',
      'edit_profile',
      'request_delete_account',
    ];
    public $roles = [
      'superadmin',
      'employee',
      'supervisor',
    ];
    public $permissions = [];

    function linkPermissions()
    {
        foreach ($this->accesses as $key_access => $access) {
            foreach ($this->actions as $key_action => $action) {
                $this->permissions[$access][] = $action . ' ' . $access;
            }
        }
        return $this->permissions;
    }
    
}
