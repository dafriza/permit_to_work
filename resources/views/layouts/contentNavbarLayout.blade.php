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
                    @yield('content')
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
