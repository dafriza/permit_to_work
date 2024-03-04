<?php

namespace App\Services\PermitToWork;

use DataTables;
use App\Models\User;
use App\Models\Trade;
use Illuminate\Http\File;
use App\Models\PermitToWork;
use Illuminate\Http\Request;
use App\Models\ToolsEquipment;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Events\PermitToWorkEvent;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Events\SendApproverAssignment;
use App\Events\SendApproverPTWRequest;
use Illuminate\Support\Facades\Storage;
use App\Events\SendEmployeePTWDoneEvent;
use App\Helper\RolesAndPermissionsHelper;
use App\Events\SendApproverFirstAssignment;
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

class PermitToWorkServices implements PermitToWorkInterface
{
    private $roleHelper = null;
    private const assignment = PermitToWork::assignment;
    function roleHelper()
    {
        $roleHelperCurrent = new RolesAndPermissionsHelper();
        if ($this->roleHelper == null) {
            $this->roleHelper = $roleHelperCurrent;
        }
        return $this->roleHelper;
    }
    function getDirectSPV(Request $request)
    {
        return $this->getApproverSelect2($request, function ($user, $roleHelper) {
            return $user->getRoleNames()[0] == $roleHelper::roles[2] && $user->id != Auth::id();
        });
    }
    function getApproveSC(Request $request)
    {
        return $this->getApproverSelect2($request, function ($user, $roleHelper) {
            return $user->getRoleNames()[0] == $roleHelper::roles[2] && $user->role_assignment == 'authorisation' && $user->id != Auth::id();
        });
    }
    function getApprovePC(Request $request)
    {
        return $this->getApproverSelect2($request, function ($user, $roleHelper) {
            return $user->getRoleNames()[0] == $roleHelper::roles[2] && $user->role_assignment == 'permit_registry' && $user->id != Auth::id();
        });
    }
    function getApproveProc(Request $request)
    {
        return $this->getApproverSelect2($request, function ($user, $roleHelper) {
            return $user->getRoleNames()[0] == $roleHelper::roles[2] && $user->role_assignment == 'site_gas_test' && $user->id != Auth::id();
        });
    }

    // approval 2
    function getIssueAA(Request $request)
    {
        return $this->getApproverSelect2($request, function ($user, $roleHelper) {
            return $user->getRoleNames()[0] == $roleHelper::roles[2] && $user->role_assignment == 'issue' && $user->id != Auth::id();
        });
    }

    function getAcceptancePA(Request $request)
    {
        return $this->getApproverSelect2($request, function ($user, $roleHelper) {
            return $user->getRoleNames()[0] == $roleHelper::roles[2] && $user->role_assignment == 'acceptance' && $user->id != Auth::id();
        });
    }

    // Approval 3
    function getClosedOutPA(Request $request)
    {
        return $this->getApproverSelect2($request, function ($user, $roleHelper) {
            return $user->getRoleNames()[0] == $roleHelper::roles[2] && $user->role_assignment == 'close_out_pa' && $user->id != Auth::id();
        });
    }
    function getClosedOutAA(Request $request)
    {
        return $this->getApproverSelect2($request, function ($user, $roleHelper) {
            return $user->getRoleNames()[0] == $roleHelper::roles[2] && $user->role_assignment == 'close_out_aa' && $user->id != Auth::id();
        });
    }
    // Approval 4
    function getRegisWorkPA(Request $request)
    {
        return $this->getApproverSelect2($request, function ($user, $roleHelper) {
            return $user->getRoleNames()[0] == $roleHelper::roles[2] && $user->role_assignment == 'registry_of_work_completion' && $user->id != Auth::id();
        });
    }
    function getApproverSelect2(Request $request, $filter)
    {
        $param = $request->q;
        $roleHelper = $this->roleHelper();
        $get_apv = User::where('first_name', 'like', "%$param%")
            ->orWhere('last_name', 'like', "%$param%")
            ->get()
            ->filter(function ($user) use ($roleHelper, $filter) {
                return $filter($user, $roleHelper);
            })
            ->map(function ($apv) {
                return [
                    'id' => $apv->id,
                    'text' => $apv->first_name . ' ' . $apv->last_name,
                ];
            });
        // dd($get_apv);
        return response()->json(['results' => $get_apv->values()]);
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
    function getHeaderColdWork($id)
    {
        // return json_decode(Storage::disk('permit_to_work')->get('task_desc' . '-' . '1' . '-' . 'John Doe' . '.json') ?? null);
        $getPTWById = PermitToWork::find($id);
        return $getPTWById;
    }
    function getHeaderColdWorkCrc()
    {
        return json_decode(Storage::disk('permit_to_work')->get('crc' . '-' . '1' . '-' . 'John Doe' . '.json'));
    }

    function getHeaderColdWorkAppOne()
    {
        return json_decode(Storage::disk('permit_to_work')->get('AppOne' . '-' . '1' . '-' . 'John Doe' . '.json'));
    }

    function getHeaderColdWorkAppTwo()
    {
        return json_decode(Storage::disk('permit_to_work')->get('AppTwo' . '-' . '1' . '-' . 'John Doe' . '.json'));
    }

    function getHeaderColdWorkAppThree()
    {
        return json_decode(Storage::disk('permit_to_work')->get('AppThree' . '-' . '1' . '-' . 'John Doe' . '.json'));
    }
    function getHeaderColdWorkAppFour()
    {
        return json_decode(Storage::disk('permit_to_work')->get('AppFour' . '-' . '1' . '-' . 'John Doe' . '.json'));
    }
    function getTotalPermits()
    {
        return PermitToWork::get()->count() + 1;
    }
    function getSignature($img)
    {
        return base64_encode(Storage::disk('signature_employee')->get($img));
    }
    function findDataDirectSPV($id)
    {
        $direct_spv = User::where('id', $id)->first();
        return $direct_spv;
    }
    function findDataApproveSC($id)
    {
        $approver_authorisation = User::where('id', $id)->first();
        return $approver_authorisation;
    }
    function findDataApprovePC($id)
    {
        $approver_permit_registry = User::where('id', $id)->first();
        return $approver_permit_registry;
    }
    function findDataApproveProc($id)
    {
        $approver_procedures = User::where('id', $id)->first();
        return $approver_procedures;
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
    function findDataClosedOutAA($id)
    {
        $closed_out_aa = User::where('id', $id)->first();
        return $closed_out_aa;
    }
    function findDataRegisWorkPA($id)
    {
        $regis_work_pa = User::where('id', $id)->first();
        return $regis_work_pa;
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
        $validatedData['status'] = 4;
        PermitToWork::create($validatedData);
        return response()->json($validatedData, 202);
    }
    function storeShowHeader(HeaderColdWorkRequest $request)
    {
        return $this->storeOrUpdatePermitToWork($request);
    }
    function storeHeaderCrc(HeaderColdWorkRequestCrc $request)
    {
        return $this->storeOrUpdatePermitToWork($request);
    }
    function storeHeaderTRA(HeaderColdWorkRequestTRA $request)
    {
        return $this->storeOrUpdatePermitToWork($request);
    }
    function storeHeaderAppOne(HeaderColdWorkRequestAppOne $request)
    {
        $validatedData = $request->validated();
        $prepareForStore = null;
        return $this->storeOrUpdatePermitToWork($request, function ($validatedData) {
            $prepareForStore = [
                'authorisation' => [
                    'designation' => $validatedData['designation'],
                    'approver' => $validatedData['approver_authorisation'],
                    ...$this->prepareForStoreArray(),
                ],
                'permit_registry' => [
                    'designation' => $validatedData['designation'],
                    'approver' => $validatedData['approver_permit_registry'],
                    ...$this->prepareForStoreArray(),
                ],
                'site_gas_test' => [
                    'flammable' => $validatedData['flammable'],
                    'h2s' => $validatedData['h2s'],
                    'oxygen' => $validatedData['oxygen'],
                    'designation' => $validatedData['designation'],
                    'approver' => $validatedData['approver_site_gas_test'],
                    ...$this->prepareForStoreArray(),
                ],
            ];
            PermitToWork::updateOrCreate(['id' => $validatedData['id']], $prepareForStore);
            return response()->json([], 202);
        });
    }
    function storeHeaderAppTwo(HeaderColdWorkRequestAppTwo $request)
    {
        $validatedData = $request->validated();
        $prepareForStore = null;
        return $this->storeOrUpdatePermitToWork($request, function ($validatedData) {
            $prepareForStore = [
                'issue' => [
                    'approver' => $validatedData['issue'],
                    ...$this->prepareForStoreArray(),
                ],
                'acceptance' => [
                    'approver' => $validatedData['acceptance'],
                    ...$this->prepareForStoreArray(),
                ],
            ];
            PermitToWork::updateOrCreate(['id' => $validatedData['id']], $prepareForStore);
            return response()->json([], 202);
        });
    }
    function storeHeaderAppThree(HeaderColdWorkRequestAppThree $request)
    {
        $validatedData = $request->validated();
        $prepareForStore = null;
        return $this->storeOrUpdatePermitToWork($request, function ($validatedData) {
            $prepareForStore = [
                'close_out_pa' => [
                    'status_work' => $validatedData['work_status_pa'],
                    'description' => $validatedData['work_description_pa'],
                    'approver' => $validatedData['closed_out_pa'],
                    ...$this->prepareForStoreArray(),
                ],
                'close_out_aa' => [
                    'status_work' => $validatedData['work_status_aa'],
                    'approver' => $validatedData['closed_out_aa'],
                    ...$this->prepareForStoreArray(),
                ],
            ];
            PermitToWork::updateOrCreate(['id' => $validatedData['id']], $prepareForStore);
            return response()->json([], 202);
        });
    }
    function storeHeaderAppFour(HeaderColdWorkRequestAppFour $request)
    {
        $validatedData = $request->validated();
        $prepareForStore = null;
        return $this->storeOrUpdatePermitToWork($request, function ($validatedData) {
            $prepareForStore = [
                'registry_of_work_completion' => [
                    'approver' => $validatedData['regis_work_pa'],
                    ...$this->prepareForStoreArray(),
                ],
            ];
            PermitToWork::updateOrCreate(['id' => $validatedData['id']], $prepareForStore);
            return response()->json([], 202);
        });
    }
    function storePTWRequest(HeaderColdWorkRequestPTW $request)
    {
        $validatedData = $request->validated();
        $validatedData['status'] = 1;
        PermitToWork::updateOrCreate(['id' => $validatedData['id']], $validatedData);
        $detail = PermitToWork::find($validatedData['id']);
        $receiver = $detail->direct_spv_relation;
        event(new SendApproverPTWRequest($receiver, Auth::user(), $detail));
        return response()->json([], 202);
    }
    function prepareForStoreArray()
    {
        return [
            'signed' => null,
            'date' => now(),
            'status' => 'draft',
            'comment' => 'draft',
        ];
    }
    function storeOrUpdatePermitToWork(Request $request, $prepareForStoreFunction = null)
    {
        $validatedData = $request->validated();
        $validatedData['status'] = 4;
        if ($prepareForStoreFunction != null) {
            return $prepareForStoreFunction($validatedData);
        }
        PermitToWork::updateOrCreate(['id' => $validatedData['id']], $validatedData);
        return response()->json([], 202);
    }
    function approvalRequest(ApprovalRequest $request)
    {
        $validated = $request->validated();
        $id = $validated['id'];
        $ptwRequest = PermitToWork::find($id);
        // $receiver = $ptwRequest->request_pa_relation;
        $user = $this->getAssignment();
        $nextAssignment = array_keys(self::assignment)[self::assignment[$user] + 1 > 7 ? 7 : self::assignment[$user] + 1];
        $receiver = User::find($ptwRequest->{$nextAssignment}->approver);
        $assignment = $ptwRequest->{$this->getAssignment()};
        $assignment->status = $validated['status'];
        $assignment->comment = $validated['comment'];
        $assignment->signed = $validated['signature'];
        // dd($assignment);
        $ptwRequest->update([$this->getAssignment() => $assignment]);
        if ($this->getAssignment() == 'registry_of_work_completion') {
            $ptwRequest->update(['status' => 2]);
            event(new SendEmployeePTWDoneEvent($ptwRequest->request_pa_relation, Auth::user(), $ptwRequest));
            return response()->json('Success', 202);
            // return response()->json(Auth::user(), 202);
        } else {
            event(new SendApproverAssignment($receiver, Auth::user(), $ptwRequest));
            return response()->json('Success', 202);
        }
    }
    function rejectRequest(RejectRequest $request)
    {
        $validated = $request->validated();
        $id = $validated['id'];
        $ptwRequest = PermitToWork::find($id);
        $assignment = $ptwRequest->{$this->getAssignment()};
        $assignment->status = $validated['status'];
        $assignment->comment = $validated['comment'];
        $assignment->signed = $validated['signature'];
        $ptwRequest->update([$this->getAssignment() => $assignment]);
        $ptwRequest->update(['status' => 2]);
        event(new SendEmployeePTWDoneEvent($ptwRequest->request_pa_relation, Auth::user(), $ptwRequest));
        return response()->json('Success', 202);
    }
    function signedRequest(SignedRequest $request)
    {
        $validated = $request->validated();
        $id = $validated['id'];
        $ptwRequest = PermitToWork::find($id);
        $receiver = User::find($ptwRequest->authorisation->approver);
        // dd($assignment);
        $ptwRequest->update($validated);
        event(new SendApproverFirstAssignment($receiver, Auth::user(), $ptwRequest));
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
    function printPermitToWork($id)
    {
        $customPaper = [0, 0, 1567.0, 1283.8];
        $ptw = PermitToWork::find($id);
        // $pdf = Pdf::loadView('content.permit_to_work.ptw_print.original_worksite_print')->setPaper($customPaper, 'landscape');
        $pdf = Pdf::loadView('content.permit_to_work.ptw_print.original_worksite_print', compact('ptw'));
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
