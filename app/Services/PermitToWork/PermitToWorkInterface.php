<?php
namespace App\Services\PermitToWork;

use Illuminate\Http\Request;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequest;

interface PermitToWorkInterface
{
    function getDirectSPV(Request $request);
    function getToolsEquipment(Request $request);
    function getTrades(Request $request);
    function storeHeader(HeaderColdWorkRequest $request);
}
