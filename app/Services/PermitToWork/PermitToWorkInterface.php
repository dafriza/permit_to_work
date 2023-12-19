<?php
namespace App\Services\PermitToWork;

use App\Http\Requests\PermitToWork\HeaderColdWorkRequestAppOne;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestCrc;
use Illuminate\Http\Request;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequest;

interface PermitToWorkInterface
{
    function getDirectSPV(Request $request);
    function getApproveSC(Request $request);
    function getApprovePC(Request $request);
    function getApproveProc(Request $request);

    function getToolsEquipment(Request $request);
    function getTrades(Request $request);
    function storeHeader(HeaderColdWorkRequest $request);
    function storeHeaderCrc(HeaderColdWorkRequestCrc $request);
    function storeHeaderAppOne(HeaderColdWorkRequestAppOne $request);

    function getHeaderColdWork();
    function getHeaderColdWorkCrc();
    function getHeaderColdWorkAppOne();
    function getTotalPermits();
    function getSignature($img);
    function findDataDirectSPV($id);
    function findDataApproveSC($id);
    function findDataApprovePC($id);
    function findDataApproveProc($id);

    function findDataToolsEquipment($data_tools_equipment);
    function findDataTrades($data_trades);
}
