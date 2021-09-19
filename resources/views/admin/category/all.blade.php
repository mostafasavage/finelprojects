@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title" style="color: #fff;">Page Show Table Category
               @if (Auth::user()->role_id ==1)
               <a href="{{route('cate.create')}}" class="btn btn-info float-right ">Add New Category</a>
               @endif
            <h5>
                <table class="table" id="datatable">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($categors as $cate)
                            
                        
                      <tr>
                        
                        <td>{{$cate->id}}</td>
                        <td>{{$cate->name}}</td>
                        <td>{{$cate->description}}</td>
                        <td>
                        <img src="{{asset('home_panel/assets/images/category/'.$cate->image)}}" height="100px" width="100px" alt="">
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('cate.show' , $cate->id)}}" class="btn btn-primary">Show</a>
                                @if (Auth::user()->role_id ==1)
                                    <a href="{{route('cate.edit' , $cate->id)}}" class="btn btn-success">Edit</a>
                                    <form action="{{route('cate.destroy' , $cate->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
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
@endsection


