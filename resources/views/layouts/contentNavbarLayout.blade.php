@extends('layouts/commonMaster')

@php
    /* Display elements */
    $contentNavbar = true;
    $containerNav = $containerNav ?? 'container-xxl';
    $isNavbar = $isNavbar ?? true;
    $isMenu = $isMenu ?? true;
    $isFlex = $isFlex ?? false;
    $isFooter = $isFooter ?? true;
    $customizerHidden = $customizerHidden ?? '';
    $pricingModal = $pricingModal ?? false;

    /* HTML Classes */
    $navbarDetached = 'navbar-detached';

    /* Content classes */
    $container = $container ?? 'container-xxl';

@endphp

@section('layoutContent')
    <div class="layout-wrapper layout-content-navbar {{ $isMenu ? '' : 'layout-without-menu' }}">
        <div class="layout-container">
            @if ($isMenu)
                @include('layouts/sections/menu/verticalMenu')
            @endif
            <!-- Layout page -->
            <div class="layout-page">
                <!-- BEGIN: Navbar-->
                @include('layouts/sections/navbar/navbar-2')
                <!-- END: Navbar-->
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            @hasSection('titleHead')
                                <h4 class="fw-bold py-3 mb-4"><span
                                        class="text-muted fw-light">{{ str()->headline(request()->path()) }}
                                    </span> / @yield('titleHead')
                                </h4>
                            @endif
                            @sectionMissing('titleHead')
                                <h4 class="fw-bold py-3 mb-4">{{ ucwords(implode(' ', explode('_', request()->path()))) }}
                                </h4>
                            @endif
                        </div>
                        @yield('content')
                    </div>
                </div>
                <!-- / Content -->
                <!-- Footer -->
                @if ($isFooter)
                    @include('layouts/sections/footer/footer')
                @endif
                <!-- / Footer -->
                <div class="content-backdrop fade"></div>
            </div>
            <!--/ Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    @if ($isMenu)
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    @endif
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    <!-- / Layout wrapper -->
@endsection
