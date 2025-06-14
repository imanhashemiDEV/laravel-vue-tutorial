<!DOCTYPE html>
<html lang="fa" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel-Vue</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @inertiaHead
        <link rel="shortcut icon" href="{{url('panel/assets/media/image/favicon.png')}}">
        <meta name="theme-color" content="#5867dd">
        <link rel="stylesheet" href="{{url('panel/vendors/bundle.css')}}" type="text/css">
        <link rel="stylesheet" href="{{url('panel/vendors/slick/slick.css')}}">
        <link rel="stylesheet" href="{{url('panel/vendors/slick/slick-theme.css')}}">
        <link rel="stylesheet" href="{{url('panel/assets/css/app.css')}}" type="text/css">
    </head>
    <body class="small-navigation">
        @inertia
        <script src="{{url('panel/vendors/bundle.js')}}"></script>
        <script src="{{url('panel/vendors/slick/slick.min.js')}}"></script>
        <script src="{{url('panel/assets/js/app.js')}}"></script>
    </body>
</html>
