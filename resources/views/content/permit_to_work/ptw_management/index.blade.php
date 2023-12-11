@extends('layouts/contentNavbarLayout')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/datatables.bootstrap5.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/searchPanes.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/datatables_ext.min.css') }}">
@endpush
@section('title', ' PTW Management ')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h2>PTW Management</h2>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Permit To Work</h5>
                        <table id="ptw_management" class="table">
                            <thead>
                                <th>NO</th>
                                <th>PTW ID</th>
                                <th>PROJECT</th>
                                <th>EMPLOYEE NAME</th>
                                <th>START DATE</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </thead>
                            <tbody></tbody>
                        </table>
                        {{-- {!! $dataTable->table() !!} --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/js/http_ajax.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables.bootstrap5.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/datatables_ext.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
    {{-- {!! $dataTable->scripts() !!} --}}
    <script>
        $("#ptw_management").DataTable({
            serverSide: true,
            processing: true,
            ajax: '{{ route('permit_to_work.management.get_datatable') }}',
            columns: [{
                    data: 'DT_RowIndex'
                },
                {
                    data: 'id'
                },
                {
                    data: 'number'
                },
                {
                    data: 'name'
                },
                {
                    data: 'date_application'
                },
                {
                    data: 'status'
                },
                {
                    data: 'edit'
                }
            ],
            deferRender: true,
            buttons: [
                'searchPanes'
            ],
            dom: 'Bfrtip'
        })
    </script>
@endpush
