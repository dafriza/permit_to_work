<?php

namespace App\Http\Controllers;

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

    function getToolsEquipment(Request $request)
    {
        return $this->permit_to_work->getToolsEquipment($request);
    }

    function getTrades(Request $request)
    {
        return $this->permit_to_work->getTrades($request);
    }

    function storeHeader(HeaderColdWorkRequest $request)
    {
        return $this->permit_to_work->storeHeader($request);
    }
}
