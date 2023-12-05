@extends('layouts/contentNavbarLayout')

@section('title', 'PTW Management')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}">
    <link rel="stylesheet"
        href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet"
        href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet"
        href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">
    <link rel="stylesheet"
        href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
@endsection

@section('Row-Group-Css')
    <link rel="stylesheet"
        href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script
        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js">
    </script>
    <script
        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/js/tables-datatables-basic.js">
    </script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection

@section('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>

    <!-- Navbar -->
    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
        id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
            </a>
        </div>
        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
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
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
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
                                        <span class="fw-medium d-block">Manabu Mikami</span>
                                        <small class="text-muted">HRD</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/dashboard/user-profile">
                                <i class="bx bx-user me-2"></i>
                                <span class="align-middle">My Profile</span>
                            </a>
                        </li>

                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
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
                <!-- Title -->
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">
                        <span class="text-muted fw-light"></span>PTW Management</span>
                </h4>
                <!-- / Title -->

                <!-- Data Tables -->
                <div class="card">
                    <div class="card-datatable table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="card-header flex-column flex-md-row">
                                <div class="head-label text-center">
                                    <h5 class="card-title mb-0">Permit To Work</h5>
                                </div>
                                <div class="dt-action-buttons text-end pt-3 pt-md-0">
                                    <div class="dt-buttons">
                                        <button
                                            class="dt-button buttons-collection btn btn-label-primary btn-secondary me-2"
                                            tabindex="0" aria-controls="DataTables_Table_0" type="button"
                                            aria-haspopup="dialog" aria-expanded="false"><span><span
                                                    class="d-none d-sm-inline-block">Export Data</span></span>
                                        </button>
                                        <button class="dt-button create-new btn btn-primary" tabindex="0"
                                            aria-controls="DataTables_Table_0" type="button"><span><span
                                                    class="d-none d-sm-inline-block">Create PTW Request</span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Show -->
                                <!-- 
                                <div class="col">
                                    <div class="dataTables_length" id="example_length"><label>Show
                                            <select name="per_page" id="per_page" onchange="performSearch()">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                            entries</label>
                                    </div>
                                </div>
                                -->
                                <!-- Search/filtering -->
                                <!-- 
                                <div class="col-md-auto">
                                    <form action=" {{ route('ptwmanagement') }} " method="get" id="searchForm">
                                        <div id="" class="dataTables_filter">
                                            <input type="text" name="search" id="search" placeholder="Search"
                                                value=" {{ request('search') }} ">
                                        </div>
                                    </form>
                                </div>
                                -->
                                <div class="col-sm-6 col-md-8"></div>
                                <div class="col-6 col-md-4">
                                    <select name="status" id="status" class="form-select text-capitalize">
                                        <option value=""> Select Status </option>
                                        <option value="approved" class="text-capitalize">Approved</option>
                                        <option value="draft" class="text-capitalize">Draft</option>
                                        <option value="on going" class="text-capitalize">On Going</option>
                                        <option value="rejected" class="text-capitalize">Rejected</option>
                                    </select>
                                </div>
                                <div class="table-responsive mb-3">
                                    <table id="example" class="table datatable-project border-top">
                                        <thead>
                                            <tr>
                                                <th>@sortablelink('ptw_id', 'PTW ID')</th>
                                                <th>@sortablelink('project', 'PROJECT')</th>
                                                <th>@sortablelink('employee_name', 'EMPLOYEE NAME')</th>
                                                <th>@sortablelink('start_date', 'START DATE')</th>
                                                <th>@sortablelink('status', 'STATUS')</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="postTableBody">
                                            @foreach ($ptw_dummy as $item)
                                                <tr>
                                                    <td>{{ $item->ptw_id }}</td>
                                                    <td>{{ $item->project }}</td>
                                                    <td>{{ $item->employee_name }}</td>
                                                    <td>{{ $item->start_date }}</td>
                                                    <td>
                                                        @if ($item->status == 'approved')
                                                            <span class="badge bg-label-success">{{ $item->status }}</span>
                                                        @elseif($item->status == 'rejected')
                                                            <span class="badge bg-label-danger">{{ $item->status }}</span>
                                                        @elseif($item->status == 'on going')
                                                            <span
                                                                class="badge bg-label-warning">{{ $item->status }}</span>
                                                        @elseif($item->status == 'draft')
                                                            <span class="badge bg-label-dark">{{ $item->status }}</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-light"
                                                            style="padding: 1px"><iconify-icon icon="mdi:pencil"
                                                                style="color: #7c66ff;"></iconify-icon></button>
                                                        <button type="button" class="btn btn-outline-light"
                                                            style="padding: 1px"><iconify-icon icon="mdi:draft"
                                                                style="color: #7c66ff;"></iconify-icon></button>
                                                        <button type="button" class="btn btn-outline-light"
                                                            style="padding: 1px"><iconify-icon icon="mdi:trash"
                                                                style="color: #7c66ff;"></iconify-icon></button>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>
                                <div class="row">
                                    <div class="d-flex justify-content-end">
                                        {{ $ptw_dummy->links() }}
                                    </div>
                                </div>
                                <!--
                                                                    <div class="row">
                                                                                <div class="col-sm-12 col-md-12">
                                                                                    <div class="dataTables_paginate paging_simple_numbers"
                                                                                        id="DataTables_Table_0_paginate">
                                                                                        <ul class="pagination">
                                                                                            <li class="page-item first">
                                                                                                <a class="page-link"
                                                                                                    href="http://127.0.0.1:8000/ptw-management/ptwmanagement?page=1"><i
                                                                                                        class="tf-icon bx bx-chevrons-left"></i></a>
                                                                                            </li>
                                                                                            <li class="paginate_button page-item ">
                                                                                                
                                                                                            </li>
                                                                                            <li class="page-item last">
                                                                                                <a class="page-link"
                                                                                                    href="http://127.0.0.1:8000/ptw-management/ptwmanagement?page=7"><i
                                                                                                        class="tf-icon bx bx-chevrons-right"></i></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-sm-12 col-md-6">
                                                                                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                                                                        aria-live="polite">Showing 1 to 5 of 100 entries</div>
                                                                                </div>

                                                                                <div class="col-sm-12 col-md-12">
                                                                                    <div class="dataTables_paginate paging_simple_numbers"
                                                                                        id="DataTables_Table_0_paginate">
                                                                                        <ul class="pagination">
                                                                                            <li class="page-item first">
                                                                                                <a class="page-link" href="javascript:void(0);"><i
                                                                                                        class="tf-icon bx bx-chevrons-left"></i></a>
                                                                                            </li>
                                                                                            <li class="page-item prev">
                                                                                                <a class="page-link" href="javascript:void(0);"><i
                                                                                                        class="tf-icon bx bx-chevron-left"></i></a>
                                                                                            </li>
                                                                                            <li class="paginate_button page-item active"><a href="#"
                                                                                                    aria-controls="DataTables_Table_0" role="link"
                                                                                                    aria-current="page" data-dt-idx="0" tabindex="0"
                                                                                                    class="page-link">1</a></li>
                                                                                            <li class="paginate_button page-item "><a href="#"
                                                                                                    aria-controls="DataTables_Table_0" role="link" data-dt-idx="1"
                                                                                                    tabindex="0" class="page-link">2</a></li>
                                                                                            <li class="paginate_button page-item "><a href="#"
                                                                                                    aria-controls="DataTables_Table_0" role="link" data-dt-idx="2"
                                                                                                    tabindex="0" class="page-link">3</a></li>
                                                                                            <li class="paginate_button page-item "><a href="#"
                                                                                                    aria-controls="DataTables_Table_0" role="link" data-dt-idx="3"
                                                                                                    tabindex="0" class="page-link">4</a></li>
                                                                                            <li class="paginate_button page-item "><a href="#"
                                                                                                    aria-controls="DataTables_Table_0" role="link" data-dt-idx="4"
                                                                                                    tabindex="0" class="page-link">5</a></li>
                                                                                            <li class="paginate_button page-item disabled"
                                                                                                id="DataTables_Table_0_ellipsis"><a aria-controls="DataTables_Table_0"
                                                                                                    aria-disabled="true" role="link" data-dt-idx="ellipsis"
                                                                                                    tabindex="0" class="page-link">…</a></li>
                                                                                            <li class="paginate_button page-item "><a href="#"
                                                                                                    aria-controls="DataTables_Table_0" role="link"
                                                                                                    data-dt-idx="14" tabindex="0" class="page-link">15</a></li>
                                                                                            <li class="page-item next">
                                                                                                <a class="page-link" href="javascript:void(0);"><i
                                                                                                        class="tf-icon bx bx-chevron-right"></i></a>
                                                                                            </li>
                                                                                            <li class="page-item last">
                                                                                                <a class="page-link" href="javascript:void(0);"><i
                                                                                                        class="tf-icon bx bx-chevrons-right"></i></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                    </div>
                                                    -->
                            </div>
                        </div>
                    </div>
                    <!-- / Data Tables -->

                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->

    <script>
        new DataTable('#example', {
            pagingType: 'full_numbers'
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        document.getElementById('status').addEventListener('change', function() {
            var selectedStatus = this.value;
            axios.get('/ptw-management/ptwmanagement', { params: { status: selectedStatus } })
                .then(response => {
                    // Update the table body with the filtered results
                    document.getElementById('postTableBody').innerHTML = '';
    
                    response.data.forEach(post => {
                        var newRow = document.getElementById('postTableBody').insertRow();
                        newRow.innerHTML = '<td>' + post.ptw_id + '</td><td>' + post.project + '</td><td>' + post.employee_name + '</td><td>' + post.start_date + '</td><td>' + post.status + '</td><td>' + post.action + '</td>';
                    });
                })
                .catch(error => console.error(error));
        });
    </script>

@endsection
