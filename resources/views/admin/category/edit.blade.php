@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-tilte" style="color:#fff;">Page Create New Category
                <a href="{{route('cate.index')}}" class="btn btn-dark float-right">Back</a>
    
            </h5>
            <div class="card-body">
                <form action="{{route('cate.update' , $cat->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Category Name</label>
                        <input type="text" class="form-control" name="name" value="{{$cat->name}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Category Sulg</label>
                        <input type="text" class="form-control" name="sulg" value="{{$cat->sulg}}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Category Description</label>
                        <textarea name="description" id="" cols="5" rows="5" class="form-control">{{$cat->description}}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Category Stuts</label>
                        <input type="checkbox" name="stuts" {{$cat->stuts == '1' ? 'checked' : ''}}>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Category Popuer</label>
                        <input type="checkbox" name="popuer" {{$cat->popuer == '1' ? 'checked' : ''}}>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Category Meattitle</label>
                        <textarea name="meat_title" id="" cols="5" rows="5" class="form-control">{{$cat->meat_title}}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Category Meatdescript</label>
                        <textarea name="meat_descript" id="" cols="5" rows="5" class="form-control">{{$cat->meat_descript}}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Category Meatkeywords</label>
                        <textarea name="meat_keywords" id="" cols="5" rows="5" class="form-control">{{$cat->meat_keywords}}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Category Tax</label>
                        <input type="text" name="tax" class="form-control" value="{{$cat->tax}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Category Price</label>
                        <input type="text" name="price" class="form-control" value="{{$cat->price}}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Category Image</label>
                        <input type="file" name="image" class="form-control">
                        <img src="{{asset('home_panel/assets/images/category/'.$cat->image)}}" height="100px" width="100px" alt="">
                    </div>
                    <div class="col-md-12 mb-3">
                        
                        <button type="submit" class="btn btn-success">Update Category</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
