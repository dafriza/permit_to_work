<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PermitToWork;
use Illuminate\Http\Request;
use App\Models\ToolsEquipment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PermitToWork\RejectRequest;
use App\Http\Requests\PermitToWork\SignedRequest;
use App\Http\Requests\PermitToWork\ApprovalRequest;
use App\Services\PermitToWork\PermitToWorkInterface;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequest;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestCrc;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestPTW;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestTRA;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestAppOne;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestAppTwo;
use App\DataTables\PermitToWork\PermitToWorkManagementDataTable;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestAppFour;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestAppThree;
use App\DataTables\PermitToWork\PermitToWorkManagementUserDatatable;

class PermitToWorkController extends Controller
{
    private $permit_to_work;
    public function __construct(PermitToWorkInterface $permit_to_work)
    {
        $this->permit_to_work = $permit_to_work;
    }
    function indexFirst()
    {
        return view('content.permit_to_work.indexFirst');
    }
    function show($id)
    {
        $detail = PermitToWork::find($id);
        $if_complete = $detail['status'] == 2 ? true : false;
        // dd($if_complete);
        return view('content.permit_to_work.show', compact('id', 'if_complete'));
    }
    function detail($id)
    {
        $detail_request = PermitToWork::find($id);
        $if_success = '';
        $ifSigned = false;
        return view('content.permit_to_work.detail_request.detail_request', compact('detail_request', 'if_success', 'ifSigned'));
    }
    function indexManagement(PermitToWorkManagementDataTable $dataTable)
    {
        return $dataTable->render('content.permit_to_work.ptw_management.index');
        // return view('content.permit_to_work.ptw_management.index');
    }
    function userManagement(PermitToWorkManagementUserDatatable $dataTable)
    {
        return $dataTable->render('content.permit_to_work.ptw_management.user.index');
    }
    public function datatablesIndex(PermitToWorkManagementDataTable $dataTable)
    {
        return $dataTable->ajax();
    }
    public function datatablesUserManagement(PermitToWorkManagementUserDatatable $dataTable)
    {
        return $dataTable->ajax();
    }
    function detailRequest($id)
    {
        $detail_request = PermitToWork::find($id);
        $assignment = $this->getAssignment();
        $approverSigned = $detail_request->direct_spv == Auth::id();
        $if_success = $detail_request->{$assignment}->status ?? 'draft';
        $ifSigned = $detail_request->sign_spv == null && $approverSigned ? true : false;
        return view('content.permit_to_work.detail_request.detail_request', compact('detail_request', 'if_success', 'ifSigned'));
    }
    function tra()
    {
        return view('content.permit_to_work.step2');
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
    // Approval 3
    function getClosedOutPA(Request $request)
    {
        return $this->permit_to_work->getClosedOutPA($request);
    }
    function getClosedOutAA(Request $request)
    {
        return $this->permit_to_work->getClosedOutAA($request);
    }
    // Approval 4
    function getRegisWorkPA(Request $request)
    {
        return $this->permit_to_work->getRegisWorkPA($request);
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
    function getHeaderColdWork($id)
    {
        return $this->permit_to_work->getHeaderColdWork($id);
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

    function getHeaderColdWorkAppThree()
    {
        return $this->permit_to_work->getHeaderColdWorkAppThree();
    }
    function getHeaderColdWorkAppFour()
    {
        return $this->permit_to_work->getHeaderColdWorkAppFour();
    }
    function getTotalPermits()
    {
        return $this->permit_to_work->getTotalPermits();
    }
    function getSignature($img)
    {
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
    // Approval 3
    function findDataClosedOutPA($id)
    {
        return $this->permit_to_work->findDataClosedOutPA($id);
    }
    function findDataClosedOutAA($id)
    {
        return $this->permit_to_work->findDataClosedOutAA($id);
    }
    // approval 4
    function findDataRegisWorkPA($id)
    {
        return $this->permit_to_work->findDataRegisWorkPA($id);
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
    {
        // function storeHeader(Request $request)
        // return $request->all();
        return $this->permit_to_work->storeHeader($request);
    }
    function storeShowHeader(HeaderColdWorkRequest $request)
    {
        // function storeHeader(Request $request)
        // return $request->all();
        return $this->permit_to_work->storeShowHeader($request);
    }
    function storeHeaderCrc(HeaderColdWorkRequestCrc $request)
    {
        return $this->permit_to_work->storeHeaderCrc($request);
    }
    function storeHeaderTRA(HeaderColdWorkRequestTRA $request)
    {
        return $this->permit_to_work->storeHeaderTRA($request);
    }
    function storeHeaderAppOne(HeaderColdWorkRequestAppOne $request)
    {
        return $this->permit_to_work->storeHeaderAppOne($request);
    }
    function storeHeaderAppTwo(HeaderColdWorkRequestAppTwo $request)
    {
        return $this->permit_to_work->storeHeaderAppTwo($request);
    }
    function storeHeaderAppThree(HeaderColdWorkRequestAppThree $request)
    {
        return $this->permit_to_work->storeHeaderAppThree($request);
    }
    function storeHeaderAppFour(HeaderColdWorkRequestAppFour $request)
    {
        return $this->permit_to_work->storeHeaderAppFour($request);
    }
    function storePTWRequest(HeaderColdWorkRequestPTW $request)
    {
        return $this->permit_to_work->storePTWRequest($request);
    }
    function approvalRequest(ApprovalRequest $request)
    {
        return $this->permit_to_work->approvalRequest($request);
    }
    function rejectRequest(RejectRequest $request)
    {
        return $this->permit_to_work->rejectRequest($request);
    }
    function signedRequest(SignedRequest $request)
    {
        return $this->permit_to_work->signedRequest($request);
    }
    function deletePermitToWork($id)
    {
        return $this->permit_to_work->deletePermitToWork($id);
    }
    function printPermitToWork($id)
    {
        return $this->permit_to_work->printPermitToWork($id);
    }
    function detailPrintPermitToWork()
    {
        return $this->permit_to_work->detailPrintPermitToWork();
    }
    function test_image()
    {
        return base64_encode(Storage::disk('signature')->get('2023-12-14-1-John Doe.png'));
    }
    function getAssignment()
    {
        return Auth::user()->role_assignment;
    }
}
