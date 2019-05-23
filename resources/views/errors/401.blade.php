<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>401 Unauthorized</title>

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/all.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet">
</head>
<body>
    <div class="card border-grey border-lighten-3 px-2 row mb-0">
        <div class="card-header no-border pb-1">
            <div class="card-body">
                <h2 class="error-code text-center mb-2">401</h2>
                <h3 class="text-uppercase text-center">Unauthorized</h3>
            </div>
        </div>
        <div class="card-content px-2">
            <div class="row py-2">
                <div class="col-12">
                    @if(Auth::user()->hasRole('user'))
                        <a href="{{url('user')}}" class="btn btn-primary btn-block btn-lg"><i class="fas fa-home"></i> Back to Home</a>
                    @endif

                    @if (Auth::user()->hasRole('admin'))
                    <a href="{{url('admin')}}" class="btn btn-primary btn-block btn-lg"><i class="fas fa-home"></i> Back to Home</a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="footer text-center">AppKerja &reg; Copyright 2019 &copy;</div>

    <script src="{{asset('js/jquery-3.4.1.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/all.js')}}"></script>
    <script src="{{asset('js/fontwaesome.js')}}"></script>
</body>
</html>