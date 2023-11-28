<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    function index()
    {
        return view('content.dashboard.user-profile');
    }
}
