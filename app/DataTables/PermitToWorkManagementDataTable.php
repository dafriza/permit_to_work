<?php

namespace App\DataTables;

use DB;
use App\Models\PermitToWork;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\SearchPane;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Database\Eloquent\Builder;

class PermitToWorkManagementDataTable extends DataTable
{
    public function dataTable($query)
    {
        return datatables()
            ->of($query)
            ->searchPane(
                'status',
                fn() => PermitToWork::query()
                    ->select(
                        DB::raw('
                    CASE
                    WHEN status = 1 THEN "ON GOING"
                    WHEN status = 2 THEN "SUCCESS"
                    WHEN status = 3 THEN "REJECTED"
                    WHEN status = 4 THEN "DRAFT"
                    END as label,
                    status as value, count(*) as total, count(*) as count'),
                    )
                    ->distinct()
                    ->groupBy('status')
                    ->where('request_pa', 2)
                    ->get(),
                function (Builder $builder, $values) {
                    return $builder->whereIn('status', $values);
                },
            )
            ->editColumn('status', function ($value) {
                return view('content.permit_to_work.ptw_management.__status_table', compact('value'));
            })
            ->addColumn('action', function ($value) {
                return view('content.permit_to_work.ptw_management.__edit_table', compact('value'));
            })
            ->rawColumns(['action', 'status'])
            ->addIndexColumn();
    }
    public function query(PermitToWork $model)
    {
        // return $model->where('request_pa', 2)->get();
        return $model->newQuery()->where('request_pa', 2);
    }
    public function html()
    {
        return $this->builder()
            ->setTableId('ptw-management')
            ->columns($this->getColumns())
            ->addColumnDef([
                'searchPanes' => [
                    'show' => true,
                ],
                'targets' => [3],
            ])
            ->parameters([
                'language' => [
                    'searchPanes' => [
                        'collapse' => [
                            0 => 'Search Options',
                            '_' => 'Search (%d)',
                        ],
                    ],
                ],
                'dom' => 'Bftrip',
                'buttons' => [
                    [
                        'extend' => 'searchPanes',
                        'className' => 'btn btn-primary mx-2',
                    ],
                    'reload',
                ],
            ])
            ->minifiedAjax(route('permit_to_work.management.datatables'))
            ->orderBy(2);
    }
    protected function getColumns()
    {
        return [
            Column::make('DT_RowIndex')
                ->title('No')
                ->searchable(false),
            // Column::make('id'),
            // Column::make('job_id'),
            Column::make('number')->title('project'),
            // Column::make('name'),
            Column::make('date_application')->title('start date'),
            // Column::make('request_pa'),
            // Column::make('status'),
            Column::computed('status')->addClass('text-center'),
            Column::computed('action')->addClass('text-center'),
        ];
    }
}
