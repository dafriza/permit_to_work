<!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

<link rel="stylesheet" href="{{ asset(mix('assets/vendor/fonts/boxicons.css')) }}" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/core.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/theme-default.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/css/demo.css')) }}" />

<link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')) }}" />

<!-- Vendor Styles -->
@yield('vendor-style')


<!-- Page Styles -->
@yield('page-style')
<style>
    body {
        font-family: 'Open Sans', sans-serif;
        font-size: .9rem;
        color: #607D8B;
    }

    .pgb .step {
        text-align: center;
        position: relative;
    }

    .pgb h2 {
        font-size: 1.3rem;
    }

    .pgb .step p {
        position: absolute;
        height: 60px;
        width: 100%;
        text-align: center;
        display: block;
        z-index: 3;
        color: #fff;
        font-size: 160%;
        line-height: 55px;
        opacity: .7;
    }

    .pgb .active.step p {
        opacity: 1;
        font-weight: 600;
    }

    .pgb .img-circle {
        display: inline-block;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: #9E9E9E;
        /* border:4px solid #fff; */
    }

    .pgb .complete .img-circle {
        background-color: #AEA3F2;
    }

    .pgb .active .img-circle {
        background-color: #AEA3F2;
    }

    .pgb .step .img-circle:before {
        content: "";
        display: block;
        background: #9E9E9E;
        height: 4px;
        width: 50%;
        position: absolute;
        bottom: 50%;
        left: 0;
        z-index: -1;
        margin-right: 24px;
    }

    .pgb .step .img-circle:after {
        content: "";
        display: block;
        background: #9E9E9E;
        height: 4px;
        width: 50%;
        position: absolute;
        bottom: 50%;
        left: 50%;
        z-index: -1;
    }

    .pgb .step.active .img-circle:after {
        background: #9E9E9E;
    }

    .pgb .step.complete .img-circle:after,
    .pgb .step.active .img-circle:before {
        background: #AEA3F2;
    }

    .pgb .step:last-of-type .img-circle:after,
    .pgb .step:first-of-type .img-circle:before {
        display: none;
    }
</style>
