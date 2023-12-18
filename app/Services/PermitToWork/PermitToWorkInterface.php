<?php
namespace App\Services\PermitToWork;

use App\Http\Requests\PermitToWork\HeaderColdWorkRequestCrc;
use Illuminate\Http\Request;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequest;

interface PermitToWorkInterface
{
    function getDirectSPV(Request $request);
    function getToolsEquipment(Request $request);
    function getTrades(Request $request);
    function storeHeader(HeaderColdWorkRequest $request);
    function storeHeaderCrc(HeaderColdWorkRequestCrc $request);

    function getHeaderColdWork();
    function getHeaderColdWorkCrc();

    function getTotalPermits();
    function getSignature($img);
    function findDataDirectSPV($id);
    function findDataToolsEquipment($data_tools_equipment);
    function findDataTrades($data_trades);
}
