<?php

namespace App\Http\Controllers;

use App\Models\PermitToWork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\Dashboard\DashboardInterface;
use Illuminate\Notifications\Notification;

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
        return view('content.dashboard.index', compact('activityPTW', 'datePTW'));
    }
    function getDataPermitToWork()
    {
        return $this->dashboard->getDataPermitToWork();
    }
    function readNotification($uuid)
    {
        $readNotif = Auth::user()
            ->notifications()
            ->where('id', $uuid)
            ->update([
                'read_at' => now(),
            ]);
        return response()->json('success', 202);
    }
    function readAllNotification()
    {
        $readNotif = Auth::user()
            ->unreadNotifications()
            ->update([
                'read_at' => now(),
            ]);
        return response()->json('success', 202);
    }
    function getCountNotification()
    {
        return count(Auth::user()->unreadNotifications);
    }
}
