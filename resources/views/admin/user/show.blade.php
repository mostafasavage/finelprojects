@extends('layouts.admin')
@section('content')
    <div class="user m-3 p-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="color:#fff">Page Show All Members
                    <a href="{{route('user.index')}}" class="btn btn-dark float-right py-2">Back</a>
                    <div class="card-body">
                    <form method="POST" action="{{route('user.show' , $user->id)}}" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">User Name</label>
                            <input type="text" name="name" value="{{$user->name}}" class="form-control @error('name') alert alert-danger  @enderror">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Email Address</label>
                            <input type="email"  name="email" value="{{$user->email}}"  class="form-control @error('email') alert alert-danger  @enderror">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password" value="{{$user->password}}" class="form-control @error('password') alert alert-danger  @enderror">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Phone</label>
                            <input type="number" name="phone" value="{{$user->phone}}" class="form-control @error('phone') alert alert-danger  @enderror">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Address</label>
                           <textarea name="address"  class="form-control @error('address') alert alert-danger  @enderror"  cols="5" rows="5">{{$user->address}}</textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                            <img src="{{asset('admin_panel/assets/img/'.$user->image)}}" height="100px" width="100px" alt="">
                        </div>
                        <div class="col-md-12 mb-3">
                            <input type="text" value="{{$user->role->name}}" class="form-control">
                        </div>
                    </div>
                    </form>
                    </div>
                </h3>
            </div>
        </div>
    </div>
@endsection