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
                <div class="card card-border-shadow-secondary">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                {{-- <span class="avatar-initial rounded bg-label-primary"></span> --}}
                                <i class="bx bxs-user avatar-initial rounded bg-label-secondary"></i>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $totalUser }}</h4>
                        </div>
                        <p class="mb-1">Total User</p>
                        {{-- <p class="mb-0">
                            <span class="fw-medium me-1">+18.2%</span>
                            <small class="text-muted">than last week</small>
                        </p> --}}
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-primary">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                {{-- <span class="avatar-initial rounded bg-label-primary"></span> --}}
                                <i class="bx bxs-file avatar-initial rounded bg-label-primary"></i>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $totalPTWCold }}</h4>
                        </div>
                        <p class="mb-1">Total PTW Cold</p>
                        {{-- <p class="mb-0">
                            <span class="fw-medium me-1">-8.7%</span>
                            <small class="text-muted">than last week</small>
                        </p> --}}
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-danger">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                {{-- <span class="avatar-initial rounded bg-label-danger"></span> --}}
                                <i class="bx bxs-file avatar-initial rounded bg-label-danger"></i>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $totalPTWHot }}</h4>
                        </div>
                        <p class="mb-1">Total PTW Hot</p>
                        {{-- <p class="mb-0">
                            <span class="fw-medium me-1">+4.3%</span>
                            <small class="text-muted">than last week</small>
                        </p> --}}
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-success">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                {{-- <span class="avatar-initial rounded bg-label-success"></span> --}}
                                <i class="bx bxs-file avatar-initial rounded bg-label-success"></i>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $totalEP }}</h4>
                        </div>
                        <p class="mb-1">Total Entry Permit</p>
                        {{-- <p class="mb-0">
                            <span class="fw-medium me-1">-2.5%</span>
                            <small class="text-muted">than last week</small>
                        </p> --}}
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
                        <h5 class="m-0 me-2">Permit to Work Cold</h5>
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
                </div>
                <div class="card-body">
                    <canvas id="entry_permit"></canvas>
                </div>
            </div>
        </div>
        <!--/ cart entry permit -->
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/chart_usage.js') }}"></script>
    <script src="{{ asset('assets/js/http_ajax.js') }}"></script>
    <script>
        // getDataWithAjax('{{ route('dashboard.get_data_permit_to_work') }}').done(function(data) {
        //     let dataset = data;
        //     doughnutChart("permit_to_work", data);
        //     // doughnutChart("entry_permit", ["On Going", "Success", "Rejected", "Draft"], data)
        // });
    </script>
@endpush
