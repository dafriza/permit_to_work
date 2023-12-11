<?php

namespace App\DataTables;

use App\Models\User;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PermitToWorkManagementDataTable extends DataTable
{
    public function dataTable($query)
    {
        return datatables()
            ->of($query)
            // ->editColumn('status', 'content.ptw_management.__status_table')
            // ->addColumn('action', 'content.ptw_management.__edit_table')
            // ->rawColumns(['action','status'])
            ->addIndexColumn();
    }
    public function query(User $model)
    {
        $user = $model->where('id', 2)->with('request_pa')->first();
        $user_map = collect($user->request_pa)->map(function ($user_ptw) use ($user) {
            $user_ptw->name = $user->full_name;
            return $user_ptw;
        });
        return $model->newQuery();
        // return $user_map;
    }
    public function html()
    {
        return $this->builder()
                    ->setTableId('ptw-management')
                    ->columns($this->getColumns())
                    ->parameters([
                        'dom' => 'Bftrip',
                        'buttons' => ['searchPanes']
                    ])
                    ->minifiedAjax()
                    ->orderBy(1);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('DT_RowIndex'),
            Column::make('id'),
            Column::make('job_id'),
            // Column::make('number'),
            // Column::make('name'),
            // Column::make('date_application'),
            // Column::computed('status')
            //       ->addClass('text-center'),
            // Column::computed('action')
            //       ->addClass('text-center'),
        ];
    }
}
