@extends('layouts.admin')
@section('content')
    <div class="user m-3 p-3">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="color:#fff">Show All User tables
                    @if (Auth::user()->role_id ==1)
                    <a href="{{route('user.create')}}" class="btn btn-info float-right py-2">Add New User</a>
                    @endif
                    </h3>
                    <div class="card-body">
                        <table class="table table-dark table-hover text-center" id="datatable">
                            <thead>
                              <tr>
                                <th scope="col">Id</th>
                                <th scope="col">UserName</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Address</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user )
                              <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role->name}}</td>
                                <td>{{$user->address}}</td>
                                <td>{{$user->phone}}</td>
                                <td>
                                  <img src="{{asset('admin_panel/assets/img/'.$user->image)}}" width ="100px" height="100px" alt="">
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{route('user.show' , $user->id)}}" class="btn btn-primary">Show</a>
                                        @if (Auth::user()->role_id==1)
                                            <a href="{{route('user.edit',$user->id)}}" class="btn btn-success">Edit</a>
                                            <form method="POST" action="{{route('user.destroy',$user->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Rmove</button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection