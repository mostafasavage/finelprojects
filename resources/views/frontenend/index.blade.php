@extends('layouts.home')
@section('content')
<section id="men" class="mens pt">
    <div class="container">
        <h3>Futhert Items</h3>
        <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>Eaque, nulla fuga! Nostrum eos culpa</p>
        {{-- <div class="input-group">
      
        <div class="form-outline">
        <form method="GET" action="{{url('search')}}" style="float:right; padding:10px">
            <input type="search" name="search" class="form-control">
            <br>
            <input type="submit" value="Search" class="btn  btn-info" >
         
        </form>
        </div>
        </div> --}}
        <div class="men-container">
          
            @foreach ($prodect as $item )
            <div class="men-base">
            <a href="">
                <img src="{{asset('home_panel/assets/images/prodect/'.$item->image)}}" alt="">
                <div class="welcome-men">
                    <h4>{{$item->orgin_price}}</h4>
                    <div class="tax">
                      <h5>{{$item->tax}}</h5>
                  </div>
                </div>
                <h5>{{$item->name}}</h5>
                </a>
                <div class="input-group">
      
                    <div class="form-outline">
                    <form method="POST" action="{{url('addcart',$item->id)}}" style="float:right; padding:10px">
                        @csrf
                        <input type="number" value="1" min="1" name="qty" class="form-control">
                        <br>
                        <input type="submit" value="Add Cart" class="btn  btn-info" >
                     
                    </form>
                    </div>
                    </div>
                <br>
                <div class="star-color">
                  <i class="fas fa-star faq"></i>
                  <i class="fas fa-star faq"></i>
                  <i class="fas fa-star faq"></i>
                  <i class="fas fa-star faq"></i>
                 <i class="far fa-star "></i>
                  </div>
                <div class="hart">
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-cart-plus"></i>
                    <i class="fas fa-share-alt"></i>
                 </div>
            </div>
            @endforeach
            @if (method_exists($prodect ,'links'))
                
            
            <div class="d-flex justify-content-center">
                {!! $prodect->links() !!}
            </div>
            @endif
</section>
<section id="assess" class="assesst pt">
    <div class="container">
        <h3>Treding Item</h3>
        <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>Eaque, nulla fuga! Nostrum eos culpa</p>
        <div class="asset-container">
            @foreach ($cates as $itemsd)
            <div class="asse-base">
            <a href="{{url('viewcategory/'.$itemsd->sulg)}}">
                <img src="{{asset('home_panel/assets/images/category/'.$itemsd->image)}}" alt="">

                <div class="welcome-men">
                    <h4>{{$itemsd->price}}</h4>
                    <div class="tax">
                        <h5>{{$itemsd->tax}}</h5>
                    </div>
                  </div>
                  <h5>{{$itemsd->name}}</h5>
                  </a>
                  <div class="star-color">
                    <i class="fas fa-star faq"></i>
                    <i class="fas fa-star faq"></i>
                    <i class="fas fa-star faq"></i>
                    <i class="fas fa-star faq"></i>
                   <i class="far fa-star "></i>
                    </div>
                  <div class="hart">
                      <i class="fas fa-heart"></i>
                      <i class="fas fa-cart-plus"></i>
                      <i class="fas fa-share-alt"></i>
                  </div>
             
        </div>
        @endforeach
      
    </div>
</section>

@endsection