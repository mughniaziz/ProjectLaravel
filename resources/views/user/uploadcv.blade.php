@extends('layouts.master')
@section('title','Upload CV')
@section('content')
<form action="{{route('upload.store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
        <div class="col">
            <label for="CV" class="col-form-label">Upload CV</label>
        </div>
        <div class="col">
            <div class="custom-file">
                <input type="file" name="userfile" id="userfile" class="custom-file-input" required>
                <label class="custom-file-label" for="customFile">Pilih Berkas PDF</label>
                <div class="text-danger">{!! $errors->first('userfile') !!} 
            </div>
        </div>
    </div>
    <div class="clear">

    </div>
    <div class="form-group">
        <div class="col pt-3">
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-raised btn-primary">Upload</button>
            </div>
        </div>
    </div>
@endsection
