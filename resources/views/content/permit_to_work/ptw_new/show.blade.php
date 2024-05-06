@extends('layouts/contentNavbarLayout')
@section('title', 'Show Permit To Work')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div id="stepper1" class="bs-stepper">
                <div class="bs-stepper-header">
                    <div class="step" data-target="#test-l-1">
                        <button type="button" class="btn step-trigger" onclick="stepper1.previous()">
                            <span class="bs-stepper-circle">1</span>
                            {{-- <span class="bs-stepper-label">First step</span> --}}
                        </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#test-l-2">
                        <button type="button" class="btn step-trigger" onclick="stepper1.next()">
                            {{-- <span class="bs-stepper-circle" style="background-color: #AEA3F2">2</span> --}}
                            <span class="bs-stepper-circle">2</span>
                            {{-- <span class="bs-stepper-label">Second step</span> --}}
                        </button>
                    </div>
                </div>
                <div class="bs-stepper-content">
                    <div id="test-l-1" class="content">
                        @include('content.permit_to_work.__task_description')
                    </div>
                    <div id="test-l-2" class="content">
                        {{-- @include('content.permit_to_work.__approval_three') --}}
                        {{-- @include('content.permit_to_work.__task_description') --}}
                        {{-- @include('content.permit_to_work.ptw_new.__tra') --}}
                        @include('content.permit_to_work.ptw_new.ptw_progress')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        var stepper1Node = document.querySelector('#stepper1')
        var stepper1 = new Stepper(document.querySelector('#stepper1'), {
            linear: false,
            animation: true
        })
        // stepper1Node.addEventListener('show.bs-stepper', function(event) {
        //     console.warn('show.bs-stepper', event)
        // })
        var stepper2 = new Stepper(document.querySelector('#stepper2'), {
            linear: false,
            animation: true
        })
    </script>
    @include('content.permit_to_work.__get_data_permit_to_work')
@endpush
