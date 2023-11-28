<?php

namespace App\Http\Controllers\ptw_management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PtwManagementController extends Controller
{
    public function index() 
    {
        return view('content.ptw-management.ptwmanagement');
    }
}
