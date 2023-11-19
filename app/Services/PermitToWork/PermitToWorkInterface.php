<?php
namespace App\Services\PermitToWork;

use Illuminate\Http\Request;

interface PermitToWorkInterface
{
    function getDirectSPV(Request $request);
    function getToolsEquipment(Request $request);
}
