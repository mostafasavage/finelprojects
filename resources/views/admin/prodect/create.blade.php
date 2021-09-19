@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="color:#fff;">Page Create New Prodect
                <a href="{{route('prod.index')}}" class="btn btn-info float-right py-2">Back</a>   
            </h3>
            <div class="card-body">
                <form action="{{route('prod.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                    <div class="col-md-6 mb-3">
                    <label for="">Prodect Name</label>
                    <input type="text" name="name" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                    <label for="">Category Id</label>
                    <input type="number" name="cat_id" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                    <label for="">Orgin Price</label>
                    <input type="text" name="orgin_price" class="form-control">
                    </div>
                    
                    <div class="col-md-6 mb-3">
                    <label for="">Selling Price</label>
                    <input type="text" name="selling_price" class="form-control">
                    </div>
                    
                    <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="5" rows="5" class="form-control"></textarea>
                    </div>  
                    
                    <div class="col-md-12 mb-3">
                    <label for="">Small Description</label>
                    <input type="text" name="small_description" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" name="status">
                    </div>
                    
                    <div class="col-md-6 mb-3">
                    <label for="">Trending</label>
                    <input type="checkbox" name="trending">
                    </div>
                    <div class="col-md-6 mb-3">
                    <label for="">Sulg</label>
                    <input type="text" name="sulg" class="form-control">
                    </div>
                    
                    <div class="col-md-6 mb-3">
                    <label for="">Tax</label>
                    <input type="text" name="tax" class="form-control">
                    </div>
                    
                    <div class="col-md-6 mb-3">
                    <label for="">Qty</label>
                    <input type="text" name="qty" class="form-control">
                    </div>
                    
                    <div class="col-md-12 mb-3">
                    <label for="">Meat Title</label>
                    <textarea name="meat_title" id="" cols="5" rows="5" class="form-control"></textarea>
                    </div>  
                    
                    <div class="col-md-12 mb-3">
                    <label for="">Meat Kywlords</label>
                    <textarea name="meat_kywords" id="" cols="5" rows="5" class="form-control"></textarea>
                    </div>  
                    
                    <div class="col-md-12 mb-3">
                    <label for="">Meat Description</label>
                    <textarea name="meat_description" id="" cols="5" rows="5" class="form-control"></textarea>
                    </div>  
                    <div class="col-md-12 mb-3">
                    <label for="">Image Prodect</label>
                    <input type="file" name="image" class="form-control">
                    </div>  
                    <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary">Create New Prodect</button>
                    </div>                                                                                    
                    </div>
                    </form>
            </div>
        </div>
    </div>
@endsection
