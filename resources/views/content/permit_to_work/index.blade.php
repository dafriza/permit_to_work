@extends('layouts/contentNavbarLayout')
@section('title', ' Horizontal Form ')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h2>Linear stepper</h2>
                <div id="stepper1" class="bs-stepper">
                    <div class="bs-stepper-header">
                        <div class="step" data-target="#test-l-1">
                            <button type="button" class="btn step-trigger">
                                <span class="bs-stepper-circle">1</span>
                                {{-- <span class="bs-stepper-label">First step</span> --}}
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#test-l-2">
                            <button type="button" class="btn step-trigger">
                                {{-- <span class="bs-stepper-circle" style="background-color: #AEA3F2">2</span> --}}
                                <span class="bs-stepper-circle">2</span>
                                {{-- <span class="bs-stepper-label">Second step</span> --}}
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#test-l-3">
                            <button type="button" class="btn step-trigger">
                                <span class="bs-stepper-circle">3</span>
                                {{-- <span class="bs-stepper-label">Third step</span> --}}
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#test-l-4">
                            <button type="button" class="btn step-trigger">
                                <span class="bs-stepper-circle">4</span>
                                {{-- <span class="bs-stepper-label">Third step</span> --}}
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#test-l-5">
                            <button type="button" class="btn step-trigger">
                                <span class="bs-stepper-circle">5</span>
                                {{-- <span class="bs-stepper-label">Third step</span> --}}
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#test-l-6">
                            <button type="button" class="btn step-trigger">
                                <span class="bs-stepper-circle">6</span>
                                {{-- <span class="bs-stepper-label">Third step</span> --}}
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#test-l-7">
                            <button type="button" class="btn step-trigger">
                                <span class="bs-stepper-circle">7</span>
                                {{-- <span class="bs-stepper-label">Third step</span> --}}
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content">
                        <div id="test-l-1" class="content">
                            @include('content.permit_to_work.__task_description')
                        </div>
                        <div id="test-l-2" class="content">
                            @include('content.permit_to_work.__tra')
                        </div>
                        <div id="test-l-3" class="content">
                            <p class="text-center">page 3</p>
                            <button class="btn btn-primary me-2" onclick="stepper1.previous()">Previous</button>
                            <button class="btn btn-primary me-2" onclick="stepper1.next()">Next</button>
                        </div>
                        <div id="test-l-4" class="content">
                            <p class="text-center">page 4</p>
                            <button class="btn btn-primary me-2" onclick="stepper1.previous()">Previous</button>
                            <button class="btn btn-primary me-2" onclick="stepper1.next()">Next</button>
                        </div>
                        <div id="test-l-5" class="content">
                            <p class="text-center">page 5</p>
                            <button class="btn btn-primary me-2" onclick="stepper1.previous()">Previous</button>
                            <button class="btn btn-primary me-2" onclick="stepper1.next()">Next</button>
                        </div>
                        <div id="test-l-6" class="content">
                            <p class="text-center">page 6</p>
                            <button class="btn btn-primary me-2" onclick="stepper1.previous()">Previous</button>
                            <button class="btn btn-primary me-2" onclick="stepper1.next()">Next</button>
                        </div>
                        <div id="test-l-7" class="content">
                            <p class="text-center">page 7</p>
                            <button class="btn btn-primary me-2" onclick="stepper1.previous()">Previous</button>
                            <button class="btn btn-primary me-2" onclick="stepper1.next()">Next</button>
                        </div>
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

        var stepper2 = new Stepper(document.querySelector('#stepper2'), {
            linear: false,
            animation: true
        })
        var stepper3 = new Stepper(document.querySelector('#stepper3'), {
            animation: true
        })
        var stepper4 = new Stepper(document.querySelector('#stepper4'))
    </script>
    <script>
        // Function to add a new input
        function addInputFieldHazard() {
            var newDiv = $('<div/>', {
                'class': 'input-group mb-3'
            });
            var newInput = $('<input/>', {
                'class': 'form-control',
                'type': 'text',
                'name': 'Hazards[]',
                'placeholder': 'Air Laut Pasang'
            });

            var removeBtn = $('<button/>', {
                'class': 'btn btn-danger',
                'type': 'button'
            }).text('-').on('click', function() {
                $(this).parent().remove();
            });

            newDiv.append(newInput).append(removeBtn);

            $('#dynamicInputContainer').append(newDiv);
        };

        function addInputFieldControlOther() {
            var newDiv = $('<div/>', {
                'class': 'input-group mb-3'
            });
            var newInput = $('<input/>', {
                'class': 'form-control',
                'type': 'text',
                'name': 'ControlOther[]',
                'placeholder': 'Value'
            });

            var removeBtn = $('<button/>', {
                'class': 'btn btn-danger',
                'type': 'button'
            }).text('-').on('click', function() {
                $(this).parent().remove();
            });

            newDiv.append(newInput).append(removeBtn);

            $('#dynamicInputContainerControlOther').append(newDiv);
        }

        function addInputFieldAdditionalPPE() {
            var newDiv = $('<div/>', {
                'class': 'input-group mb-3'
            });
            var newInput = $('<input/>', {
                'class': 'form-control',
                'type': 'text',
                'name': 'AdditionalPPE[]',
                'placeholder': 'PPE'
            });

            var removeBtn = $('<button/>', {
                'class': 'btn btn-danger',
                'type': 'button'
            }).text('-').on('click', function() {
                $(this).parent().remove();
            });

            newDiv.append(newInput).append(removeBtn);

            $('#dynamicInputContainerAdditionalPPE').append(newDiv);
        }
    </script>
@endpush
