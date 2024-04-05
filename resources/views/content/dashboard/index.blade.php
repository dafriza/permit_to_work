@extends('layouts/contentNavbarLayout')
@section('title', 'Dashboard')
@push('styles')
    <script type="text/javascript" src="{{ asset('assets/js/chart.min.js') }}"></script>
@endpush
@section('content')
    <div class="row">
        <!-- Card Border Shadow -->
        <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-primary"></span>
                            </div>
                            <h4 class="ms-1 mb-0">42</h4>
                        </div>
                        <p class="mb-1">On route vehicles</p>
                        <p class="mb-0">
                            <span class="fw-medium me-1">+18.2%</span>
                            <small class="text-muted">than last week</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-warning h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-warning"></span>
                            </div>
                            <h4 class="ms-1 mb-0">8</h4>
                        </div>
                        <p class="mb-1">Vehicles with errors</p>
                        <p class="mb-0">
                            <span class="fw-medium me-1">-8.7%</span>
                            <small class="text-muted">than last week</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-danger h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-danger"></span>
                            </div>
                            <h4 class="ms-1 mb-0">27</h4>
                        </div>
                        <p class="mb-1">Deviated from route</p>
                        <p class="mb-0">
                            <span class="fw-medium me-1">+4.3%</span>
                            <small class="text-muted">than last week</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-info h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-info"></span>
                            </div>
                            <h4 class="ms-1 mb-0">13</h4>
                        </div>
                        <p class="mb-1">Late vehicles</p>
                        <p class="mb-0">
                            <span class="fw-medium me-1">-2.5%</span>
                            <small class="text-muted">than last week</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Card Border Shadow -->

        <!-- chart permit to work -->
        <div class="col-md-4 col-xxl-4 mb-4 order-4">
            <div class="card h-auto">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Permit to Work</h5>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="permit_to_work"></canvas>
                </div>
            </div>
        </div>
        <!--/ cart ptw -->

        <!-- chart entry permit -->
        <div class="col-md-4 col-xxl-4 mb-4 order-4">
            <div class="card h-auto">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Entry Permit</h5>
                    </div>
                    {{-- <div class="dropdown">
                            <button class="btn p-0" type="button" id="deliveryExceptions" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="deliveryExceptions">
                                <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            </div>
                        </div> --}}
                </div>
                <div class="card-body">
                    <canvas id="entry_permit"></canvas>
                </div>
            </div>
        </div>
        <!--/ cart entry permit -->

        <!-- Activity Timeline -->
        <div class="col-md-4 col-xxl-4 mb-4 order-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Activity Timeline</h5>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        @foreach ($activityPTW as $key => $activity)
                            @php
                                // dd($activity[0]);
                                $parseActivity = explode(',', $activity[0]);
                                $status = $parseActivity[0];
                                $bg = $parseActivity[1];
                                $icon = $parseActivity[2];
                                $text = $parseActivity[3];
                                // dd($parseActivity);
                            @endphp
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-{{ $status }}">
                                        <i class="bx bx-{{ $icon }}" {{-- status by approval --}}
                                            onclick="swal_usage_ok('{{ $key }}','{{ $text }}','{{ $bg }}')"></i>
                                    </span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-1 fw-normal">{{ $key }}
                                        </h6>
                                        <small class="text-muted">
                                            {{ $key }}
                                        </small>
                                    </div>
                                    <div class="user-progress">
                                        <h6 class="mb-0">{{ $activity[1] }}</h6>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/chart_usage.js') }}"></script>
    <script src="{{ asset('assets/js/http_ajax.js') }}"></script>
    <script>
        getDataWithAjax('{{ route('dashboard.get_data_permit_to_work') }}').done(function(data) {
            let dataset = data;
            console.log(data);
            doughnutChart("permit_to_work", data);
            // doughnutChart("entry_permit", ["On Going", "Success", "Rejected", "Draft"], data)
        });
    </script>
@endpush
