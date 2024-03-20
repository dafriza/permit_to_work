@extends('layouts/contentNavbarLayout')
@section('title', 'Create Permit To Work')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div id="stepper1" class="bs-stepper">
                <div class="bs-stepper-header" style="display: inline-block; margin: 0 auto">
                    <div class="step" data-target="#test-l-1">
                        <button type="button" class="btn step-trigger">
                            <span class="bs-stepper-circle">1</span>
                            {{-- <span class="bs-stepper-label">First step</span> --}}
                        </button>
                    </div>
                </div>
                <div class="bs-stepper-content">
                    <div id="test-l-1" class="content">
                        @include('content.permit_to_work.__task_descriptionFirst')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        var stepper1Node = document.querySelector('#stepper1')
        var stepper1 = new Stepper(document.querySelector('#stepper1'))

        stepper1Node.addEventListener('show.bs-stepper', function(event) {
            console.warn('show.bs-stepper', event)
        })
        stepper1Node.addEventListener('shown.bs-stepper', function(event) {
            console.warn('shown.bs-stepper', event)
        })
        submitWithAjax('formColdHeader', function() {
            // console.log($(this));
            setTimeout(() => {
                location.assign("{{ env('APP_URL') . '/permit_to_work/management' }}");
            }, 1500);
        })
    </script>
@endpush
