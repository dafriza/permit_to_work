<?php

namespace App\Http\Controllers;

use App\DataTables\PermitToWorkManagementDataTable;
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
    function indexManagement(PermitToWorkManagementDataTable $dataTable)
    {
        return $dataTable->render('content.permit_to_work.ptw_management.index');
        // return view('content.permit_to_work.ptw_management.index');
    }
    public function datatables(PermitToWorkManagementDataTable $dataTable)
    {
        return $dataTable->ajax();
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
    function deletePermitToWork($id)
    {
        return $this->permit_to_work->deletePermitToWork($id);
    }
    function printPermitToWork() {
        return $this->permit_to_work->printPermitToWork();
    }
    function test_image()
    {
        return base64_encode(Storage::disk('signature')->get('2023-12-14-1-John Doe.png'));
    }
}
