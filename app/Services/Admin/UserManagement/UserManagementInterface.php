<?php
namespace App\Services\Admin\UserManagement;

use App\Http\Requests\UserManagement\UserManagementRequest;

interface UserManagementInterface{
    function updateUser(UserManagementRequest $request);
    function createUser(UserManagementRequest $request);
}
