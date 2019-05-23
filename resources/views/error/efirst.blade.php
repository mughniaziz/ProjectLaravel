@extends('layouts.master')

@section('content')
    <div class="form-group">
        <div class="text-center">
            <strong>Lengkapi Data Diri Anda terlebih Dahulu</strong>
        </div>
    </div>
    <div class="form-group">
        <div class="d-flex justify-content-center">
            <a href="{{route('user.create')}}" class="btn btn-raised">Isi User Detail</a>
        </div>
    </div>
@endsection