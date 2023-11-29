<?php
namespace App\Services\Dashboard;

use App\Models\PermitToWork;
use App\Services\Dashboard\DashboardInterface;

class DashboardServices implements DashboardInterface
{
    function getDataPermitToWork()
    {
        $permit_to_works = PermitToWork::all();
        $permit_to_works_map = $permit_to_works
            ->groupBy('status')
            ->map(function ($permit_to_work) {
                return $permit_to_work->count();
            })
            ->flatten();
        return $permit_to_works_map;
    }
    function getMapPermitToWork()
    {
        $permit_to_work = PermitToWork::find(1);
        // return $permit_to_work->authorization_and_issuing;
        // return $permit_to_work->main_issue;
        return $permit_to_work;
        // return $status_activity;
    }
}
