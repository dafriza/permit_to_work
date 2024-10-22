<?php

namespace App\Services\PermitToWork;

use App\Http\Requests\PermitToWork\StorePTWProgressRequest;
use Illuminate\Http\Request;
use App\Http\Requests\PermitToWork\RejectRequest;
use App\Http\Requests\PermitToWork\SignedRequest;
use App\Http\Requests\PermitToWork\ApprovalRequest;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequest;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestCrc;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestPTW;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestTRA;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestAppOne;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestAppTwo;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestAppFour;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestAppThree;

interface PermitToWorkInterface
{
    function showData($id);
    function detailRequestData($id);
    function getDirectSPV(Request $request);
    function getApproveSC(Request $request);
    function getApprovePC(Request $request);
    function getApproveProc(Request $request);
    // Approval 2
    function getIssueAA(Request $request);
    function getAcceptancePA(Request $request);
    // Approval 3
    function getClosedOutPA(Request $request);
    function getClosedOutAA(Request $request);
    // Approval 4
    function getRegisWorkPA(Request $request);
    function getToolsEquipment(Request $request);
    function getTrades(Request $request);
    function storeHeaderCrc(HeaderColdWorkRequestCrc $request);
    function storeHeaderTRA(HeaderColdWorkRequestTRA $request);
    function storeHeaderAppOne(HeaderColdWorkRequestAppOne $request);
    function storeHeaderAppTwo(HeaderColdWorkRequestAppTwo $request);
    function storeHeaderAppThree(HeaderColdWorkRequestAppThree $request);
    function storeHeaderAppFour(HeaderColdWorkRequestAppFour $request);
    function storePTWRequest(HeaderColdWorkRequestPTW $request);
    function storePTWProgress(StorePTWProgressRequest $request);
    function getHeaderColdWork($id);
    function getHeaderColdWorkCrc();
    function getHeaderColdWorkAppOne();
    function getHeaderColdWorkAppTwo();
    function getHeaderColdWorkAppThree();
    function getHeaderColdWorkAppFour();
    function getTotalPermits();
    function getSignature($img);
    function findDataDirectSPV($id);
    // Approval 1
    function findDataApproveSC($id);
    function findDataApprovePC($id);
    function findDataApproveProc($id);
    // Approval 2
    function findDataIssueAA($id);
    function findDataAcceptancePA($id);
    // Approval 3
    function findDataClosedOutPA($id);
    function findDataClosedOutAA($id);
    // Approval 4
    function findDataRegisWorkPA($id);
    function findDataToolsEquipment($data_tools_equipment);
    function findDataTrades($data_trades);
    function storeHeader(HeaderColdWorkRequest $request);
    function storeShowHeader(HeaderColdWorkRequest $request);
    function approvalRequest(ApprovalRequest $request);
    function rejectRequest(RejectRequest $request);
    function signedRequest(SignedRequest $request);
    // function rejectRequest(Request $request);
    function printPermitToWork($id);
    // function deletePermitToWork($id);
    function detailPrintPermitToWork();
}
