<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PermitToWork;
use Illuminate\Http\Request;
use App\Models\ToolsEquipment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Services\PermitToWork\PermitToWorkInterface;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequest;
use App\DataTables\PermitToWork\PermitToWorkManagementDataTable;
use App\DataTables\PermitToWork\PermitToWorkManagementUserDatatable;
use App\Http\Requests\PermitToWork\ApprovalRequest;

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
        $if_success = $detail_request->{$assignment}->status;
        return view('content.permit_to_work.detail_request.detail_request', compact('detail_request', 'if_success'));
    }
    function tra()
    {
        return view('content.permit_to_work.step2');
    }
    function getDirectSPV(Request $request)
    {
        return $this->permit_to_work->getDirectSPV($request);
    }
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
    function approvalRequest(ApprovalRequest $request)
    {
        return $this->permit_to_work->approvalRequest($request);
    }
    function deletePermitToWork($id)
    {
        return $this->permit_to_work->deletePermitToWork($id);
    }
    function printPermitToWork()
    {
        return $this->permit_to_work->printPermitToWork();
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
