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
                    <span class="badge bg-danger rounded-pill badge-notifications">{{count(auth()->user()->unreadNotifications)}}</span>
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
                            @php
                                $userNotif = auth()->user()->notifications;
                            @endphp
                            @foreach (auth()->user()->unreadNotifications as $notif)
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                {{-- {{dd($notif->data['sender'])}} --}}
                                                {{-- <span class="avatar-initial rounded-circle bg-label-danger">CF</span> --}}
                                                <img src="https://ui-avatars.com/api/?name={{ $notif->data['sender']['first_name'] . ' ' . $notif->data['sender']['last_name'] }}&background=5f61e6&color=fff"
                                                    alt="{{ $notif->data['sender']['first_name'] . ' ' . $notif->data['sender']['last_name'] }}"
                                                    class="w-px-40 h-auto rounded-circle">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">{{ $notif->data['sender']['first_name'] . ' ' .$notif->data['sender']['last_name']}}</h6>
                                            <p class="mb-0">{{$notif->data['message']}}</p>
                                            {{-- <small class="text-muted">{{now()->diff($notif->created_at)->format('%Y-%m-%d - %h jam %I menit')}} ago</small> --}}
                                            <small class="text-muted">{{now()->diffForHumans($notif->created_at)}}</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                    class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                    class="bx bx-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
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
                        <img src="https://ui-avatars.com/api/?name={{ auth()->user()->full_name }}&background=5f61e6&color=fff"
                            alt="{{ auth()->user()->full_name }}" class="w-px-40 h-auto rounded-circle">
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="pages-account-settings-account.html">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div>
                                        {{-- <img src="../../assets/img/avatars/1.png" alt --}}
                                        <img src="https://ui-avatars.com/api/?name={{ auth()->user()->full_name }}&background=5f61e6&color=fff"
                                            alt="{{ auth()->user()->full_name }}" class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-medium d-block">{{ auth()->user()->full_name }}</span>
                                    <small class="text-muted">{{ auth()->user()->role_name }}</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        {{-- <a class="dropdown-item" href="dashboard/user-profile"> --}}
                        <a class="dropdown-item" href="{{ route('user_profile.index') }}">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        {{-- <a class="dropdown-item" href="auth-login-cover.html" target="_blank"> --}}
                        <a class="dropdown-item" href="{{ route('logout') }}">
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
