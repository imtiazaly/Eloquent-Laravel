@extends('layout');

@section('title')
    Update User
@endsection

@section('content')
   <form action="{{route('user.update' , $users->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <lable for='username' class="form-lable">User Name</lable>
        <input type="text" name="username" value="{{$users->name}}"  class="form-control @error('username') is-invalid @enderror">
       <span class="text-danger">
            @error('username')
                {{$message}}
            @enderror
       </span>
    </div>
    <div class="mb-3">
        <lable for='useremail' class="form-lable">User Email</lable>
        <input type="email" value="{{$users->email}}" name="useremail" class="form-control @error('username') is-invalid @enderror">
        <span class="text-danger">
            @error('useremail')
                {{$message}}
            @enderror
       </span>
    </div>
    <div class="mb-3">
        <lable for='userage' class="form-lable">User Age</lable>
        <input type="number" value="{{$users->age}}" name="userage" class="form-control @error('username') is-invalid @enderror">
        <span class="text-danger">
            @error('userage')
                {{$message}}
            @enderror
       </span>
    </div>
    <div class="mb-3">
        <lable for='usercity' class="form-lable">User City</lable>
        <input type="text" value="{{$users->city}}" name="usercity" class="form-control @error('username') is-invalid @enderror">
        <span class="text-danger">
            @error('usercity')
                {{$message}}
            @enderror
       </span>
    </div>
    <div class="mb-3">
        <input type="submit" value="save" class="btn btn-success">
    </div>
   </form>
@endsection