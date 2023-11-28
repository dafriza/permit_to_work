<?php

namespace App\Http\Controllers;

use App\Models\PermitToWork;
use App\Services\Dashboard\DashboardInterface;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $dashboard;
    public function __construct(DashboardInterface $dashboard)
    {
        $this->dashboard = $dashboard;
    }
    function index()
    {
        $permit_to_work_auth = $this->dashboard->getMapPermitToWork();
        // return response()->json($permit_to_work_auth);
        return view('content.dashboard.index', compact('permit_to_work_auth'));
    }
    function getDataPermitToWork()
    {
        return $this->dashboard->getDataPermitToWork();
    }
}
