<?php

namespace App\Services\PermitToWork;

use App\Models\User;
use App\Models\Trade;
use Illuminate\Http\File;
use App\Models\PermitToWork;
use Illuminate\Http\Request;
use App\Models\ToolsEquipment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequest;
use DataTables;

class PermitToWorkServices implements PermitToWorkInterface
{
    function getDirectSPV(Request $request)
    {
        $param = $request->q;
        $get_spv = User::where('first_name', 'like', "%$param%")
            ->orWhere('last_name', 'like', "%$param%")
            ->get()
            ->filter(function ($user) {
                return $user->roles->where('name', 'supervisor');
            })
            ->map(function ($spv) {
                return [
                    'id' => $spv->id,
                    'text' => $spv->first_name . ' ' . $spv->last_name,
                ];
            });
        return response()->json(['results' => $get_spv]);
    }
    function getToolsEquipment(Request $request)
    {
        $param = $request->q;
        $get_equipment_tools = ToolsEquipment::where('name', 'like', "%$param%")->get();
        $get_equipment_tools_map = collect($get_equipment_tools)->map(function ($tool_equipment) {
            return [
                'id' => $tool_equipment->id,
                'text' => $tool_equipment->name,
            ];
        });
        return response()->json(['results' => $get_equipment_tools_map]);
    }
    function getTrades(Request $request)
    {
        $param = $request->q;
        $get_trades = Trade::where('name', 'like', "%$param%")->get();
        $get_trades_map = collect($get_trades)->map(function ($trade) {
            return [
                'id' => $trade->id,
                'text' => $trade->name,
            ];
        });
        return response()->json(['results' => $get_trades_map]);
    }
    function getHeaderColdWork()
    {
        return json_decode(Storage::disk('permit_to_work')->get(date_format(now(), 'Y-m-d') . '-' . '1' . '-' . 'John Doe' . '.json'));
    }
    function getTotalPermits()
    {
        return PermitToWork::get()->count() + 1;
    }
    function getSignature($img)
    {
        return base64_encode(Storage::disk('signature')->get($img));
    }
    function findDataDirectSPV($id)
    {
        $direct_spv = User::where('id', $id)->first();
        return $direct_spv;
    }
    function findDataToolsEquipment($data_tools_equipment)
    {
        $data_tools_equipment = explode(',', $data_tools_equipment);
        $tools_equipment = ToolsEquipment::all()->whereIn('id', $data_tools_equipment);
        return $tools_equipment;
    }
    function findDataTrades($data_trades)
    {
        $data_trades = explode(',', $data_trades);
        $trades = Trade::all()->whereIn('id', $data_trades);
        return $trades;
    }
    function storeHeader(HeaderColdWorkRequest $request)
    {
        // return $request->fails();
        // $file_name = $request->validated()['date_application'] . '-' . Auth::id() ?? '1' . '-' . Auth::name() ?? 'John Doe' . '.json';
        $file_name = $request->validated()['date_application'] . '-' . '1' . '-' . 'John Doe' . '.json';
        Storage::disk('permit_to_work')->put($file_name, json_encode($request->validated()));
        return response()->json($request->validated(), 202);
    }
    function getDatatable()
    {
        $user = User::where('id', 2)->with('request_pa')->first();
        $user_map = collect($user->request_pa)->map(function ($user_ptw) use ($user) {
            $user_ptw->name = $user->full_name;
            return $user_ptw;
        });
        // return $user;
        // return $user_map;
        return DataTables::collection(collect($user_map))
            ->addColumn('edit', 'content.permit_to_work.ptw_management.__edit_table')
            ->editColumn('status',function($value){
                return view('content.permit_to_work.ptw_management.__status_table',compact('value'));
            })
            ->rawColumns(['edit','status'])
            ->addIndexColumn()
            ->toJson();
    }
}
