@extends('layouts.master')

@section('title','Home Pages')

@section('content')
        <h2>Lowongan Pekerjaan</h2>
        @foreach ($jobs as $job)
        <div class="card card-body form-group">
            <h4>{!! $job->n_pekerjaan !!}</h4>
            <div>{!! $job->d_pekerjaan !!}</div>
        </div>
    @endforeach
    </div>
@endsection