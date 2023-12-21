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


@section('content')

    <head>
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
    </head>

    <body>
        <!-- Navbar -->
        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                    <i class="bx bx-menu bx-sm"></i>
                </a>
            </div>
            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                <!-- Search -->

                <!-- /Search -->

                <ul class="navbar-nav flex-row align-items-center ms-auto">

                    <!-- Language -->

                    <!-- /Language -->

                    <!-- Quick links  -->

                    <!-- Quick links -->


                    <!-- Style Switcher -->

                    <!-- / Style Switcher-->


                    <!-- Notification -->
                    <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" aria-expanded="false">
                            <i class="bx bx-bell bx-sm"></i>
                            <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end py-0">
                            <li class="dropdown-menu-header border-bottom">
                                <div class="dropdown-header d-flex align-items-center py-3">
                                    <h5 class="text-body mb-0 me-auto">Notification</h5>
                                    <a href="javascript:void(0)" class="dropdown-notifications-all text-body"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i
                                            class="bx fs-4 bx-envelope-open"></i></a>
                                </div>
                            </li>
                            <li class="dropdown-notifications-list scrollable-container">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <img src="../../assets/img/avatars/1.png" alt
                                                        class="w-px-40 h-auto rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                                                <p class="mb-0">Won the monthly best seller gold badge</p>
                                                <small class="text-muted">1h ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                        class="bx bx-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Charles Franklin</h6>
                                                <p class="mb-0">Accepted your connection</p>
                                                <small class="text-muted">12hr ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                        class="bx bx-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <img src="../../assets/img/avatars/2.png" alt
                                                        class="w-px-40 h-auto rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">New Message ✉️</h6>
                                                <p class="mb-0">You have new message from Natalie</p>
                                                <small class="text-muted">1h ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                        class="bx bx-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <span class="avatar-initial rounded-circle bg-label-success"><i
                                                            class="bx bx-cart"></i></span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Whoo! You have new order 🛒 </h6>
                                                <p class="mb-0">ACME Inc. made new order $1,154</p>
                                                <small class="text-muted">1 day ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                        class="bx bx-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <img src="../../assets/img/avatars/9.png" alt
                                                        class="w-px-40 h-auto rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Application has been approved 🚀 </h6>
                                                <p class="mb-0">Your ABC project application has been approved.</p>
                                                <small class="text-muted">2 days ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                        class="bx bx-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <span class="avatar-initial rounded-circle bg-label-success"><i
                                                            class="bx bx-pie-chart-alt"></i></span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Monthly report is generated</h6>
                                                <p class="mb-0">July monthly financial report is generated </p>
                                                <small class="text-muted">3 days ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                        class="bx bx-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <img src="../../assets/img/avatars/5.png" alt
                                                        class="w-px-40 h-auto rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Send connection request</h6>
                                                <p class="mb-0">Peter sent you connection request</p>
                                                <small class="text-muted">4 days ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                        class="bx bx-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <img src="../../assets/img/avatars/6.png" alt
                                                        class="w-px-40 h-auto rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">New message from Jane</h6>
                                                <p class="mb-0">Your have new message from Jane</p>
                                                <small class="text-muted">5 days ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                        class="bx bx-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <span class="avatar-initial rounded-circle bg-label-warning"><i
                                                            class="bx bx-error"></i></span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">CPU is running high</h6>
                                                <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                                                <small class="text-muted">5 days ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                        class="bx bx-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-menu-footer border-top p-3">
                                <button class="btn btn-primary text-uppercase w-100">view all notifications</button>
                            </li>
                        </ul>
                    </li>
                    <!--/ Notification -->
                    <!-- User -->
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                            data-bs-toggle="dropdown">
                            <div>
                                <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="pages-account-settings-account.html">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div>
                                                <img src="../../assets/img/avatars/1.png" alt
                                                    class="w-px-40 h-auto rounded-circle">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <span class="fw-medium d-block"> {{ auth()->user()->first_name }} </span>
                                            <small class="text-muted">
                                                @foreach(auth()->user()->roles as $role) {{ $role->name }}
                                                @endforeach
                                            </small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="dashboard/user-profile">
                                    <i class="bx bx-user me-2"></i>
                                    <span class="align-middle">My Profile</span>
                                </a>
                            </li>

                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}">
                                {{-- <a class="dropdown-item" href="{{ route('logout') }}" target="_blank"> --}}
                                    <i class="bx bx-power-off me-2"></i>
                                    <span class="align-middle">Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--/ User -->
                </ul>
            </div>


            <!-- Search Small Screens -->
            <div class="navbar-search-wrapper search-input-wrapper  d-none">
                <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..."
                    aria-label="Search...">
                <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
            </div>
        </nav>
        <!-- / Navbar -->

        <!-- Content -->

        <div class="content-wrapper">
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

                    <!-- cart ptw -->
                    <div class="col-md-4 col-xxl-4 mb-4 order-4">
                        <div class="card h-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="card-title mb-0">
                                    <h5 class="m-0 me-2">Permit to Work</h5>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="deliveryExceptions"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="deliveryExceptions">
                                        <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="oilChart" width="200" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- script -->
                    <script type="text/javascript">
                        var oilCanvas = document.getElementById("oilChart");

                        Chart.defaults.global.defaultFontFamily = "Banshcraft";
                        Chart.defaults.global.defaultFontSize = 12;

                        var oilData = {
                            labels: ["Approved", "On Going", "Rejected"],
                            datasets: [{
                                data: [125, 20, 35],
                                backgroundColor: ["#7C66FF", "#E2D345", "#FF6464"],
                                borderColor: "white",
                                borderWidth: 0,
                            }, ],
                        };

                        var optionChart = {
                            legend: {
                                position: 'bottom',
                                labels: {
                                    usePointStyle: true,
                                    padding: 35,
                                    pointStyle: 'circle',
                                    boxWidth: 1,
                                }
                            }
                        };

                        var pieChart = new Chart(oilCanvas, {
                            type: "doughnut",
                            data: oilData,
                            options: optionChart
                        });
                    </script>
                    <!-- /Script -->
                    <!--/ cart ptw -->

                    <!-- cart entry permit -->
                    <div class="col-md-4 col-xxl-4 mb-4 order-4">
                        <div class="card h-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="card-title mb-0">
                                    <h5 class="m-0 me-2">Entry Permit</h5>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="deliveryExceptions"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="deliveryExceptions">
                                        <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="oilChart-2" width="200" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        var oilCanvas = document.getElementById("oilChart-2");

                        Chart.defaults.global.defaultFontFamily = "Banshcraft";
                        Chart.defaults.global.defaultFontSize = 12;

                        var oilData = {
                            labels: [
                                "Approved",
                                "On Going",
                                "Rejected"
                            ],
                            datasets: [{
                                data: [45, 20, 35],
                                backgroundColor: [
                                    "#7C66FF",
                                    "#E2D345",
                                    "#FF6464"
                                ],
                                borderColor: "white",
                                borderWidth: 0
                            }]
                        };

                        var chartOptions = {
                            legend: {
                                position: 'bottom',
                                labels: {
                                    usePointStyle: true,
                                    padding: 35,
                                    pointStyle: 'circle',
                                    boxWidth: 3
                                }
                            }
                        };

                        var pieChart = new Chart(oilCanvas, {
                            type: 'doughnut',
                            data: oilData,
                            options: chartOptions
                        });
                    </script>
                    <!--/ cart entry permit -->

                    <!-- Activity Timeline -->
                    <div class="col-md-4 col-xxl-4 mb-4 order-4">
                        <div class="card h-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="card-title mb-0">
                                    <h5 class="m-0 me-2">Activity Timeline</h5>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="deliveryExceptions"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="deliveryExceptions">
                                        <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="p-0 m-0">
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-success">
                                                <i class="bx bx-check-circle" data-bs-target="#successactivity"
                                                    data-bs-toggle="modal"></i>
                                            </span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-1 fw-normal">Autorization</h6>
                                                <small class="text-muted">
                                                    Site Controller
                                                </small>
                                            </div>
                                            <div class="user-progress">
                                                <h6 class="mb-0">16 Day Ago</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-success">
                                                <i class="bx bx-check-circle" data-bs-target="#successactivity"
                                                    data-bs-toggle="modal"></i>
                                            </span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-1 fw-normal">Permit Registry</h6>
                                                <small class="text-muted">
                                                    Permit Controller
                                                </small>
                                            </div>
                                            <div class="user-progress">
                                                <h6 class="mb-0">10 Days Ago</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-success"><i
                                                    class="bx bx-check-circle" data-bs-target="#ongoingactivity"
                                                    data-bs-toggle="modal"></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-1 fw-normal">Site Gas Test</h6>
                                                <small class="text-muted">
                                                    Authorized Gas Tester
                                                </small>
                                            </div>
                                            <div class="user-progress">
                                                <h6 class="mb-0">2 Days Ago</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-danger">
                                                <i class="bx bx-x" data-bs-target="#rejectactivity"
                                                    data-bs-toggle="modal"></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-1 fw-normal">Issue</h6>
                                                <small class="text-muted">
                                                    Area Authority
                                                </small>
                                            </div>
                                            <div class="user-progress">
                                                <h6 class="mb-0">10 Minute Ago</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label"><i
                                                    class="bx bx-check-circle"></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-1 fw-normal">Acceptance</h6>
                                                <small class="text-muted"> Performing Authority</small>
                                            </div>
                                            <div class="user-progress">
                                                <h6 class="mb-0"></h6>
                                            </div>
                                        </div>
                                    </li>
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
                                    <div class="swal2-html-container" id="swal2-html-container"
                                        style="text-align: center">Permit to Work Approved by Khaleed</div>
                                    <p></p>
                                    <form id="editUserForm" class="row g-6" onsubmit="return false">
                                        <div class="col-12 text-center">
                                            <button type="reset" class="swal2-confirm btn btn-primary"
                                                aria-label="Close" data-bs-dismiss="modal"
                                                style="text-align: center">OK</button>
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
                                    <div class="swal2-html-container" id="swal2-html-container"
                                        style="text-align: center">Permit to Work Rejected by Khaleed</div>
                                    <p></p>
                                    <form id="editUserForm" class="row g-6" onsubmit="return false">
                                        <div class="col-12 text-center">
                                            <button type="reset" class="swal2-confirm btn btn-primary"
                                                aria-label="Close" data-bs-dismiss="modal"
                                                style="text-align: center">OK</button>
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
                                    <div class="swal2-html-container" id="swal2-html-container"
                                        style="text-align: center">Permit to Work Waiting for Approve by Khaleed</div>
                                    <p></p>
                                    <form id="editUserForm" class="row g-6" onsubmit="return false">
                                        <div class="col-12 text-center">
                                            <button type="reset" class="swal2-confirm btn btn-primary"
                                                aria-label="Close" data-bs-dismiss="modal"
                                                style="text-align: center">OK</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ On Click -->

                </div>
            </div>
        </div>

        <!-- / Content -->
    </body>


@endsection
