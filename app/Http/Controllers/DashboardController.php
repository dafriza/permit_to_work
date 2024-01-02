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
        $activityPTW = $this->dashboard->getMapPermitToWork()->except('date');
        $datePTW = $this->dashboard->getMapPermitToWork()->only('date');
        // dd($activityPTW['authorisation']);
        // return response()->json($activityPTW);
        return view('content.dashboard.index', compact('activityPTW','datePTW'));
    }
    function getDataPermitToWork()
    {
        return $this->dashboard->getDataPermitToWork();
    }
}
