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
use Illuminate\Support\Facades\Storage;
use App\Helper\RolesAndPermissionsHelper;
use App\Http\Requests\PermitToWork\ApprovalRequest;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequest;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestCrc;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestAppOne;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestAppTwo;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestAppFour;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestAppThree;
use App\Http\Requests\PermitToWork\HeaderColdWorkRequestTRA;

class PermitToWorkServices implements PermitToWorkInterface
{
    private $roleHelper = null;
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
        // $param = $request->q;
        // $roleHelper = $this->roleHelper();
        // $get_spv = User::where('first_name', 'like', "%$param%")
        //     ->orWhere('last_name', 'like', "%$param%")
        //     ->get()
        //     ->filter(function ($user) use ($roleHelper) {
        //         // return $user->roles->where('name', $roleHelper::roles[2]);
        //         return $user->getRoleNames()[0] == $roleHelper::roles[2];
        //     })
        //     ->map(function ($spv) {
        //         return [
        //             'id' => $spv->id,
        //             'text' => $spv->first_name . ' ' . $spv->last_name,
        //         ];
        //     });
        // // dd($get_spv);
        // return response()->json(['results' => $get_spv->values()]);
        return $this->getApproverSelect2($request, function ($user, $roleHelper) {
            return $user->getRoleNames()[0] == $roleHelper::roles[2];
        });
    }
    function getApproveSC(Request $request)
    {
        return $this->getApproverSelect2($request, function ($user, $roleHelper) {
            return $user->getRoleNames()[0] == $roleHelper::roles[2] && $user->role_assignment == 'authorisation';
        });
    }
    function getApprovePC(Request $request)
    {
        // $param = $request->q;
        // $roleHelper = $this->roleHelper();
        // $get_approve_pc = User::where('first_name', 'like', "%$param%")
        //     ->orWhere('last_name', 'like', "%$param%")
        //     ->get()
        //     ->filter(function ($user) use ($roleHelper) {
        //         return $user->getRoleNames()[0] == $roleHelper::roles[2] && $user->role_assignment == 'permit_registry';
        //     })
        //     ->map(function ($pc) {
        //         return [
        //             'id' => $pc->id,
        //             'text' => $pc->first_name . ' ' . $pc->last_name,
        //         ];
        //     });
        // return response()->json(['results' => $get_approve_pc]);
        return $this->getApproverSelect2($request, function ($user, $roleHelper) {
            return $user->getRoleNames()[0] == $roleHelper::roles[2] && $user->role_assignment == 'permit_registry';
        });
    }
    function getApproveProc(Request $request)
    {
        // $param = $request->q;
        // $get_approve_proc = User::where('first_name', 'like', "%$param%")
        //     ->orWhere('last_name', 'like', "%$param%")
        //     ->get()
        //     ->filter(function ($user) {
        //         return $user->roles->where('name', 'supervisor');
        //     })
        //     ->map(function ($proc) {
        //         return [
        //             'id' => $proc->id,
        //             'text' => $proc->first_name . ' ' . $proc->last_name,
        //         ];
        //     });
        // return response()->json(['results' => $get_approve_proc]);
        return $this->getApproverSelect2($request, function ($user, $roleHelper) {
            return $user->getRoleNames()[0] == $roleHelper::roles[2] && $user->role_assignment == 'site_gas_test';
        });
    }

    // approval 2
    function getIssueAA(Request $request)
    {
        // $param = $request->q;
        // $get_issue_aa = User::where('first_name', 'like', "%$param%")
        //     ->orWhere('last_name', 'like', "%$param%")
        //     ->get()
        //     ->filter(function ($user) {
        //         return $user->roles->where('name', 'supervisor');
        //     })
        //     ->map(function ($proc) {
        //         return [
        //             'id' => $proc->id,
        //             'text' => $proc->first_name . ' ' . $proc->last_name,
        //         ];
        //     });
        // return response()->json(['results' => $get_issue_aa]);
        return $this->getApproverSelect2($request, function ($user, $roleHelper) {
            return $user->getRoleNames()[0] == $roleHelper::roles[2] && $user->role_assignment == 'issue';
        });
    }

    function getAcceptancePA(Request $request)
    {
        // $param = $request->q;
        // $get_acceptance_pa = User::where('first_name', 'like', "%$param%")
        //     ->orWhere('last_name', 'like', "%$param%")
        //     ->get()
        //     ->filter(function ($user) {
        //         return $user->roles->where('name', 'supervisor');
        //     })
        //     ->map(function ($proc) {
        //         return [
        //             'id' => $proc->id,
        //             'text' => $proc->first_name . ' ' . $proc->last_name,
        //         ];
        //     });
        // return response()->json(['results' => $get_acceptance_pa]);
        return $this->getApproverSelect2($request, function ($user, $roleHelper) {
            return $user->getRoleNames()[0] == $roleHelper::roles[2] && $user->role_assignment == 'acceptance';
        });
    }

    // Approval 3
    function getClosedOutPA(Request $request)
    {
        // $param = $request->q;
        // $get_closed_out_pa = User::where('first_name', 'like', "%$param%")
        //     ->orWhere('last_name', 'like', "%$param%")
        //     ->get()
        //     ->filter(function ($user) {
        //         return $user->roles->where('name', 'supervisor');
        //     })
        //     ->map(function ($proc) {
        //         return [
        //             'id' => $proc->id,
        //             'text' => $proc->first_name . ' ' . $proc->last_name,
        //         ];
        //     });
        // return response()->json(['results' => $get_closed_out_pa]);
        return $this->getApproverSelect2($request, function ($user, $roleHelper) {
            return $user->getRoleNames()[0] == $roleHelper::roles[2] && $user->role_assignment == 'close_out_pa';
        });
    }
    function getClosedOutAA(Request $request)
    {
        // $param = $request->q;
        // $get_closed_out_aa = User::where('first_name', 'like', "%$param%")
        //     ->orWhere('last_name', 'like', "%$param%")
        //     ->get()
        //     ->filter(function ($user) {
        //         return $user->roles->where('name', 'supervisor');
        //     })
        //     ->map(function ($proc) {
        //         return [
        //             'id' => $proc->id,
        //             'text' => $proc->first_name . ' ' . $proc->last_name,
        //         ];
        //     });
        // return response()->json(['results' => $get_closed_out_aa]);
        return $this->getApproverSelect2($request, function ($user, $roleHelper) {
            return $user->getRoleNames()[0] == $roleHelper::roles[2] && $user->role_assignment == 'close_out_aa';
        });
    }
    // Approval 4
    function getRegisWorkPA(Request $request)
    {
        // $param = $request->q;
        // $get_closed_out_aa = User::where('first_name', 'like', "%$param%")
        //     ->orWhere('last_name', 'like', "%$param%")
        //     ->get()
        //     ->filter(function ($user) {
        //         return $user->roles->where('name', 'supervisor');
        //     })
        //     ->map(function ($proc) {
        //         return [
        //             'id' => $proc->id,
        //             'text' => $proc->first_name . ' ' . $proc->last_name,
        //         ];
        //     });
        // return response()->json(['results' => $get_closed_out_aa]);
        return $this->getApproverSelect2($request, function ($user, $roleHelper) {
            return $user->getRoleNames()[0] == $roleHelper::roles[2] && $user->role_assignment == 'registry_of_work_completion';
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
                // return $user->roles->where('name', $roleHelper::roles[2]);
                // return $user->getRoleNames()[0] == $roleHelper::roles[2];
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
        // $fileName = $validatedData['work_order'] . '-' . date_format(now(), 'Y-m-d') . '-' . $validatedData['date_application'] . '-' . Auth::id() . '-' . Auth::user()->full_name . '.json';
        // Storage::disk('permit_to_work')->put($fileName, json_encode($validatedData));
        return response()->json($validatedData, 202);
    }
    function storeShowHeader(HeaderColdWorkRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['status'] = 4;
        PermitToWork::updateOrCreate(['id' => $validatedData['id']], $validatedData);
        // $fileName = $validatedData['work_order'] . '-' . date_format(now(), 'Y-m-d') . '-' . $validatedData['date_application'] . '-' . Auth::id() . '-' . Auth::user()->full_name . '.json';
        // Storage::disk('permit_to_work')->put($fileName, json_encode($validatedData));
        // return response()->json($validatedData, 202);
        return response()->json([], 202);
    }

    function storeHeaderCrc(HeaderColdWorkRequestCrc $request)
    {
        $validatedData = $request->validated();
        $validatedData['status'] = 4;
        PermitToWork::updateOrCreate(['id' => $validatedData['id']], $validatedData);
        return response()->json([], 202);
    }
    function storeHeaderTRA(HeaderColdWorkRequestTRA $request)
    {
        $validatedData = $request->validated();
        PermitToWork::updateOrCreate(['id' => $validatedData['id']], $validatedData);
        // $fileName = $validatedData['work_order'] . '-' . date_format(now(), 'Y-m-d') . '-' . $validatedData['date_application'] . '-' . Auth::id() . '-' . Auth::user()->full_name . '.json';
        // Storage::disk('permit_to_work')->put($fileName, json_encode($validatedData));
        // return response()->json($validatedData, 202);
        return response()->json([], 202);
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
        $file_name = $appOne . '-' . '1' . '-' . 'John Doe' . '.json';

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
        $validated = $request->validated();
        // return $request->fails();
        // $file_name = $request->validated()['date_application'] . '-' . Auth::id() ?? '1' . '-' . Auth::name() ?? 'John Doe' . '.json';
        // dd($request->validated());
        $appTwo = 'AppTwo';
        $file_name = $appTwo . '-' . '1' . '-' . 'John Doe' . '.json';

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
        $AppThree = 'AppThree';
        $file_name = $AppThree . '-' . '1' . '-' . 'John Doe' . '.json';

        Storage::disk('permit_to_work')->put($file_name, json_encode($validatedData));
        return response()->json($validatedData, 202);
    }

    function storeHeaderAppFour(HeaderColdWorkRequestAppFour $request)
    {
        $validatedData = $request->validated();
        if (!is_array($validatedData)) {
            // Return error response if validation data is not an array
            return response()->json(['error' => 'Invalid data format'], 400);
        }
        $AppFour = 'AppFour';
        $file_name = $AppFour . '-' . '1' . '-' . 'John Doe' . '.json';

        Storage::disk('permit_to_work')->put($file_name, json_encode($validatedData));
        return response()->json($validatedData, 202);
    }
    function approvalRequest(ApprovalRequest $request)
    {
        $validated = $request->validated();
        $id = $validated['id'];
        $ptwRequest = PermitToWork::find($id);
        $receiver = $ptwRequest->request_pa_relation;
        $assignment = $ptwRequest->{$this->getAssignment()};
        $assignment->status = $validated['status'];
        $assignment->comment = $validated['comment'];
        $assignment->signed = $validated['signature'];
        // dd($assignment);
        $ptwRequest->update([$this->getAssignment() => $assignment]);
        event(new PermitToWorkEvent($receiver, Auth::user(), $ptwRequest));
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
