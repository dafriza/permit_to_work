<?php

namespace App\DataTables\UserManagement;

use App\Helper\RolesAndPermissionsHelper;
use App\Models\User;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class UserManagementDataTable extends DataTable
{
    public function dataTable($query)
    {
        $rolesAndPermissions = new RolesAndPermissionsHelper();
        return datatables()
            ->eloquent($query)
            ->filterColumn('fullname', function ($query, $keyword) {
                $sql = "CONCAT(users.first_name,'-',users.last_name) like ?";
                $query->whereRaw($sql, ["%{$keyword}%"]);
            })
            ->filterColumn('role_assignment', function ($query, $keyword) {
                $sql = "role_assignment like ?";
                $query->whereRaw($sql, ["%{$keyword}%"]);
            })
            ->addColumn('fullname', function ($user) {
                return $user->full_name;
            })
            ->addColumn('action', function ($user) use ($rolesAndPermissions) {
                // $idModal++;
                return view('content.user_management.__action', compact(['user', 'rolesAndPermissions']));
            })
            ->editColumn('role_assignment', function ($user) {
                return $user->role_assignment_name;
            })
            ->rawColumns(['action', 'fullname', 'role_assigment'])
            ->addIndexColumn();
    }
    public function query(User $model)
    {
        return $model->newQuery();
    }
    public function html()
    {
        return $this->builder()
            ->setTableId('user_management')
            ->columns($this->getColumns())
            ->minifiedAjax(route('user_management.datatables_index'))
            ->dom('Bfrtip')
            ->orderBy(1)
            ->buttons(
                Button::make('reload'),
                Button::make('create')
                    ->action('')
                    ->className('btn btn-success')
                    ->attr([
                        'data-bs-toggle' => 'modal',
                        'data-bs-target' => '#createUser',
                    ]),
            );
    }
    protected function getColumns()
    {
        return [Column::make('DT_RowIndex')->title('No')->searchable(false)->orderable(false), Column::make('fullname'), Column::make('email'), Column::make('phone_number')->title('Phone Number'), Column::make('address'), Column::make('role_assignment')->title('Role Assignment'), Column::computed('action')];
    }
}
