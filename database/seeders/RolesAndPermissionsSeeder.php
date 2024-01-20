<?php
namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Helper\RolesAndPermissionsHelper;

class RolesAndPermissionsSeeder extends Seeder
{
    private $role_and_permission_helper, $get_all_permissions;
    public function __construct(RolesAndPermissionsHelper $role_and_permission_helper)
    {
        $this->role_and_permission_helper = $role_and_permission_helper;
    }
    public function run()
    {
        // Reset cached roles and permissions
        // app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        $this->linkedPermissions();
        $this->createPermission();
        $this->userBindPermission();
        // $this->roleBindPermissions();
    }

    function linkedPermissions()
    {
        $this->get_all_permissions = $this->role_and_permission_helper->linkPermissions();
    }
    function createPermission()
    {
        $permissions = $this->get_all_permissions;
        foreach ($permissions as $key => $detail_permission) {
            foreach ($detail_permission as $permission) {
                Permission::create(['name' => $permission]);
            }
        }
    }
    // function roleBindPermissions()
    // {
    //     $roles = $this->role_and_permission_helper::roles;
    //     $permissions = $this->get_all_permissions;

    //     // superadmin
    //     $this->superadminRolesBind($roles, $permissions);

    //     // employee
    //     $this->employeeRolesBind($roles, $permissions);

    //     // spv
    //     $this->spvRolesBind($roles, $permissions);
    // }

    function userBindPermission()
    {
        $roles = $this->role_and_permission_helper::roles;
        $permissions = $this->get_all_permissions;
        $employees = User::role($roles[1])->get();
        $approvers = User::role($roles[2])->get();
        $this->userGivePermissionsTo($employees, [
            $permissions['permit_to_work_cold'],
            $permissions['permit_to_work_hot'],
            $permissions['entry_permit_request'],
            $permissions['user_profile'],
            // $permissions['request_delete_account'],
            $permissions['dashboard_user'],
        ]);
        $this->userGivePermissionsTo($approvers, [
            // $permissions['permit_to_work_cold'],
            $permissions['demand_work_request'],
            $permissions['demand_entry_permit'],
            $permissions['entry_permit_request'],
            $permissions['user_profile'],
            $permissions['permit_to_work_management'],
            // $permissions['request_delete_account'],
            $permissions['dashboard_user'],
        ]);
        $this->superadminRolesBind($roles, $permissions);
    }
    function userGivePermissionsTo($users, $permissions)
    {
        foreach ($users as $user) {
            $user->givePermissionTo($permissions);
        }
    }
    function spvRolesBind($roles, $permissions)
    {
        $this->roleLinkPermissions($roles[2], [
            $permissions['permit_to_work_cold'],
            $permissions['permit_to_work_hot'],
            $permissions['entry_permit_request'],
            // $permissions['demand_work_request'],
            // $permissions['demand_entry_permit'],
            $permissions['user_profile'],
            // $permissions['request_delete_account'],
            $permissions['dashboard_user'],
        ]);
    }
    function employeeRolesBind($roles, $permissions)
    {
        $this->roleLinkPermissions($roles[1], [
            $permissions['permit_to_work_cold'],
            $permissions['permit_to_work_hot'],
            $permissions['entry_permit_request'],
            $permissions['user_profile'],
            // $permissions['request_delete_account'],
            $permissions['dashboard_user'],
        ]);
    }
    function superadminRolesBind($roles, $permissions)
    {
        $this->roleLinkPermissions($roles[0], [
            $permissions['employee_management'],
            // $permissions['permit_to_work'],
            // $permissions['entry_permit'],
            // $permissions['choose_reponsibility'],
            // $permissions['demand_work_request'],
            // $permissions['demand_entry_permit'],
            $permissions['permit_to_work_management'],
            $permissions['dashboard_admin'],
        ]);
    }
    function roleLinkPermissions($role, $permissions)
    {
        // Role::create(['name' => $role])->givePermissionTo($permissions);
        Role::findByName($role)->givePermissionTo($permissions);
    }
}
