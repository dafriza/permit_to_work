<?php

namespace App\Services\PermitToWork;

use App\Events\PermitToWorkEvent;
use DataTables;
use App\Models\User;
use App\Models\Trade;
use Illuminate\Http\File;
use App\Models\PermitToWork;
use Illuminate\Http\Request;
use App\Models\ToolsEquipment;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
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
    function getHeaderColdWorkCrc()
    {
        return json_decode(Storage::disk('permit_to_work')->get('crc' . '-' . '1' . '-' . 'John Doe' .  '.json'));
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

    function storeHeaderCrc(HeaderColdWorkRequestCrc $request)
    {
        // return $request->fails();
        // $file_name = $request->validated()['date_application'] . '-' . Auth::id() ?? '1' . '-' . Auth::name() ?? 'John Doe' . '.json';
        // dd($request->validated());
        // $file_name = $request->validated() . 'crc' .'-'. '1' . '-' . 'John Doe' . '.json';
        // Storage::disk('permit_to_work')->put($file_name, json_encode($request->validated()));
        return response()->json($request->all(), 202);
    function approveRequest(Request $request)
    {
        $id = $request->id;
        $ptwRequest = PermitToWork::find($id);
        $receiver = $ptwRequest->request_pa_relation;
        $assignment = $ptwRequest->{$this->getAssignment()};
        $assignment->status = 'success';
        $ptwRequest->update([$this->getAssignment() => $assignment]);
        event(new PermitToWorkEvent($receiver, Auth::user(), $ptwRequest));
        return response()->json('Success', 202);
    }
    function rejectRequest(Request $request)
    {
        $id = $request->id;
        $ptwRequest = PermitToWork::find($id);
        $assignment = $ptwRequest->{$this->getAssignment()};
        $assignment->status = 'failure';
        $ptwRequest->update([$this->getAssignment() => $assignment]);
        return response()->json('Success', 202);
    }
    function deletePermitToWork($id)
    {
        // $delete = PermitToWork::find($id)->delete();
        $delete = PermitToWork::find($id)->update([
            'status' => fake()->randomElement([1, 2, 3, 4]),
        ]);
        return response()->json('Success', 200);
    }
    function printPermitToWork()
    {
        $customPaper = [0, 0, 1567.0, 1283.8];
        // $pdf = Pdf::loadView('content.permit_to_work.ptw_print.original_worksite_print')->setPaper($customPaper, 'landscape');
        $pdf = Pdf::loadView('content.permit_to_work.ptw_print.original_worksite_print');
        // $pdf = Pdf::loadView('content.permit_to_work.ptw_print.original_worksite');
        return $pdf->stream();
        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML('<h1>Test</h1>');
        // return $pdf->download();
    }
    function detailPrintPermitToWork()
    {
        // $pdf = Pdf::loadView('content.permit_to_work.ptw_print.original_worksite_print')->setPaper($customPaper, 'landscape');
        $pdf = Pdf::loadView('content.permit_to_work.ptw_print.detail_original_worksite_print');
        // $pdf = Pdf::loadView('content.permit_to_work.ptw_print.original_worksite');
        return $pdf->stream();
        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML('<h1>Test</h1>');
        // return $pdf->download();
    }
    function getAssignment()
    {
        return Auth::user()->role_assignment;
    }
}
