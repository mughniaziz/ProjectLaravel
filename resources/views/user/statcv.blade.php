@extends('layouts.master')
@section('title','Status CV')
@section('content')
    <h3>Status CV</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama File</th>
                <th>Status</th>
            </tr>
        </thead>
            <tbody>
                <tr>
                    <td>{!! $statcv->file !!}</td>
                    <td>{!! $statcv->statfile !!}</td>
                </tr>
            </tbody>
    </table>
@endsection