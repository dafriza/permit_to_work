<?php

namespace App\Http\Controllers\ptw_management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PtwDummy;
use Illuminate\Pagination\Paginator;

class PtwManagementController extends Controller
{
    public function index() 
    {
        $ptw_dummy = PtwDummy::sortable()->paginate(5);

        return view('content.ptw-management.ptwmanagement', compact('ptw_dummy'));
    }
}
