<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Detail</title>

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/all.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet">
</head>
<body>
    <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <div class="col">
                <label class="col-form-label" for="user_id" hidden>User ID : </label>
            </div>
            <div class="col">
                <input type="hidden" name="user_id" class="form-control" value="{{Auth::user()->id}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="col">
                <label class="col-form-label" for="Nama Lengkap">Nama Lengkap : </label>
            </div>
            <div class="col">
                <input type="text" name="nama" class="form-control" value="{{Auth::user()->name}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="col">
                <label for="Email" class="col-from-label">E-Mail : </label>
            </div>
            <div class="col">
                <input type="text" name="email" class="form-control" value="{{Auth::user()->email}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="col">
                <label for="Alamat" class="col-form-label">Alamat</label>
            </div>
            <div class="col">
                <textarea class="form-control" rows="2" name="alamat" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Gender" class="col-form-label">Gender</label>
                        <input type="text" name="gender" id="gender" class="form-control" value="{{Auth::user()->gender}}" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="tanggal" class="col-form-label">Tanggal Lahir</label>
                        <input class="form-control" type="date" name="ttl" id="ttl" value="{{Auth::user()->ttl}}" readonly>
                    </div>
                </div>  
            </div>
        </div> 
        <div class="form-group">
            <div class="col">
                <label for="Pendidikan" class="col-form-label">Pendidikan Terakhir</label>   
            </div>
            <div class="col">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="SD" class="col-form-label">SD</label>
                        <input type="text" name="sd" id="sd" class="form-control" required>    
                    </div>
                    <div class="form-group col-md-6">
                        <label for="SMP" class="col-form-label">SMP</label>   
                        <input type="text" name="smp" id="smp" class="form-control" required> 
                    </div>    
                    <div class="form-group col-md-6">
                        <label for="SMA" class="col-form-label">SMA</label>
                        <input type="text" name="sma" id="sma" class="form-control" required>    
                    </div>
                    <div class="form-group col-md-6">
                        <label for="UNIVERSITAS" class="col-form-label">UNIVERSITAS</label>   
                        <input type="text" name="universitas" id="universitas" class="form-control" required> 
                    </div>    
                </div>  
            </div>  
        </div>
        <div class="form-group">
            <div class="col">
                <label for="Kemampuan" class="col-form-label">Kemampuan</label>
            </div>
            <div class="col">
                <textarea name="kemampuan" id="kemampuan" rows="2" class="form-control" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col">
                <div class="form-row">
                    <div class="col-md-8 form-group">
                        <button type="submit" class="btn btn-raised btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="footer text-center">AppKerja &reg; Copyright 2019 &copy;</div>

    <script src="{{asset('js/jquery-3.4.1.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/all.js')}}"></script>
    <script src="{{asset('js/fontwaesome.js')}}"></script>
</body>
</html>
    
