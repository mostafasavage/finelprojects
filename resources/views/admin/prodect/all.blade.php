@extends('layouts.admin')
@section('content')
    <div class="prod-m-3 p-3">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="color:#fff">Prodect Table Show
                        @if (Auth::user()->role_id ==1)
                        <a href="{{route('prod.create')}}" class="btn btn-info float-right py-2">Add New User</a>
                        @endif
                        </h3>
                    <div class="card-body">
                        <table class="table text-center" id="datatable">
                            <thead>
                              <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ( $prodects as $prod )
                                    
                               
                              <tr>
                                <td>{{$prod->id}}</td>
                                <td>{{$prod->name}}</td>
                                <td>{{$prod->description}}</td>
                               <td>{{$prod->category->name}}</td>
                                <td>
                            <img src="{{asset('home_panel/assets/images/prodect/'.$prod->image)}}" width="100px" height="100px" alt="">
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{route('prod.show' ,$prod->id)}}" class="btn btn-primary">Show</a>
                                        @if (Auth::user()->role_id ==1)
                                            <a href="{{route('prod.edit' , $prod->id)}}" class="btn btn-success">Edit</a>
                                            <form action="{{route('prod.destroy' , $prod->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                          
                                            <button type="submit" class="btn btn-danger">Remove</button>
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