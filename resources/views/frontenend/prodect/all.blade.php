<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasion Website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Allison&family=Cairo:wght@200;300;400;600;700;900&family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{asset('home_panel/assets/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('home_panel/assets/css/fromwork.css')}}">
<link rel="stylesheet" href="{{asset('home_panel/assets/css/min.css')}}">
<body>
  <header>
      <div class="container">
      <nav>
          <div class="logo">
              <h6><a href="{{route('frontend')}}">Fashion</a></h6>
          </div>
          <ul class="menubar">
              <li ><a data-link="home" class="active lists">Home</a></li>
              <li><a data-link="women"  class="lists">Women</a></li>
              <li ><a data-link="men" class="lists">Men</a></li>
              <li ><a data-link="footwer" class="lists">Footwear</a></li>
              <li ><a data-link="assess" class="lists">Accessories</a></li>
              <li><a href="{{url('category')}}">Category</a></li>
            {{-- <li>
                <a  href="{{ route('dashboard') }}">
             
                    {{ __('Dashbaord') }}
                </a>
            </li> --}}
                  
            @if(Route::has('login'))
            @auth
           @if (Auth::user()->role->name =='admin')
               @else
                
           @endif
           <li>
            @if (Auth::user()->role_id !=3)
            <a  href="{{ route('dashboard') }}">
           
             {{ __('Dashbaord') }}
         </a>
         <a  href="{{ route('logout') }}"
         onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
     </form>        
        </li> 
           @endif
            @else
            <li ><a href="{{route('login')}}">Login</a></li>
            <li ><a href="{{route('register')}}">Register</a></li>
            @endif

            @endif
          </ul>
          <div class="bar-mobile">
              <i class="fas fa-bars"></i>
          </div>
      </nav>
    </div>
  </header>
<section id="men" class="mens pt">
    <div class="container">
        <h3>{{ $category->name}}</h3>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo <br>consequatur dolorum sapiente molestias, pariatur ipsum eius! Veritatis dolores placeat aut!</p>

        <div class="men-container">
          
            @foreach ($prodects as $prod )
            <div class="men-base">
            <a href="{{url('viewcategory/'.$category->sulg.'/'.$prod->sulg)}}">
                <img src="{{asset('home_panel/assets/images/prodect/'.$prod->image)}}" alt="">
                <div class="welcome-men">
                    <h4>{{$prod->orgin_price}}</h4>
                    <div class="tax">
                      <h5>{{$prod->tax}}</h5>
                  </div>
                </div>
                <h5>{{$prod->name}}</h5>
                     </a>
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
</section>
<script src="{{asset('home_panel/assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="{{asset('home_panel/assets/js/all.min.js')}}"></script>
<script src="{{asset('home_panel/assets/js/custom.js')}}"></script>