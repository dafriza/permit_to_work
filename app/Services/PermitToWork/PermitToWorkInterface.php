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
    function findDataDirectSPV($id);
    function findDataToolsEquipment($data_tools_equipment);
    function findDataTrades($data_trades);
    function storeHeader(HeaderColdWorkRequest $request);
    function approveRequest(Request $request);
    function rejectRequest(Request $request);
    function printPermitToWork();
    function deletePermitToWork($id);
    function detailPrintPermitToWork();
}
