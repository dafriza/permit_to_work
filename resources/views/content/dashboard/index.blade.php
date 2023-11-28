@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection

@push('styles')
    <script type="text/css" src="https://fonts.googleapis.com/css?family=Lato"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link rel="stylesheet"
        href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/sweetalert2/sweetalert2.css" />
    <script
        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/sweetalert2/sweetalert2.js">
    </script>
    <script
        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/js/extended-ui-sweetalert2.js">
    </script>
@endpush
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span><span
                    class="text-muted fw-light"></span>Dashboard
            </h4>
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
                <div class="card h-100">
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
                <div class="card h-100">
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
                            @foreach ($permit_to_work_auth->authorization_and_issuing as $key => $permit_to_work)
                                @php
                                    try {
                                        $status_issue = explode(',', $permit_to_work_auth->status_issue[$permit_to_work]);
                                        $str = $permit_to_work;
                                        $pattern = '/https/i';
                                        $pattern = preg_match($pattern, $str);
                                        if ($pattern == 1) {
                                            $permit_to_work = 'success';
                                        }
                                    } catch (\Exception $e) {
                                        $status_issue = ['success', 'success','check-circle'];
                                    }
                                @endphp
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-{{ $status_issue[0] }}">
                                            <i class="bx bx-{{$status_issue[2]}}"
                                            {{-- status by approval --}}
                                                onclick="swal_usage_ok('{{ $permit_to_work }}','Approved','{{ $status_issue[1] }}')"></i>
                                        </span>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-1 fw-normal">{{ $permit_to_work_auth->main_issue[$loop->index] }}
                                            </h6>
                                            <small class="text-muted">
                                                {{ $key }}
                                            </small>
                                        </div>
                                        <div class="user-progress">
                                            <h6 class="mb-0">16 Day Ago</h6>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Activity Timeline -->

            <!-- On Click -->
            <!-- Success -->
            <div class="modal fade" id="successactivity" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                    <div class="modal-content p-3 p-md-5">
                        <div class="modal-body">
                            <div class="text-center mb-4">
                                <div class="swal2-icon swal2-success swal2-icon-show" style="display: flex;">
                                    <div class="swal2-success-circular-line-left"
                                        style="background-color: rgb(255, 255, 255);"></div>
                                    <span class="swal2-success-line-tip"></span> <span
                                        class="swal2-success-line-long"></span>
                                    <div class="swal2-success-ring"></div>
                                    <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);">
                                    </div>
                                    <div class="swal2-success-circular-line-right"
                                        style="background-color: rgb(255, 255, 255);"></div>
                                </div>
                            </div>
                            <h2 class="swal2-title" id="swal2-title" style="text-align: center">Approved</h2>
                            <div class="swal2-html-container" id="swal2-html-container" style="text-align: center">Permit
                                to Work Approved by Khaleed</div>
                            <p></p>
                            <form id="editUserForm" class="row g-6" onsubmit="return false">
                                <div class="col-12 text-center">
                                    <button type="reset" class="swal2-confirm btn btn-primary" aria-label="Close"
                                        data-bs-dismiss="modal" style="text-align: center">OK</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Rejected -->
            <div class="modal fade" id="rejectactivity" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                    <div class="modal-content p-3 p-md-5">
                        <div class="modal-body">
                            <div class="text-center mb-4">
                                <div class="swal2-icon swal2-error swal2-icon-show" style="display: flex;"><span
                                        class="swal2-x-mark">
                                        <span class="swal2-x-mark-line-left"></span>
                                        <span class="swal2-x-mark-line-right"></span>
                                    </span>
                                </div>
                            </div>
                            <h2 class="swal2-title" id="swal2-title" style="text-align: center">Rejected</h2>
                            <div class="swal2-html-container" id="swal2-html-container" style="text-align: center">Permit
                                to Work Rejected by Khaleed</div>
                            <p></p>
                            <form id="editUserForm" class="row g-6" onsubmit="return false">
                                <div class="col-12 text-center">
                                    <button type="reset" class="swal2-confirm btn btn-primary" aria-label="Close"
                                        data-bs-dismiss="modal" style="text-align: center">OK</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- On Going -->
            <div class="modal fade" id="ongoingactivity" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                    <div class="modal-content p-3 p-md-5">
                        <div class="modal-body">
                            <div class="text-center mb-4">
                                <div class="swal2-icon swal2-warning swal2-icon-show" style="display: flex;">
                                    <div class="swal2-icon-content">!</div>
                                </div>
                            </div>
                            <h2 class="swal2-title" id="swal2-title" style="text-align: center">On Going!</h2>
                            <div class="swal2-html-container" id="swal2-html-container" style="text-align: center">Permit
                                to Work Waiting for Approve by Khaleed</div>
                            <p></p>
                            <form id="editUserForm" class="row g-6" onsubmit="return false">
                                <div class="col-12 text-center">
                                    <button type="reset" class="swal2-confirm btn btn-primary" aria-label="Close"
                                        data-bs-dismiss="modal" style="text-align: center">OK</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ On Click -->
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/chart_usage.js') }}"></script>
    <script src="{{ asset('assets/js/http_ajax.js') }}"></script>
    <script>
        getDataWithAjax('{{ route('dashboard.get_data_permit_to_work') }}').done(function(data) {
            let dataset = data;
            doughnutChart("permit_to_work", ["On Going", "Success", "Rejected"], data)
            doughnutChart("entry_permit", ["On Going", "Success", "Rejected"], data)
        });
    </script>
@endpush
