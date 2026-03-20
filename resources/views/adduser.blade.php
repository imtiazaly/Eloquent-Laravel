@extends('layout');

@section('title')
    Add New User
@endsection

@section('content')
   <form action="{{route('user.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <lable for='username' class="form-lable">User Name</lable>
        <input type="text" name="username" value="{{old('username')}}" class="form-control @error('username') is-invalid @enderror">
       <span class="text-danger">
            @error('username')
                {{$message}}
            @enderror
       </span>
    </div>
    <div class="mb-3">
        <lable for='useremail' class="form-lable">User Email</lable>
        <input type="email" name="useremail" value="{{old('useremail')}}" class="form-control @error('useremail') is-invalid @enderror">
        <span class="text-danger">
            @error('useremail')
                {{$message}}
            @enderror
       </span>
    </div>
    <div class="mb-3">
        <lable for='userage' class="form-lable">User Age</lable>
        <input type="number" name="userage" value="{{old('userage')}}" class="form-control @error('userage') is-invalid @enderror">
        <span class="text-danger">
            @error('userage')
                {{$message}}
            @enderror
       </span>
    </div>
    <div class="mb-3">
        <lable for='usercity' class="form-lable">User City</lable>
        <input type="text" name="usercity" value="{{old('usercity')}}" class="form-control @error('usercity') is-invalid @enderror">
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