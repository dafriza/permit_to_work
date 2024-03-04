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
            ->eloquent($query)
            ->addIndexColumn()
            ->editColumn('NEXT ACTION', function ($row) {
                return "<span class=\"btn btn-secondary btn-xs disabled\">" . $row['NEXT ACTION'] . '</span>';
            })
            ->addColumn('ACTION', function ($row) {
                return "<a href='" . route('permit_to_work.management.detail_request', ['id' => $row['PTW ID']]) . "' target='_blank'><i class='menu-icon tf-icons bx bx-file'></i></a>";
            })
            ->rawColumns(['NEXT ACTION', 'ACTION']);
    }
    public function query(PermitToWork $model)
    {
        //sql = select ptw.id as "PTW ID", work_order as "PROJECT", concat(pa.first_name,' ',pa.last_name) as "PA NAME", date_format(json_value(json_value(authorisation,"$.date"),"$.date"),"%d %M %Y") as "START DATE", case when json_value(ptw.authorisation,"$.status") = "success" THEN "PERMIT REGISTRY" ELSE "AUTHORISATION" END AS "NEXT ACTION"
        // from permit_to_works ptw
        // join users u on json_value(ptw.authorisation,"$.approver") = u.id
        // left join users pa on request_pa = pa.id
        // where u.id = 1;
        $user = $this->getUserAssignment();
        $nextAssignment = array_keys(self::assignment)[self::assignment[$user] + 1 > 7 ? 7 : self::assignment[$user] + 1];
        $actionAssignment = isset($nextAssignment) ? str_replace('_', ' ', ucfirst($nextAssignment)) : array_key_last(self::assignment);
        $assignment = $this->getUserAssignment();
        $res = $model
            ->newQuery()
            ->select(['permit_to_works.id as PTW ID',
            'work_order as PROJECT',
            DB::raw('concat(pa.first_name,\' \',pa.last_name) as "PA NAME"'),
            'permit_to_works.created_at as START DATE',
            DB::raw(
                'case when json_value(permit_to_works.' . $assignment . ',"$.status") = "success"
                THEN "' . $actionAssignment .
                '" ELSE "' . ucfirst(str_replace('_', ' ', $assignment)) . '" END AS "NEXT ACTION"')])
            ->join('users', 'users.id', '=', 'permit_to_works.' . $assignment . '->approver')
            ->leftJoin('users as pa', 'request_pa', '=', 'pa.id')
            ->where('users.id', Auth::id());
        return $res;
    }
    public function html()
    {
        return $this->builder()
            ->setTableId('permit_to_work_management_user')
            ->columns($this->getColumns())
            ->minifiedAjax(route('permit_to_work.management.datatables_user_management'))
            // ->dom('Bfrtip')
            ->orderBy(1);
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
