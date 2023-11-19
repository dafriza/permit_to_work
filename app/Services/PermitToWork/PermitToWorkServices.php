<?php
namespace App\Services\PermitToWork;

use App\Models\ToolsEquipment;
use App\Models\User;
use Illuminate\Http\Request;

class PermitToWorkServices implements PermitToWorkInterface
{
    function getDirectSPV(Request $request)
    {
        $param = $request->q;
        $get_spv = User::where('first_name', 'like', "%$param%")
            ->orWhere('last_name', 'like', "%$param%")
            ->get()
            ->filter(function ($user) {
                return $user->roles->where('name', 'supervisor')->toArray();
            });
        return response()->json($get_spv);
    }

    function getToolsEquipment(Request $request)
    {
        $param = $request->q;
        $get_equipment_tools = ToolsEquipment::where('name', 'like', "%$param%")->get();
        return response()->json($get_equipment_tools);
    }
}
