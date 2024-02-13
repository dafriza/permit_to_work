<?php
namespace App\Services\UserProfile;

use Illuminate\Http\Request;
use App\Http\Requests\UserProfile\UserProfileRequest;

interface UserProfileInterface
{
    function update(UserProfileRequest $request);
    function delete(Request $request);
    function getDataPermitToWorks();
}
