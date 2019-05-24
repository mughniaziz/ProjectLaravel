@extends('layouts.master')

@section('title','Homepages Admin')

@section('content')
        <h2> Hallo Admin {{Auth::user()->name}} </h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama File</th>
                    <th>Status</th>
                    <th>Option</th>
                    <th>Download</th>
                </tr>
            </thead>
            @foreach ($showcv as $cv)
                <tbody>
                    <tr>
                        <td>{!! $cv->file !!}</td>
                        <td>{!! $cv->statfile !!}
                    <td class="d-flex"><form class="form-group" method="POST" action="{{route('admin.update',$cv->id)}}">
                        {{csrf_field()}} {{method_field('PUT')}}
                        <button name="submit" type="submit" class="btn btn-raised btn-primary mr-1" value="Accept">Accept</button>
                    </form>
                    <form class="form-group" method="POST" action="{{route('admin.update',$cv->id)}}">
                        {{csrf_field()}} {{method_field('PUT')}}
                        <button name="submit" type="submit" class="btn btn-raised btn-danger ml-1" value="Reject">Reject</button>
                    </form></td>
                        <td><a href="{{$cv->file}}">Download</a></td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection