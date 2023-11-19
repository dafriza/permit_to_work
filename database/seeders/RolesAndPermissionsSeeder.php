<?php
namespace Database\Seeders;
use App\Helper\RolesAndPermissionsHelper;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        $this->linkedPermissions();
        $this->createPermission();
        $this->createRole();
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
    function createRole()
    {
        $roles = $this->role_and_permission_helper->roles;
        $permissions = $this->get_all_permissions;

        // superadmin
        $this->roleLinkPermissions($roles[0], [$permissions['employee_management'], $permissions['permit_to_work'], $permissions['entry_permit'], $permissions['choose_reponsibility'], $permissions['demand_work_request'], $permissions['demand_entry_permit']]);

        // employee
        $this->roleLinkPermissions($roles[1], [$permissions['permit_to_work_request'], $permissions['entry_permit_request'], $permissions['edit_profile'], $permissions['request_delete_account']]);

        // spv
        $this->roleLinkPermissions($roles[2], [$permissions['demand_work_request'], $permissions['demand_entry_permit'], $permissions['edit_profile'], $permissions['request_delete_account']]);
    }

    function roleLinkPermissions($role, $permissions)
    {
        Role::create(['name' => $role])->givePermissionTo($permissions);
    }
}
