<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\EntryPermit;
use App\Models\PermitToWork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notification;
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
        if (Auth::user()->hasRole('superadmin')) {
            $totalUser = User::all()->count();
            $totalPTWCold = PermitToWork::all()->count();
            $totalPTWHot = PermitToWork::all()->count();
            $totalEP = EntryPermit::all()->count();
            return view('content.dashboard.indexAdmin', compact('totalUser', 'totalPTWCold', 'totalPTWHot', 'totalEP'));
        }
        try {
            $activityPTW = $this->dashboard->getMapPermitToWork()->except('date');
            $datePTW = $this->dashboard->getMapPermitToWork()->only('date');
        } catch (\Exception $e) {
            Log::debug($e);
            $activityPTW = null;
            $datePTW = null;
        }
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
