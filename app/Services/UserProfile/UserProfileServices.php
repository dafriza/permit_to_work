<?php
namespace App\Services\UserProfile;

use DataTables;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\DeleteUserProfile;
use Illuminate\Support\Facades\Auth;
use App\Services\UserProfile\UserProfileInterface;
use App\Http\Requests\UserProfile\UserProfileRequest;

class UserProfileServices implements UserProfileInterface
{
    function update(UserProfileRequest $request)
    {
        $user_data = $request->validated();
        $user = User::find($request->validated()['id']);
        // User::where('id',$request['id'])->update($request->safe()->except(['role']));
        User::where('id', $request['id'])->update($user_data);
        // $user->syncRoles([$request->validated()['role']]);
        // return response()->json($request->validated(), 202);
        return response()->json('Success', 202);
    }
    function delete(Request $request)
    {
        DeleteUserProfile::create([
            'user_id' => $request->id,
            'status' => 1,
        ]);
        $getAllPermissionsUser = Auth::user()->getAllPermissions();
        Auth::user()->syncPermissions([]);
        $permissionsUser = $getAllPermissionsUser
            ->filter(function ($permission) {
                return str_contains($permission['name'], 'dashboard_user') || str_contains($permission['name'], 'user_profile');
            })
            ->each(function ($permission) {
                // Auth::user()->syncPermissions([]);
                Auth::user()->givePermissionTo($permission['name']);
            });
        // return $res;
        // return $resMap;
        return response()->json('Success', 202);
    }
    function getDataPermitToWorks()
    {
        $user = User::where('id', Auth::id())
            ->with('request_pa')
            ->first();
        return DataTables::collection(collect($user->request_pa))
            ->addIndexColumn()
            ->toJson();
    }
}
