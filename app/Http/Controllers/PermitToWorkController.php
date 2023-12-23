<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermitToWork\HeaderColdWorkRequestAppOne;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestAppTwo;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestCrc;
use App\Models\User;
use App\Models\PermitToWork;
use Illuminate\Http\Request;
use App\Models\ToolsEquipment;
use Illuminate\Support\Facades\Storage;
use App\Services\PermitToWork\PermitToWorkInterface;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequest;

class PermitToWorkController extends Controller
{
    private $permit_to_work;
    public function __construct(PermitToWorkInterface $permit_to_work)
    {
        $this->permit_to_work = $permit_to_work;
    }
    function index()
    {
        return view('content.permit_to_work.index');
    }
    function getDirectSPV(Request $request)
    {
        return $this->permit_to_work->getDirectSPV($request);
    }
    function getApproveSC(Request $request)
    {
        return $this->permit_to_work->getApproveSC($request);
    }
    function getApprovePC(Request $request)
    {
        return $this->permit_to_work->getApprovePC($request);
    }
    function getApproveProc(Request $request)
    {
        return $this->permit_to_work->getApproveProc($request);
    }
    // Approval 2
    function getIssueAA(Request $request)
    {
        return $this->permit_to_work->getIssueAA($request);
    } 
    function getAcceptancePA(Request $request)
    {
        return $this->permit_to_work->getAcceptancePA($request);
    }
    // cut
    function getToolsEquipment(Request $request)
    {
        return $this->permit_to_work->getToolsEquipment($request);
    }
    function getTrades(Request $request)
    {
        return $this->permit_to_work->getTrades($request);
    }
    function getHeaderColdWork()
    {
        return $this->permit_to_work->getHeaderColdWork();
    }
    function getHeaderColdWorkCrc()
    {
        return $this->permit_to_work->getHeaderColdWorkCrc();
    }

    function getHeaderColdWorkAppOne()
    {
        return $this->permit_to_work->getHeaderColdWorkAppOne();
    }

    function getHeaderColdWorkAppTwo()
    {
        return $this->permit_to_work->getHeaderColdWorkAppTwo();
    }


    function getTotalPermits()
    {
        return $this->permit_to_work->getTotalPermits();
    }
    function getSignature($img) {
        return $this->permit_to_work->getSignature($img);
    }
    function findDataDirectSPV($id)
    {
        return $this->permit_to_work->findDataDirectSPV($id);
    }

    function findDataApproveSC($id)
    {
        return $this->permit_to_work->findDataApproveSC($id);
    }
    function findDataApprovePC($id)
    {
        return $this->permit_to_work->findDataApprovePC($id);
    }

    function findDataApproveProc($id)
    {
        return $this->permit_to_work->findDataApproveProc($id);
    }

    function findDataIssueAA($id)
    {
        return $this->permit_to_work->findDataIssueAA($id);
    }
    function findDataAcceptancePA($id)
    {
        return $this->permit_to_work->findDataAcceptancePA($id);
    }

    function findDataToolsEquipment($data_tools_equipment)
    {
        return $this->permit_to_work->findDataToolsEquipment($data_tools_equipment);
    }
    function findDataTrades($data_trades)
    {
        return $this->permit_to_work->findDataTrades($data_trades);
    }
    function storeHeader(HeaderColdWorkRequest $request)
    // function storeHeader(Request $request)
    {
        // return $request->all();
        return $this->permit_to_work->storeHeader($request);
    }
    function storeHeaderCrc(HeaderColdWorkRequestCrc $request)
    {
        return $this->permit_to_work->storeHeaderCrc($request);
    }
    function storeHeaderAppOne(HeaderColdWorkRequestAppOne $request)
    {
        return $this->permit_to_work->storeHeaderAppOne($request);
    }
    function storeHeaderAppTwo(HeaderColdWorkRequestAppTwo $request)
    {
        return $this->permit_to_work->storeHeaderAppTwo($request);
    }
    function test_image() {
        return base64_encode(Storage::disk('signature')->get('2023-12-14-1-John Doe.png'));
    }
}
