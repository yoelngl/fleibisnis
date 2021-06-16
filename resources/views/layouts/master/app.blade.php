<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    {{-- <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app"> --}}
    <meta name="author" content="PIXINVENT">
    <title>@yield('title') | Fleibisnis Admin</title>
    <link rel="apple-touch-icon" href="{{ asset('backend-assets/images/ico/apple-icon-120.html') }}">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/backend-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/vendors/css/vendors.min.css') }}">
    @yield('vendor')
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/css/components.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/css/themes/dark-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/css/themes/bordered-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/css/themes/semi-dark-layout.min.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/css/pages/page-auth.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/vendors/css/extensions/toastr.min.css') }}">
    @yield('css')

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend-css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- END: Custom CSS-->
    @livewireStyles()

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern {{ request()->is('admin/master/login') ? 'blank-page' : '' }}  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="{{ request()->is('admin/master/login') ? 'blank-page' : '' }} ">
    @if(request()->is('admin/master/login'))
        @yield('content')
    @else
        @livewire('layouts.master.header')

        @livewire('layouts.master.sidebar')

        @yield('content')
    @endif



    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('backend-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('backend-assets/js/core/app-menu.min.js') }}"></script>
    <script src="{{ asset('backend-assets/js/core/app.min.js') }}"></script>
    <script src="{{ asset('backend-assets/js/scripts/customizer.min.js') }}"></script>
    <script src="{{ asset('backend-assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('backend-assets/vendors/js/extensions/toastr.min.js') }}"></script>



    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->
    @livewireScripts()
    @stack('scripts')
    <script>
        $(window).on('livewire:load',  function(){
        if (feather) {
            feather.replace({ width: 14, height: 14 });
        }
        });
    </script>
  </body>
  <!-- END: Body-->

</html>
