@extends('layouts.master')

@section('title','Homepages Welcome')

@section('content')
        <h2> Hallo, {{Auth::user()->name}}</h2>
        @foreach ($jobs as $job)
        <div class="card card-body form-group">
            <h4>{!! $job->n_pekerjaan !!}</h4>
            <div>{!! $job->d_pekerjaan !!}</div>
            <div class="col-lg-9">
            <a href="{{route('lamar',$job->id)}}" class="btn btn-raised btn-primary">Lamar Pekerjaan</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection