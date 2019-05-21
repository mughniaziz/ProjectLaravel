@extends('layouts.master')

@section('title','Manage Users')

@section('content')
    <div class="row">
        <h2> Manage User </h2>
    </div>
    <table class="table table-striped">
        <thead>
            <th>Name</th>
            <th>E-Mail</th>
            <th>Option</th>
        </thead>
        @foreach ($user as $users)
        <tbody>
            <tr>
                <td>{!! $users->name !!}</td>
                <td>{!! $users->email !!}</td>
                <td>Masih Kosong</td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection