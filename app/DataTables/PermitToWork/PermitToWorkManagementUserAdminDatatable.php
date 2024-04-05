<?php

namespace App\DataTables\PermitToWork;

// use App\Models\PermitToWorkManagementUserAdminDatatable;
use App\Models\PermitToWork;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PermitToWorkManagementUserAdminDatatable extends DataTable
{
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('request_pa_relation',function($ptw){
                return $ptw->request_pa_relation->full_name;
            })
            ->addColumn('direct_spv_relation',function($ptw){
                return $ptw->direct_spv_relation->full_name;
            })
            ->addColumn('action',function($ptw){
                return "<a class='btn btn-sm btn-icon btn-primary' href='" . route('permit_to_work.management.detail_request', ['id' => $ptw['id']]) . "' target='_blank'><i class='bx bx-file bx-xs'></i></a>";
            })
            ->rawColumns(['request_pa_relation','direct_spv_relation','action'])
            ->addIndexColumn();
            // ->addColumn('action', 'permittoworkmanagementuseradmindatatable.action');
    }
    public function query(PermitToWork $model)
    {
        return $model::with(['request_pa_relation','direct_spv_relation'])->newQuery();
    }
    public function html()
    {
        return $this->builder()
                    ->setTableId('permit_to_work_user_management_admin')
                    ->columns($this->getColumns())
                    // ->parameters(
                    //     ['responsive' => true]
                    // )
                    ->minifiedAjax(route('permit_to_work.management.datatables_user_management'))
                    ->dom('Bfrtip')
                    ->orderBy(7)
                    ->buttons(
                        Button::make('reload')
                    );
    }
    protected function getColumns()
    {
        return [
            Column::make('DT_RowIndex')->title('No'),
            Column::make('number'),
            Column::make('work_order'),
            Column::make('date_application'),
            Column::make('request_pa_relation')->title('Request PA'),
            Column::make('direct_spv_relation')->title('Direct Approver'),
            Column::make('location')->title('Lokasi'),
            Column::make('created_at')->title('Tanggal Buat'),
            Column::make('status'),
            Column::make('action'),
            // Column::make('updated_at'),
        ];
    }
}
