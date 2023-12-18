<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\DeleteUserProfile;
use Spatie\Permission\Models\Role;
use App\Services\UserProfile\UserProfileInterface;
use App\Http\Requests\UserProfile\UserProfileRequest;

class UserProfileController extends Controller
{
    private $user;
    public function __construct(UserProfileInterface $user)
    {
        $this->user = $user;
    }
    function index()
    {
        $auth = User::find(1);
        // $roles = $this->getAllRoles();
        $job_pos = $this->getAllJobPos();
        $if_delete = DeleteUserProfile::with('user')->first();
        // dd($if_delete);
        return view('content.user_profile.index', compact('auth', 'job_pos','if_delete'));
    }
    // function getAllRoles()
    // {
    //     return Role::all()->reject(function ($value) {
    //         return $value->name == 'superadmin';
    //     });
    // }
    function getAllJobPos() {
        return Job::all();
    }
    function getDataPermitToWorks()
    {
        return $this->user->getDataPermitToWorks();
    }
    function update(UserProfileRequest $request)
    {
        return $this->user->update($request);
    }
    function delete(Request $request)
    {
        DeleteUserProfile::create([
            'user_id' => $request->id,
            'status' => 1,
        ]);
        return response()->json('Success', 202);
    }
}
