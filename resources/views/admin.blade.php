<!DOCTYPE html>
<html class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" data-assets-path="{{url('panel/assets/')}}" data-template="vertical-menu-template-starter" data-theme="theme-default" dir="rtl" lang="fa">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel-Vue</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @inertiaHead
        <link href="{{url('panel/assets/img/favicon/favicon.ico')}}" rel="icon" type="image/x-icon"/>
        <link href="{{url('panel/assets/vendor/fonts/tabler-icons.css')}}" rel="stylesheet"/>
        <!-- <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" /> -->
        <!-- <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" /> -->
        <!-- Core CSS -->
        <link class="template-customizer-core-css" href="{{url('panel/assets/vendor/css/rtl/core.css')}}" rel="stylesheet"/>
        <link class="template-customizer-theme-css" href="{{url('panel/assets/vendor/css/rtl/theme-default.css')}}" rel="stylesheet"/>
        <link href="{{url('panel/assets/css/demo.css')}}" rel="stylesheet"/>
        <!-- Vendors CSS -->
        <link href="{{url('panel/assets/vendor/libs/node-waves/node-waves.css')}}" rel="stylesheet"/>
        <link href="{{url('panel/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet"/>
        <!-- Page CSS -->
        <!-- Helpers -->
        <script src="{{url('panel/assets/vendor/js/helpers.js')}}"></script>
        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
        <script src="{{url('panel/assets/vendor/js/template-customizer.js')}}"></script>
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="{{url('panel/assets/js/config.js')}}"></script>
        <!-- Better experience of RTL -->
        <link href="{{url('panel/assets/css/rtl.css')}}" rel="stylesheet"/>
    </head>
    <body>
        @inertia
        <script src="{{url('panel/assets/vendor/libs/jquery/jquery.js')}}"></script>
        <script src="{{url('panel/assets/vendor/libs/popper/popper.js')}}"></script>
        <script src="{{url('panel/assets/vendor/js/bootstrap.js')}}"></script>
        <script src="{{url('panel/assets/vendor/libs/node-waves/node-waves.js')}}"></script>
        <script src="{{url('panel/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
        <script src="{{url('panel/assets/vendor/libs/hammer/hammer.js')}}"></script>
        <script src="{{url('panel/assets/vendor/js/menu.js')}}"></script>
        <!-- Vendors JS -->
        <!-- Main JS -->
        <script src="{{url('panel/assets/js/main.js')}}"></script>
    </body>
</html>
