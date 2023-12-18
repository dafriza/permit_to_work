<?php
namespace App\Services\UserProfile;

use App\Models\User;
use App\Services\UserProfile\UserProfileInterface;
use App\Http\Requests\UserProfile\UserProfileRequest;
use DataTables;

class UserProfileServices implements UserProfileInterface
{
    function update(UserProfileRequest $request)
    {
        $user_data = $request->validated();
        $user = User::find($request->validated()['id']);
        // User::where('id',$request['id'])->update($request->safe()->except(['role']));
        User::where('id',$request['id'])->update($user_data);
        // $user->syncRoles([$request->validated()['role']]);
        // return response()->json($request->validated(), 202);
        return response()->json("Success", 202);
    }
    function getDataPermitToWorks() {
        $user = User::where('id',1)->with('request_pa')->first();
        return DataTables::collection(collect($user->request_pa))->addIndexColumn()->toJson();
    }
}
