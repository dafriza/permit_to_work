<?php
namespace App\Services\Admin\UserManagement;

use App\Models\User;
use App\Http\Requests\UserManagement\UserManagementRequest;

class UserManagementServices implements UserManagementInterface
{
    function updateUser(UserManagementRequest $request)
    {
        $validatedData = $request->validated();
        // dd($validatedData);
        $user = User::find($validatedData['id']);
        $user->syncPermissions($validatedData['permission']);
        $user->syncRoles($validatedData['role']);
        $user->update(collect($validatedData)->except(['permission','role'])->toArray());
        return response()->json('success', 202);
    }
    function createUser(UserManagementRequest $request)
    {
        $validatedData = $request->validated();
        $user = User::create(collect($validatedData)->except('permission')->toArray());
        $user->givePermissionTo($validatedData['permission']);
        return response()->json('success', 202);
    }
}
