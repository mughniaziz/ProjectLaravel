@extends('layouts.master')
@section('title','List Jobs')

@section('content')
    <h2> List Jobs </h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nama Pekerjaan</th>
                <th>Deskripsi Pekerjaan</th>
                <th>Option Pekerjaan</th>
            </tr>
        </thead>
        @foreach ($jobs as $job)
        <tbody>
            <tr>
                <td>{!! $job->n_pekerjaan !!}</td>
                <td>{!! $job->d_pekerjaan !!}</td>
                <td><form action="{{route('admin.destroy',$job->id)}}" method="POST" class="form-group">
                    {{csrf_field()}} {{method_field('DELETE')}}
                    <button class="btn btn-raised">Delete</button>
                </form>
                </td>
            </tr>
        </tbody>
    @endforeach
    </table>
@endsection