<!DOCTYPE html>
<html lang="fa">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel-Vue</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @inertiaHead
        <link href="{{url('front/Css/Main.css')}}" rel="stylesheet" />
        <link href="{{url('front/Css/Menu-demo1.css')}}" rel="stylesheet" />
        <link href="{{url('front/Css/Style.css')}}" rel="stylesheet" />
    </head>
    <body class="rtl blog">
        @inertia
        <script src="{{url('front/Js/jquery.min.js')}}"></script>
        <script src="{{url('front/Js/bootstrap.min.js')}}"></script>
        <script src="{{url('front/Js/my-script.js')}}"></script>
    </body>
</html>
