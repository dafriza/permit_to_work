<?php

namespace App\Http\Controllers\ptw_management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PtwDummy;
use Illuminate\Pagination\Paginator;

class PtwManagementController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->input('status');
        $search = $request->input('search');
        //$perPage = $request->input('per_page', 10);

        $ptw_dummy = PtwDummy::when($status, function ($query) use ($status) {
            return $query->where('status', $status);
        })
        ->when($search, function ($query) use ($search) {
            return $query->where('ptw_id', 'like', '%' . $search . '%')
                         ->orWhere('project', 'like', '%' . $search . '%')
                         ->orWhere('employee_name', 'like', '%' . $search . '%')
                         ->orWhere('start_date', 'like', '%' . $search . '%')
                         ->orWhere('status', 'like', '%' . $search . '%');
        })
        ->get();

        
        if ($request->expectsJson()) {
            return response()->json($ptw_dummy);
        }

        //$ptw_dummy = PtwDummy::sortable()->paginate(100)->onEachSide(1);

        return view('content.ptw-management.ptwmanagement', compact('ptw_dummy'));

    }
}
