@extends('layouts/contentNavbarLayout')
@section('title', ' Horizontal Form ')
@push('styles')
    <style>
        .task_description tr td:nth-child(odd) {
            width: 30%;
        }
    </style>
@endpush
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col ">
                <h4><span class="text-muted">PTW Management /</span> Detail PTW Request</h4>
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">PERMIT TO WORK <br> DETAIL</h4>
                        <br>
                        <div class="row justify-content-end">
                            <div class="col-auto">
                                <a href="{{ route('permit_to_work.print_permit_to_work', ['id' => $detail_request->id]) }}"
                                    class="btn btn-secondary" target="_blank">Print</a>
                                {{-- <img src="data:image/png;base64, {{ $detail_request->get_sign_pa }}" alt="sign_pa">;; --}}
                            </div>
                            {{-- <div class="col-auto">
                                <button class="btn btn-primary">Download</button>
                            </div> --}}
                        </div>
                        {{-- task description --}}
                        @include('content.permit_to_work.detail_request.__task_description')
                        {{-- tra --}}
                        @include('content.permit_to_work.detail_request.__tra')
                        {{-- crc --}}
                        @include('content.permit_to_work.detail_request.__crc')
                        {{-- circulation --}}
                        @include('content.permit_to_work.detail_request.__circulation')
                    </div>
                    @role('approver')
                        <div class="row justify-content-end mb-3" style="margin-right:1rem !important">
                            @if ($ifSigned)
                                @include('content.permit_to_work.detail_request.__signed_request')
                            @endif
                            @if (!$ifSigned)
                                @include('content.permit_to_work.detail_request.__approve_request')
                                @include('content.permit_to_work.detail_request.__reject_request')
                            @endif
                        </div>
                    @endrole
                </div>
            </div>
        </div>
    </div>
@endsection
