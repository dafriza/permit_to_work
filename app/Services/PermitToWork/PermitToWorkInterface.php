<?php

namespace App\Services\PermitToWork;

use Illuminate\Http\Request;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequest;

interface PermitToWorkInterface
{
    function getDirectSPV(Request $request);
    function getToolsEquipment(Request $request);
    function getTrades(Request $request);
    function getHeaderColdWork();
    function getTotalPermits();
    function getSignature($img);
    function storeHeader(HeaderColdWorkRequest $request);
    function deletePermitToWork($id);
    function findDataDirectSPV($id);
    function findDataToolsEquipment($data_tools_equipment);
    function findDataTrades($data_trades);
    function printPermitToWork();
    function detailPrintPermitToWork();
}
