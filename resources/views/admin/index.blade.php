@extends('layouts.master')

@section('title','Homepages Admin')

@section('content')
        <h2> Hallo Admin {{Auth::user()->name}} </h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama File</th>
                    <th>Option</th>
                    <th>Download</th>
                    <th>Status</th>
                </tr>
            </thead>
            @foreach ($tamcv as $cv)
                <tbody>
                    <tr>
                        <td>{!! $cv !!}</td>
                        <td>Masih Kosong</td>
                        <td><a href="{{$cv}}">Download</a></td>
                        <td>Unread</td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection