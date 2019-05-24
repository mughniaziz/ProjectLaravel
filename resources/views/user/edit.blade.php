@extends('layouts.master')

@section('title','Edit Profile')
@section('content')
    <form action="{{route('user.update',Auth::user()->userdetail->id)}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}} {{method_field('PUT')}}
        <div class="form-group">
            <div class="col">
                <label class="col-form-label" for="user_id">User ID : </label>
            </div>
            <div class="col">
                <input type="text" name="user_id" class="form-control" value="{{Auth::user()->id}}" readonly>
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
            <textarea class="form-control" rows="2" name="alamat" required>{{$detail->alamat}}</textarea>
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
                    <div class="form-group col-md-4">
                        <label for="notelp" class="col-form-label">Nomor Telepon</label>
                    <input class="form-control" type="text" name="notelp" id="notelp" value="{{$detail->notelp}}" required>
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
                        <input type="text" name="sd" id="sd" class="form-control" value="{{$detail->sd}}">    
                        </div>
                        <div class="form-group col-md-6">
                            <label for="SMP" class="col-form-label">SMP</label>   
                        <input type="text" name="smp" id="smp" class="form-control" value="{{$detail->smp}}"> 
                        </div>    
                        <div class="form-group col-md-6">
                            <label for="SMA" class="col-form-label">SMA</label>
                        <input type="text" name="sma" id="sma" class="form-control" value="{{$detail->sma}}">    
                        </div>
                        <div class="form-group col-md-6">
                            <label for="UNIVERSITAS" class="col-form-label">UNIVERSITAS</label>   
                        <input type="text" name="universitas" id="universitas" class="form-control" placeholder="Nama Kampus - Jurusan" value="{{$detail->universitas}}"> 
                        </div>    
                    </div>  
                </div>  
            </div>
            <div class="form-group">
                <div class="col">
                    <label for="Kemampuan" class="col-form-label">Kemampuan</label>
                </div>
                <div class="col">
                <textarea name="kemampuan" id="kemampuan" rows="2" class="form-control" required>{{$detail->kemampuan}}</textarea>
                </div>
            </div>
            {{-- <div class="form-group">
                <div class="col">
                    <label for="CV" class="col-form-label">Upload CV</label>
                </div>
                <div class="col">
                    <div class="custom-file">
                        <input type="file" name="userfile" id="userfile" class="custom-file-input">
                        <label class="custom-file-label" for="customFile">Pilih Berkas</label>
                    </div>
                </div>
            </div> --}}
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
@endsection