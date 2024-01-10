<?php

namespace App\Http\Controllers;

use App\Models\PermitToWork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\Dashboard\DashboardInterface;

class DashboardController extends Controller
{
    private $dashboard;
    public function __construct(DashboardInterface $dashboard)
    {
        $this->dashboard = $dashboard;
    }
    function index()
    {
        $activityPTW = $this->dashboard->getMapPermitToWork()->except('date');
        $datePTW = $this->dashboard->getMapPermitToWork()->only('date');
        // dd($activityPTW);
        // return response()->json($activityPTW);
        return view('content.dashboard.index', compact('activityPTW','datePTW'));
    }
    function getDataPermitToWork()
    {
        return $this->dashboard->getDataPermitToWork();
    }
}
