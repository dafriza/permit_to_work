<?php

namespace App\Services\Dashboard;

use App\Models\PermitToWork;
use Illuminate\Support\Facades\Auth;
use App\Services\Dashboard\DashboardInterface;
use Illuminate\Support\Facades\Log;

class DashboardServices implements DashboardInterface
{
    private const statusDesc = [
        1 => 'ON GOING',
        2 => 'SUCCESS',
        3 => 'REJECTED',
        4 => 'DRAFT',
    ];
    private const statuses = ['authorisation', 'permit_registry', 'site_gas_test', 'issue', 'acceptance', 'close_out_pa', 'close_out_aa', 'registry_of_work_completion'];
    private $permitToWorkSigns = [];
    function getDataPermitToWork()
    {
        $role = Auth::user()->role_name;
        if ($role == 'employee') {
            return $this->dashboardUser();
        }else if($role == 'Supervisor'){
            return $this->dashboardSpv();
        }
        $permitToWorks = PermitToWork::all();
        $permitToWorksMap = $permitToWorks
            ->groupBy('status')
            ->map(function ($permit_to_work) {
                return $permit_to_work->count();
            })
            ->flatten();
        return $permitToWorksMap;
    }
    function dashboardUser()
    {
        $permitToWorkUser = $this->getPermitToWorkByEmployeeId();
        $permitToWorkMap = $permitToWorkUser->groupBy('status')->flatMap(function ($permitToWork, $key) {
            return [self::statusDesc[$key] => $permitToWork->count()];
        });
        return $permitToWorkMap;
        // return $permitToWorkUser;
    }
    function dashboardSpv()
    {
        $permitToWorkUser = $this->getPermitToWorkBySpvId();
        $permitToWorkMap = $permitToWorkUser->groupBy('status')->flatMap(function ($permitToWork, $key) {
            return [self::statusDesc[$key] => $permitToWork->count()];
        });
        return $permitToWorkMap;
        // return $permitToWorkUser;
    }
    function getMapPermitToWork()
    {
        // dd('jelen');
        $this->permitToWorkSigns = collect($this->permitToWorkSigns);
        $permitToWork = $this->getPermitToWorkByEmployeeIdLatest();
        $role_name = $this->getRoleName();
        if($role_name == 'Supervisor'){
            $permitToWork = $this->getPermitToWorkBySpvIdLatest();
        }
        // dd($permitToWork);
        foreach (self::statuses as $status) {
            $statusKey = str_replace('_', ' ', ucwords($status, '_'));
            $permitToWork->status_issue = $permitToWork->{$status}->status;
            $permitToWork->date_convert = $permitToWork->{$status}->date->date;
            $this->permitToWorkSigns->put($statusKey, [$permitToWork->status_issue, $permitToWork->date_convert]);
        }
        $iterate = 0;
        // dd(count($this->permitToWorkSigns));
        foreach ($this->permitToWorkSigns as $key => $permitToWorkSign) {
            // dd($permitToWorkSign);
            // dd(explode(',', $permitToWorkSign[0])[0]);
            try {
                $status = explode(',', $permitToWorkSign[0])[0];
            } catch (\Exception $e) {
                Log::debug($e);
            }
            // $status = explode(',', $permitToWorkSign[0]);
            if ($status == 'danger') {
                $this->rejectAllSigns($iterate);
                break;
            }
            $iterate++;
        }
        // Date calculation
        $dateNow = now();
        $datePTW = $permitToWork->created_at;
        $resultDate = $dateNow->diffInDays($datePTW);
        // $resultDate = 0;
        $this->permitToWorkSigns->put('date', $resultDate);
        // dd($this->permitToWorkSigns);
        return $this->permitToWorkSigns;
    }

    function rejectAllSigns($iterate)
    {
        $statuses = collect(self::statuses)->reject(function ($value, $key) use ($iterate) {
            // return $v/
            if ($key < $iterate) {
                return $value;
            }
            // dd($key);
        });
        $danger = 'danger,error,x,Invalid';
        // dd($this->permitToWorkSigns['Authorisation'][0]);
        // foreach (self::statuses as $status) {
        foreach ($statuses as $status) {
            $status = str_replace('_', ' ', ucwords($status, '_'));
            $this->permitToWorkSigns[$status] = array_replace($this->permitToWorkSigns[$status], [0 => $danger]);
        }
        // dd($statuses);
        // return $statuses;
    }

    function getPermitToWorkByEmployeeIdLatest()
    {
        return PermitToWork::query()
            ->where('request_pa', Auth::id())
            ->latest()
            // ->take( 5)
            ->first();
    }
    function getPermitToWorkBySpvIdLatest()
    {
        return PermitToWork::query()
            ->where('direct_spv', Auth::id())
            ->latest()
            // ->take( 5)
            ->first();
    }
    function getPermitToWorkByEmployeeId()
    {
        return PermitToWork::where('request_pa', Auth::id())->get();
    }
    function getPermitToWorkBySpvId()
    {
        return PermitToWork::where('direct_spv', Auth::id())->get();
    }
    function getRoleName() {
        $role = Auth::user()->role_name;
        return $role;
    }
}
