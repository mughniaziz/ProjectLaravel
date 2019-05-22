@extends('layouts.master')
@section('title','Upload CV')
@section('content')
<form action="{{route('upload.update',Auth::user()->hascv->id)}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}} {{method_field('PUT')}}
    <div class="form-group">
        <div class="col">
            <label for="CV" class="col-form-label">Upload CV</label>
        </div>
        <div class="col">
            <div class="custom-file">
                <input type="file" name="userfile" id="userfile" class="custom-file-input" required>
                <label class="custom-file-label" for="customFile">Pilih Berkas PDF</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col d-flex justify-content-center">
            <button type="submit" class="btn btn-raised btn-primary">Upload</button>
        </div>
    </div>
@endsection
