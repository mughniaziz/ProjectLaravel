<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/all.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet">

</head>
<body>
    @include('shared.header')
    <div class="jumbotron text-center">
        <h1>App Kerja</h1>
        <h4>Layanan Untuk Anda Mencari Kerja <i class="fas fa-briefcase" style="font-size:48px"></i></h4>
    </div>
    

    <div class="container" style="margin-top:30px">
        @yield('content')
    </div>

    <div class="footer text-center">AppKerja &reg; Copyright 2019 &copy;</div>

    <script src="{{asset('js/jquery-3.4.1.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/all.js')}}"></script>
    <script src="{{asset('js/fontwaesome.js')}}"></script>

    <script>
            // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function() {
              var fileName = $(this).val().split("\\").pop();
              $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
    </script>
</body>
</html>

