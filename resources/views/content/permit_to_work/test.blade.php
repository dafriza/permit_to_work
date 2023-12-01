@extends('layouts/contentNavbarLayout')
@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">
@endpush
@section('title', ' Horizontal Form ')

@section('content')
    <!-- Basic Layout & Basic with Icons -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-md-12 mt-5">
                <h2>Linear stepper</h2>
                <div class="card">
                    <div class="card-body">
                        <div id="stepper1" class="bs-stepper">
                            <div class="bs-stepper-header">
                                <div class="step" data-target="#test-l-1">
                                    <button type="button" class="btn step-trigger">
                                        <span class="bs-stepper-circle">1</span>
                                        <span class="bs-stepper-label">First step</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#test-l-2">
                                    <button type="button" class="btn step-trigger">
                                        <span class="bs-stepper-circle">2</span>
                                        <span class="bs-stepper-label">Second step</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#test-l-3">
                                    <button type="button" class="btn step-trigger">
                                        <span class="bs-stepper-circle">3</span>
                                        <span class="bs-stepper-label">Third step</span>
                                    </button>
                                </div>
                            </div>
                            <div class="bs-stepper-content">
                                <div id="test-l-1" class="content">
                                    <p class="text-center">test 1</p>
                                    <button class="btn btn-primary" onclick="stepper1.next()">Next</button>
                                </div>
                                <div id="test-l-2" class="content">
                                    <p class="text-center">test 2</p>
                                    <button class="btn btn-primary" onclick="stepper1.next()">Next</button>
                                    <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                                </div>
                                <div id="test-l-3" class="content">
                                    <p class="text-center">test 3</p>
                                    <button class="btn btn-primary" onclick="stepper1.next()">Next</button>
                                    <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
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
@endpush
