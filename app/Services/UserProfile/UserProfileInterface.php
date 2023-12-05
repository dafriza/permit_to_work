<?php
namespace App\Services\UserProfile;

use App\Http\Requests\UserProfile\UserProfileRequest;

interface UserProfileInterface{
    function update(UserProfileRequest $request);
    function getDataPermitToWorks();
}
