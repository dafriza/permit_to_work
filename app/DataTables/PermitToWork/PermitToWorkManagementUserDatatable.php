<?php

namespace App\DataTables\PermitToWork;

use App\Models\PermitToWork;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PermitToWorkManagementUserDatatable extends DataTable
{
    private const assignment = PermitToWork::assignment;
    public function dataTable($query)
    {
        return datatables()
            ->collection($this->alternateQuery())
            // ->eloquent($query)
            ->addIndexColumn()
            ->editColumn('NEXT ACTION', function ($row) {
                return "<button class=\"btn btn-primary btn-sm\">" . $row['NEXT ACTION'] . '</button>';
            })
            ->addColumn('ACTION', function ($row) {
                return "<a class='btn btn-sm btn-icon btn-primary' href='" . route('permit_to_work.management.detail_request', ['id' => $row['PTW ID']]) . "' target='_blank'><i class='bx bx-file bx-xs'></i></a>";
            })
            ->rawColumns(['NEXT ACTION', 'ACTION']);
    }
    public function query(PermitToWork $model)
    {
        return $model->newQuery();
        //sql = select ptw.id as "PTW ID", work_order as "PROJECT", concat(pa.first_name,' ',pa.last_name) as "PA NAME", date_format(json_value(json_value(authorisation,"$.date"),"$.date"),"%d %M %Y") as "START DATE", case when json_value(ptw.authorisation,"$.status") = "success" THEN "PERMIT REGISTRY" ELSE "AUTHORISATION" END AS "NEXT ACTION"
        // from permit_to_works ptw
        // join users u on json_value(ptw.authorisation,"$.approver") = u.id
        // left join users pa on request_pa = pa.id
        // where u.id = 1;
        // $user = $this->getUserAssignment();

        // algorithm in bellow
        // $assignmentStatus = $model->first()->status_ptw;
        // $nextAssignment = array_keys(self::assignment)[self::assignment[$assignmentStatus] + 1 > 7 ? 7 : self::assignment[$assignmentStatus] + 1];
        // $actionAssignment = isset($nextAssignment) ? str_replace('_', ' ', ucfirst($nextAssignment)) : array_key_last(self::assignment);
        // $res = $model
        //     ->newQuery()
        //     ->select([
        //         'permit_to_works.id as PTW ID',
        //         'work_order as PROJECT',
        //         DB::raw('concat(pa.first_name,\' \',pa.last_name) as "PA NAME"'),
        //         'permit_to_works.created_at as START DATE',
        //         DB::raw(
        //             'case when json_value(permit_to_works.' .
        //                 $assignmentStatus .
        //                 ',"$.status") = "success"
        //         THEN "' .
        //                 $actionAssignment .
        //                 '" ELSE "' .
        //                 ucfirst(str_replace('_', ' ', $assignmentStatus)) .
        //                 '" END AS "NEXT ACTION"',
        //         ),
        //     ])
        //     ->join('users', 'users.id', '=', 'permit_to_works.' . $assignmentStatus . '->approver')
        //     ->leftJoin('users as pa', 'request_pa', '=', 'pa.id')
        //     ->where('users.id', Auth::id());
        // // ->get();
        // return $res;
    }
    function alternateQuery()
    {
        $model = new PermitToWork();
        $assignment = $this->getUserAssignment();
        // $assignmentStatus = $model->first()->status_ptw;
        // $nextAssignment = array_keys(self::assignment)[self::assignment[$assignmentStatus] + 1 > 7 ? 7 : self::assignment[$assignmentStatus] + 1];
        // $actionAssignment = isset($nextAssignment) ? str_replace('_', ' ', ucfirst($nextAssignment)) : array_key_last(self::assignment);
        // $actionAssignment = str_replace('_', ' ', ucfirst($nextAssignment));
        $tempResultQuery = [];
        // $res = $this->statusAssignmentQuery($model,$assignment[1],$actionAssignment);
        foreach ($assignment as $assignmentRole) {
            $nextAssignment = array_keys(self::assignment)[self::assignment[$assignmentRole] + 1 > 7 ? 7 : self::assignment[$assignmentRole] + 1];
            // $actionAssignment = isset($nextAssignment) ? str_replace('_', ' ', ucfirst($nextAssignment)) : array_key_last(self::assignment);
            $actionAssignment = str_replace('_', ' ', ucfirst($nextAssignment));
            $tempResultQuery[] = $this->statusAssignmentQuery($model, $assignmentRole, $actionAssignment);
        }
        return collect($tempResultQuery)->flatten();
        // return $res;
    }
    function statusAssignmentQuery($model, $assignmentStatus, $actionAssignment)
    {
        return $model
            ->newQuery()
            ->select([
                'permit_to_works.id as PTW ID',
                'work_order as PROJECT',
                DB::raw('concat(pa.first_name,\' \',pa.last_name) as "PA NAME"'),
                'permit_to_works.created_at as START DATE',
                DB::raw(
                    'case when json_value(permit_to_works.' .
                        $assignmentStatus .
                        ',"$.status") = "success"
                THEN "' .
                        $actionAssignment .
                        '" ELSE "' .
                        ucfirst(str_replace('_', ' ', $assignmentStatus)) .
                        '" END AS "NEXT ACTION"',
                ),
            ])
            ->join('users', 'users.id', '=', 'permit_to_works.' . $assignmentStatus . '->approver')
            ->leftJoin('users as pa', 'request_pa', '=', 'pa.id')
            ->where('users.id', Auth::id())
            ->get();
    }
    public function html()
    {
        return $this->builder()->setTableId('permit_to_work_management_user')->columns($this->getColumns())->minifiedAjax(route('permit_to_work.management.datatables_user_management'))->dom('Bfrtip')->buttons(Button::make('reload'))->orderBy(0, 'asc');
    }
    protected function getColumns()
    {
        return [Column::make('PTW ID'), Column::make('PROJECT'), Column::make('PA NAME'), Column::make('START DATE'), Column::make('NEXT ACTION'), Column::make('ACTION')];
    }
    function getUserAssignment()
    {
        return Auth::user()->role_assignment;
    }
}
