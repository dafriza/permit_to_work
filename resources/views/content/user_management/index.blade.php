@extends('layouts/contentNavbarLayout')
@push('styles')
    <link href="{{ asset('assets/css/select2-bootstrap-5-theme.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/datatables.bootstrap5.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/searchPanes.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/datatables_ext.min.css') }}">
@endpush
@section('title', 'Permit To Work Management User')
@section('titleHead', 'Permit To Work Management User')
@section('content')
    <div class="row">
        <div class="col-md-12">
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5>Permit To Work</h5>
                    {!! $dataTable->table() !!}
                </div>
            </div>
        </div>
    </div>
    @include('content.user_management.create_user.__create_user')
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/js/http_ajax.js') }}"></script>
    <script src="{{ asset('assets/js/datatables_ext.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    {!! $dataTable->scripts() !!}
@endpush
