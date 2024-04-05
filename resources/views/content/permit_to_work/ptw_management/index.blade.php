@extends('layouts/contentNavbarLayout')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/datatables.bootstrap5.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/searchPanes.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/datatables_ext.min.css') }}">
@endpush
@section('title', 'Permit To Work Management')
@section('titleHead', 'Permit To Work Management')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5>Permit To Work</h5>
                    {!! $dataTable->table() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    {{-- <script src="{{ asset('assets/js/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables.bootstrap5.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/datatables_ext.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
    {!! $dataTable->scripts() !!}
@endpush
