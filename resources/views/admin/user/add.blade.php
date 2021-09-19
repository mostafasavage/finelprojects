@extends('layouts.admin')
@section('content')
    <div class="user m-3 p-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="color:#fff">Page Create User
                    <a href="{{route('user.index')}}" class="btn btn-dark float-right py-2">Back</a>
                    <div class="card-body">
                    <form method="POST" action="{{route('user.store')}}" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">User Name</label>
                            <input type="text" name="name" class="form-control @error('name') alert alert-danger  @enderror">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Email Address</label>
                            <input type="email" name="email" class="form-control @error('email') alert alert-danger  @enderror">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control @error('password') alert alert-danger  @enderror">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Phone</label>
                            <input type="number" name="phone" class="form-control @error('phone') alert alert-danger  @enderror">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Address</label>
                           <textarea name="address" class="form-control @error('address') alert alert-danger  @enderror"  cols="5" rows="5"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <select class="form-control bg-dark @error('role_id') alert alert-danger  @enderror"  name="role_id">
                                <option selected>Role Id</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                              </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-info">Create New User</button>
                        </div>
                    </div>
                    </form>
                    </div>
                </h3>
            </div>
        </div>
    </div>
@endsection