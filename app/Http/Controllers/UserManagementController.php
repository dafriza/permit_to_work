<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helper\RolesAndPermissionsHelper;
use App\DataTables\UserManagement\UserManagementDataTable;
use App\Http\Requests\UserManagement\UserManagementRequest;
use App\Services\Admin\UserManagement\UserManagementInterface;

class UserManagementController extends Controller
{
    private $userManagement;
    public function __construct(UserManagementInterface $userManagement)
    {
        $this->userManagement = $userManagement;
    }
    function index(UserManagementDataTable $datatable)
    {
        // dd(User::find(1)->getAllPermissions());
        $roleAssignments = User::roleAssignment;
        $rolesAndPermissions = new RolesAndPermissionsHelper();
        return $datatable->render('content.user_management.index', compact('roleAssignments', 'rolesAndPermissions'));
    }
    function datatablesIndex(UserManagementDataTable $datatable)
    {
        return $datatable->ajax();
    }
    function getPermissionsUser(int $id)
    {
        return User::find($id)->getAllPermissions();
    }
    function updateUser(UserManagementRequest $request)
    {
        return $this->userManagement->updateUser($request);
    }
    function createUser(UserManagementRequest $request)
    {
        return $this->userManagement->createUser($request);
    }
    function deleteUser(Request $request)
    {
        $id = $request->id;
        User::find($id)->delete();
        return response()->json('success', 202);
    }
}
