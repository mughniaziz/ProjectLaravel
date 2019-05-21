@extends('layouts.master')
@section('title','Tambah Pekerjaan')

@section('content')
    <h2> Add New Jobs </h2>
    <form action="{{route('admin.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <div class="col">
                <label for="title" class="control-form-label">Nama Pekerjaan</label>
            </div>
            <div class="col">
                <input type="text" name="jobs" id="jobs" class="form-control" required>
            </div>
            <div class="form-group">
                <div class="col">
                    <label for="description" class="control-form-label">Deskripsi Pekerjaan</label>
                </div>
                <div class="col">
                    <textarea name="desc" id="desc" rows="10" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col">
                    <button type="submit" class="btn btn-raised btn-primary">Simpan</button>
                </div>
            </div>
        </div>
@endsection