<?php

namespace App\Services\PermitToWork;

use App\Http\Requests\PermitToWork\HeaderColdWorkRequestAppOne;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestAppThree;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestAppTwo;
use App\Models\User;
use App\Models\Trade;
use Illuminate\Http\File;
use App\Models\PermitToWork;
use Illuminate\Http\Request;
use App\Models\ToolsEquipment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequest;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestCrc;

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

    function getApproveSC(Request $request)
    {
        $param = $request->q;
        $get_approve_sc = User::where('first_name', 'like', "%$param%")
            ->orWhere('last_name', 'like', "%$param%")
            ->get()
            ->filter(function ($user) {
                return $user->roles->where('name', 'supervisor');
            })
            ->map(function ($sc) {
                return [
                    'id' => $sc->id,
                    'text' => $sc->first_name . ' ' . $sc->last_name,
                ];
            });
        return response()->json(['results' => $get_approve_sc]);
    }
    function getApprovePC(Request $request)
    {
        $param = $request->q;
        $get_approve_pc = User::where('first_name', 'like', "%$param%")
            ->orWhere('last_name', 'like', "%$param%")
            ->get()
            ->filter(function ($user) {
                return $user->roles->where('name', 'supervisor');
            })
            ->map(function ($pc) {
                return [
                    'id' => $pc->id,
                    'text' => $pc->first_name . ' ' . $pc->last_name,
                ];
            });
        return response()->json(['results' => $get_approve_pc]);
    }
    function getApproveProc(Request $request)
    {
        $param = $request->q;
        $get_approve_proc = User::where('first_name', 'like', "%$param%")
            ->orWhere('last_name', 'like', "%$param%")
            ->get()
            ->filter(function ($user) {
                return $user->roles->where('name', 'supervisor');
            })
            ->map(function ($proc) {
                return [
                    'id' => $proc->id,
                    'text' => $proc->first_name . ' ' . $proc->last_name,
                ];
            });
        return response()->json(['results' => $get_approve_proc]);
    }

    // approval 2
    function getIssueAA(Request $request)
    {
        $param = $request->q;
        $get_issue_aa = User::where('first_name', 'like', "%$param%")
            ->orWhere('last_name', 'like', "%$param%")
            ->get()
            ->filter(function ($user) {
                return $user->roles->where('name', 'supervisor');
            })
            ->map(function ($proc) {
                return [
                    'id' => $proc->id,
                    'text' => $proc->first_name . ' ' . $proc->last_name,
                ];
            });
        return response()->json(['results' => $get_issue_aa]);
    }

    function getAcceptancePA(Request $request)
    {
        $param = $request->q;
        $get_acceptance_pa = User::where('first_name', 'like', "%$param%")
            ->orWhere('last_name', 'like', "%$param%")
            ->get()
            ->filter(function ($user) {
                return $user->roles->where('name', 'supervisor');
            })
            ->map(function ($proc) {
                return [
                    'id' => $proc->id,
                    'text' => $proc->first_name . ' ' . $proc->last_name,
                ];
            });
        return response()->json(['results' => $get_acceptance_pa]);
    }

    // Approval 3
    function getClosedOutPA(Request $request)
    {
        $param = $request->q;
        $get_closed_out_pa = User::where('first_name', 'like', "%$param%")
            ->orWhere('last_name', 'like', "%$param%")
            ->get()
            ->filter(function ($user) {
                return $user->roles->where('name', 'supervisor');
            })
            ->map(function ($proc) {
                return [
                    'id' => $proc->id,
                    'text' => $proc->first_name . ' ' . $proc->last_name,
                ];
            });
        return response()->json(['results' => $get_closed_out_pa]);
    }
    function getClosedOutAA(Request $request)
    {
        $param = $request->q;
        $get_closed_out_aa = User::where('first_name', 'like', "%$param%")
            ->orWhere('last_name', 'like', "%$param%")
            ->get()
            ->filter(function ($user) {
                return $user->roles->where('name', 'supervisor');
            })
            ->map(function ($proc) {
                return [
                    'id' => $proc->id,
                    'text' => $proc->first_name . ' ' . $proc->last_name,
                ];
            });
        return response()->json(['results' => $get_closed_out_aa]);
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
        return json_decode(Storage::disk('permit_to_work')->get('task_desc' . '-' . '1' . '-' . 'John Doe' .  '.json'));
    }
    function getHeaderColdWorkCrc()
    {
        return json_decode(Storage::disk('permit_to_work')->get('crc' . '-' . '1' . '-' . 'John Doe' .  '.json'));
    }

    function getHeaderColdWorkAppOne()
    {
        return json_decode(Storage::disk('permit_to_work')->get('AppOne' . '-' . '1' . '-' . 'John Doe' .  '.json'));
    }

    function getHeaderColdWorkAppTwo()
    {
        return json_decode(Storage::disk('permit_to_work')->get('AppTwo' . '-' . '1' . '-' . 'John Doe' .  '.json'));
    }

    function getHeaderColdWorkAppThree()
    {
        return json_decode(Storage::disk('permit_to_work')->get('AppThree' . '-' . '1' . '-' . 'John Doe' .  '.json'));
    }


    function getTotalPermits()
    {
        return PermitToWork::get()->count() + 1;
    }

    function getSignature($img) {
        return base64_encode(Storage::disk('signature')->get($img));
    }

    function findDataDirectSPV($id)
    {
        $direct_spv = User::where('id', $id)->first();
        return $direct_spv;
    }
    
    function findDataApproveSC($id)
    {
        $approver_name_sc = User::where('id', $id)->first();
        return $approver_name_sc;
    }

    function findDataApprovePC($id)
    {
        $approver_name_pc = User::where('id', $id)->first();
        return $approver_name_pc;
    }

    function findDataApproveProc($id)
    {
        $approver_name_procedures = User::where('id', $id)->first();
        return $approver_name_procedures;
    }

    function findDataIssueAA($id)
    {
        $issue_aa = User::where('id', $id)->first();
        return $issue_aa;
    }
    function findDataAcceptancePA($id)
    {
        $acceptance_pa = User::where('id', $id)->first();
        return $acceptance_pa;
    }
    // Approval 3
    function findDataClosedOutPA($id)
    {
        $closed_out_pa = User::where('id', $id)->first();
        return $closed_out_pa;
    }
    function findDataCloseOutAA($id)
    {
        $closed_out_aa = User::where('id', $id)->first();
        return $closed_out_aa;
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
        $validatedData = $request->validated();
        if (!is_array($validatedData)) {
            // Return error response if validation data is not an array
            return response()->json(['error' => 'Invalid data format'], 400);
        }
        // return $request->fails();
        // $file_name = $request->validated()['date_application'] . '-' . Auth::id() ?? '1' . '-' . Auth::name() ?? 'John Doe' . '.json';
        // dd($request->validated());
        $task_desc = 'task_desc';
        $file_name = $task_desc .'-'. '1' . '-' . 'John Doe' . '.json';

        Storage::disk('permit_to_work')->put($file_name, json_encode($validatedData));
        return response()->json($validatedData, 202);

        // return $request->fails();
        // $file_name = $request->validated()['date_application'] . '-' . Auth::id() ?? '1' . '-' . Auth::name() ?? 'John Doe' . '.json';
        
        // $file_name = $request->validated()['date_application'] . '-' . '1' . '-' . 'John Doe' . '.json';
        // Storage::disk('permit_to_work')->put($file_name, json_encode($request->validated()));
        // return response()->json($request->validated(), 202);
    }

    function storeHeaderCrc(HeaderColdWorkRequestCrc $request)
    {
        $validatedData = $request->validated();
        if (!is_array($validatedData)) {
            // Return error response if validation data is not an array
            return response()->json(['error' => 'Invalid data format'], 400);
        }
        // return $request->fails();
        // $file_name = $request->validated()['date_application'] . '-' . Auth::id() ?? '1' . '-' . Auth::name() ?? 'John Doe' . '.json';
        // dd($request->validated());
        $crc = 'crc';
        $file_name = $crc .'-'. '1' . '-' . 'John Doe' . '.json';

        Storage::disk('permit_to_work')->put($file_name, json_encode($validatedData));
        return response()->json($validatedData, 202);
    }

    function storeHeaderAppOne(HeaderColdWorkRequestAppOne $request)
    {
        $validatedData = $request->validated();
        if (!is_array($validatedData)) {
            // Return error response if validation data is not an array
            return response()->json(['error' => 'Invalid data format'], 400);
        }
        // return $request->fails();
        // $file_name = $request->validated()['date_application'] . '-' . Auth::id() ?? '1' . '-' . Auth::name() ?? 'John Doe' . '.json';
        // dd($request->validated());
        $appOne = 'AppOne';
        $file_name = $appOne .'-'. '1' . '-' . 'John Doe' . '.json';

        Storage::disk('permit_to_work')->put($file_name, json_encode($validatedData));
        return response()->json($validatedData, 202);
    }

    function storeHeaderAppTwo(HeaderColdWorkRequestAppTwo $request)
    {
        $validatedData = $request->validated();
        if (!is_array($validatedData)) {
            // Return error response if validation data is not an array
            return response()->json(['error' => 'Invalid data format'], 400);
        }
        // return $request->fails();
        // $file_name = $request->validated()['date_application'] . '-' . Auth::id() ?? '1' . '-' . Auth::name() ?? 'John Doe' . '.json';
        // dd($request->validated());
        $appTwo = 'AppTwo';
        $file_name = $appTwo .'-'. '1' . '-' . 'John Doe' . '.json';

        Storage::disk('permit_to_work')->put($file_name, json_encode($validatedData));
        return response()->json($validatedData, 202);
    }

    function storeHeaderAppThree(HeaderColdWorkRequestAppThree $request)
    {
        $validatedData = $request->validated();
        if (!is_array($validatedData)) {
            // Return error response if validation data is not an array
            return response()->json(['error' => 'Invalid data format'], 400);
        }
        // return $request->fails();
        // $file_name = $request->validated()['date_application'] . '-' . Auth::id() ?? '1' . '-' . Auth::name() ?? 'John Doe' . '.json';
        // dd($request->validated());
        $AppThree = 'AppThree';
        $file_name = $AppThree .'-'. '1' . '-' . 'John Doe' . '.json';

        Storage::disk('permit_to_work')->put($file_name, json_encode($validatedData));
        return response()->json($validatedData, 202);
    }
}
