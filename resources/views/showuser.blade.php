@extends('layout');

@section('title')
    User Datails
@endsection

@section('content')
    <table class="table table-bordered table-striped">
        <tr>
            <th>ID : </th>
            <td>{{$users->id}}</td>
        </tr>
        <tr>
            <th>Name : </th>
            <td>{{$users->name}}</td>
        </tr>
        <tr>
            <th>Email : </th>
            <td>{{$users->email}}</td>
        </tr>
        <tr>
            <th>Age : </th>
            <td>{{$users->age}}</td>
        </tr>
        <tr>
            <th>City : </th>
            <td>{{$users->city}}</td>
        </tr>
    </table>
    <a href="{{route('user.index')}}" class="btn btn-danger btn-sm">Go Back</a>
@endsection