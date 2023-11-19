@extends('layouts/contentNavbarLayout')

@section('title', 'User - Profile')

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
                            <a class="dropdown-item" href="pages-profile-user.html">
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
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard / </span><span
                        class="text-muted fw-light"></span> My Profile
                </h4>

                <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                    <!-- User Card -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="user-avatar-section">
                                <div class=" d-flex align-items-center flex-column">
                                    <img class="img-fluid rounded my-4"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/10.png"
                                        height="110" width="110" alt="User avatar" />
                                    <div class="user-info text-center">
                                        <h4 class="mb-2">Manabu Mikami</h4>
                                        <span class="badge bg-label-secondary">HRD</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-around flex-wrap my-4 py-3">
                                <div class="d-flex align-items-start me-4 mt-3 gap-3">
                                    <span class="badge bg-label-primary p-2 rounded"><i
                                            class='bx bx-check bx-sm'></i></span>
                                    <div>
                                        <h5 class="mb-0">Permit To Work</h5>
                                        <span>Approved</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mt-3 gap-3">
                                    <span class="badge bg-label-primary p-2 rounded"><i
                                            class='bx bx-check bx-sm'></i></span>
                                    <div>
                                        <h5 class="mb-0">Entry Permit</h5>
                                        <span>Approved</span>
                                    </div>
                                </div>
                            </div>
                            <h5 class="pb-2 border-bottom mb-4">Details</h5>
                            <div class="info-container">
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <span class="fw-medium me-2">Full Name: </span>
                                        <span>Manabu Mikami</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="fw-medium me-2">Email:</span>
                                        <span>Manabumik32@gmail.com</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="fw-medium me-2">Role:</span>
                                        <span>Jungler</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="fw-medium me-2">Contact:</span>
                                        <span>(123) 456-7890</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="fw-medium me-2">Address</span>
                                        <span>303-277 State Route 29, Australia</span>
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-center pt-3">
                                    <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser"
                                        data-bs-toggle="modal">Edit</a>
                                    <a href="javascript:;" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /User Card -->

                    <!-- Edit User Modal -->
                    <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                            <div class="modal-content p-3 p-md-5">
                                <div class="modal-body">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    <div class="text-center mb-4">
                                        <h3>Edit User Information</h3>
                                        <p>Updating user details will receive a privacy audit.</p>
                                    </div>
                                    <form id="editUserForm" class="row g-3" onsubmit="return false">
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="modalEditUserFirstName">First Name</label>
                                            <input type="text" id="modalEditUserFirstName"
                                                name="modalEditUserFirstName" class="form-control" placeholder="John" />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="modalEditUserLastName">Last Name</label>
                                            <input type="text" id="modalEditUserLastName" name="modalEditUserLastName"
                                                class="form-control" placeholder="Doe" />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="modalEditUserEmail">Email</label>
                                            <input type="text" id="modalEditUserEmail" name="modalEditUserEmail"
                                                class="form-control" placeholder="example@domain.com" />
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="modalEditTaxID">Role</label>
                                            <input type="text" id="modalEditTaxID" name="modalEditTaxID"
                                                class="form-control modal-edit-tax-id" placeholder="HRD" />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="modalEditUserPhone">Phone Number</label>
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text">+1</span>
                                                <input type="text" id="modalEditUserPhone" name="modalEditUserPhone"
                                                    class="form-control phone-number-mask" placeholder="202 555 0111" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="modalEditAddress">Address</label>
                                            <input type="text" id="modalEditAddress" name="modalEditAddress" class="form-control modal-edit-address" placeholder="State Route 46, Australia" />
                                          </div>
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                            <button type="reset" class="btn btn-label-secondary"
                                                data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Edit User Modal -->
                </div>
                <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                    <!-- Project table -->
                    <div class="card mb-4">
                        <h5 class="card-header">Permit to Work</h5>
                        <p></p>

                        <div class="table-responsive mb-3">
                            <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
                            <table  id="example" class="table datatable-project border-top">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Project</th>
                                        <th>Start Date</th>
                                        <th>Progress</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ptw-1</td>
                                        <td>5/10/2023</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 100%;"
                                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                            </div>
                                        </td>
                                        <td>Approved</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Ptw-2</td>
                                        <td>6/10/2023</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 75%;"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                            </div>
                                        </td>
                                        <td>On Going</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Ptw-3</td>
                                        <td>7/10/2023</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                            </div>
                                        </td>
                                        <td>On Going</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Ptw-4</td>
                                        <td>8/10/2023</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                            </div>
                                        </td>
                                        <td>On Going</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Ptw-5</td>
                                        <td>9/10/2023</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 20%;"
                                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">20%</div>
                                            </div>
                                        </td>
                                        <td>On Going</td>
                                    </tr>
                                </tbody>
                            </table>
                            <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
                            <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
                            <script type="text/javascript">
                                new DataTable('#example');
                            </script>
                        </div>
                    </div>
                    <!-- /Project table -->
                </div>
            </div>
        </div>
    </div>

    <!-- / Content -->

@endsection
