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
              <li><a href="{{url('category')}}">Category</a></li>
              <li ><a data-link="assess" class="lists">Accessories</a></li>
              <li>
                  <a href="{{url('showcart')}}">
                  Add Carts
            </a>
            
            </li>
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
  <section class="homes" id="home">
      <div class="home-silder silder1">
          <div class="welcome-msg">
              <h1 class="text-uppercas">SomeThing Is Better</h1>
              <p>Fashoin Lorem</p>
          </div>
      </div>
      <div class="home-silder silder2">
          <div class="welcome-msg">
              <h1 class="text-uppercas">SomeThing Is Better</h1>
              <p>Fashoin Lorem</p>
          </div>
      </div>
      <div class="home-silder silder3">
          <div class="welcome-msg">
              <h1 class="text-uppercas">SomeThing Is Better</h1>
              <p>Fashoin Lorem</p>
          </div>
      </div>
      <div class="home-silder silder4">
          <div class="welcome-msg">
              <h1 class="text-uppercas">SomeThing Is Better</h1>
              <p>Fashoin Lorem</p>
          </div>
      </div>
  </section>
  <!-- End Section Home -->
  <section class="abouts pt " id="women">
      <div class="container">
          <h3>Offer Man Women</h3>
          <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>Eaque, nulla fuga! Nostrum eos culpa</p>
          <div class="about-container">
              <div class="about-abse">
                  <div class="img-base">
                    <img src="{{asset('home_panel/assets/images/about/tamara-bellis-3t6rfsCaWiQ-unsplash.jpg')}}" >
                  </div>
                  <div class="desc">
                      <h2 class="pink">Hot Collection</h2>
                      <h4>Nwe Trand For  Women</h4>
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>Eaque, nulla fuga! Nostrum eos culpa <br>consectetur repellat ratione eius ullam non?</p>
                      <button type="submit">Shop Now</button>
                  </div>
              </div>
              <div class="about-abse">
                 <div class="img-base">
                    <img src="{{asset('home_panel/assets/images/about/rene-ranisch-bYlqNjbiROs-unsplash.jpg')}}" alt="">
                    <div class="welcome-about">
                        <h4>View Cllection</h4>
                    </div>
                 </div>
               
                 <div class="img-base">
                     <img src="{{asset('home_panel/assets/images/about/mahdi-bafande-Qn3ivhGjPNI-unsplash.jpg')}}" alt="">
                 </div>
              </div>
          </div>
      </div>
  </section>
  <!-- End Section About Here -->
   @yield('content')
  <!-- End Section Men Here -->
  <div class="fqa pt">
      <div class="container">
          <h3>Fqa Fashion</h3>
          <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>Eaque, nulla fuga! Nostrum eos culpa</p>
         <div class="fqa-container">
             <div class="fqa-base">
                <div class="conbox">
                <div class="label">
                 <h5>Fashion One</h5>
                </div>
                <div class="desc">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo sint nostrum nobis placeat. Sunt fuga itaque possimus omnis dignissimos quod.</p>
                </div>
                </div>
                <div class="conbox">
                <div class="label">
                 <h5>Fashion One</h5>
                </div>
                <div class="desc">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos minima perferendis provident repellat tempore dicta accusantium incidunt temporibus officia unde.</p>
                </div>
                </div>
                <div class="conbox">
                <div class="label">
                 <h5>Fashion One</h5>
                </div>
                <div class="desc">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi sint aperiam, rem repellendus fuga quia odio quo. Nulla, sunt tenetur!</p>
                </div>
                </div>
                <div class="conbox">
                <div class="label">
                 <h5>Fashion One</h5>
                </div>
                <div class="desc">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aperiam id labore architecto magni ipsam distinctio delectus nesciunt culpa tempora.</p>
                </div>
                </div>
                <div class="conbox">
                <div class="label">
                 <h5>Fashion One</h5>
                </div>
                <div class="desc">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In esse nemo doloribus nam facere fugit deleniti odio nobis inventore cupiditate.</p>
                </div>
                </div>
             </div>
             <div class="fqa-base">
                 <div class="image-base">
                     <img src="{{asset('home_panel/assets/images/feature_prod_02.jpg')}}" alt="">
                 </div>
                 <div class="image-base">
                     <img src="{{asset('home_panel/assets/images/feature_prod_03.jpg')}}" alt="">
                 </div>
             </div>
         </div>
      </div>
  </div>
  
<section id="footwer" class="footwers pt"> 
     <h3>Offer footwer</h3>
      <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>Eaque, nulla fuga! Nostrum eos culpa</p>
     <div class="fowes-container">
         <div class="fowe-base">
             <div class="image-bases">
                <img src="{{asset('home_panel/assets/images/freestocks-_3Q3tsJ01nc-unsplash.jpg')}}" alt="">
                 <div class="fewwor-welcome">
                      <h4>70% Off</h4>
                        <h1>Tao Kinben Na ?</h1>
                 </div>
             </div>
         </div>
         <div class="fowe-base">
             <div class="image-bases">
                <img src="{{asset('home_panel/assets/images/andrew-neel-fqoYO9MjLLQ-unsplash.jpg')}}" alt="">
                 <div class="fewwor-welcome">
                    <h2 class="text-uppercas">Amr Cheehara Khartrap Na</h2>                    
                    <h5><span class="pink">Cheara</span> Do Ki koy<h5>
                    
                 </div>
             </div>
     </div>
    </div>
</section>
{{-- end Section Footwer --}}

  

{{-- End Category Here --}}
<section class="tast pt">
 <div class="container">
  <i class="fas fa-quote-left"></i>
  <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>Eaque, nulla fuga! Nostrum eos culpa</p>
 
 <div class="tas-container text-center">
 <div class="tast-base">
   <img src="{{asset('home_panel/assets/images/tastmation/shop_05.jpg')}}">
   <div class="texxt-center">
    <h4 class="text-uppercase">Md Shahin alame</h4>
    <h5>Ceo Of TTcm</h5>
   </div>
 </div>
 <div class="tast-base">
   <img src="{{asset('home_panel/assets/images/tastmation/shop_07.jpg')}}">
      <div class="texxt-center">
    <h4 class="text-uppercase">Md Shahin alame</h4>
    <h5>Ceo Of TTcm</h5>
   </div>
 </div>
 <div class="tast-base">
   <img src="{{asset('home_panel/assets/images/tastmation/shop_10.jpg')}}">
      <div class="texxt-center">
    <h4 class="text-uppercase">Md Shahin alame</h4>
    <h5>Ceo Of TTcm</h5>
   </div>
 </div>
 <div class="tast-base">
   <img src="{{asset('home_panel/assets/images/tastmation/shop_11.jpg')}}">
      <div class="texxt-center">
    <h4 class="text-uppercase">Md Shahin alame</h4>
    <h5>Ceo Of TTcm</h5>
   </div>
 </div>
 </div>
 </div>
</section>
{{-- End Section Tastmion --}}
<div class="blog pt">
<div class="container">
    <h3>lists Blog</h3>
    <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>Eaque, nulla fuga! Nostrum eos culpa</p>
<div class="owl-carousel owl-theme">
<div class="blog-baase">
<img src="{{asset('home_panel/assets/images/blog/featured-1.jpg')}}" >
<div class="blog-welcome">
<h2>Some Headline Here</h2>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur adipisci labore molestiae harum, praesentium eius optio. Exercitationem vitae non eos!</p>
<button>Red More</button>
</div>
</div>
<div class="blog-baase">
<img src="{{asset('home_panel/assets/images/blog/featured-2.jpg')}}" >
<div class="blog-welcome">
<h2>Some Headline Here</h2>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur adipisci labore molestiae harum, praesentium eius optio. Exercitationem vitae non eos!</p>
<button>Red More</button>
</div>
</div>
<div class="blog-baase">
<img src="{{asset('home_panel/assets/images/blog/featured-3.jpg')}}" >
<div class="blog-welcome">
<h2>Some Headline Here</h2>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur adipisci labore molestiae harum, praesentium eius optio. Exercitationem vitae non eos!</p>
<button>Red More</button>
</div>
</div>
</div>
</div>
</div>
{{-- End Secction Blog Here --}}
<section class="tabs pt">
    <div class="container">
        <h3>Shop app Brand</h3>
        <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>Eaque, nulla fuga! Nostrum eos culpa</p>
     <div class="owl-carousel owl-theme">
         <div class="tab-base">
             <img src="{{asset('home_panel/assets/images/R.jpg')}}">
         </div>
         <div class="tab-base">
             <img src="{{asset('home_panel/assets/images/logo-oppo.png')}}">
         </div>
         <div class="tab-base">
             <img src="{{asset('home_panel/assets/images/logo-one.png')}}">
         </div>
         <div class="tab-base">
             <img src="{{asset('home_panel/assets/images/logo-godrej.png')}}">
         </div>
         <div class="tab-base">
            <img src="{{asset('home_panel/assets/images/logo-coca-cola.png')}}">
        </div>
        <div class="tab-base">
            <img src="{{asset('home_panel/assets/images/R.jpg')}}">
        </div>
     </div>
    </div>
</section>
{{-- End Section Tabs --}}
<footer class="pt">
    <div class="container">
     <div class="footer-container">
      <div class="footer-base">
          <h4 class="text-uppercase">Shops Brand</h4>
          <ul>
            <li><a href="">New in</a></li>
            <li><a href="">Women</a></li>
            <li><a href="">Men</a></li>
            <li><a href="">Scuhe Shoes</a></li>
            <li><a href="">Bags & Accession</a></li>
            <li><a href="">Top brand</a></li>
            <li><a href="">Sale & Specail Offers</a></li>
            <li><a href="">Look Book</a></li>  
          </ul>
      </div>
      <div class="footer-base">
          <h4 class="text-uppercase">Information</h4>
          <ul>
            <li><a href="">About Us</a></li>
            <li><a href="">Customer Service</a></li>
            <li><a href="">New Collection</a></li>
            <li><a href="">Beast Service</a></li>
            <li><a href="">Manufactures</a></li>
            <li><a href="">Privacy policy</a></li>
            <li><a href="">Trems & condition</a></li>
            <li><a href="">Bolg</a></li>   
          </ul>
      </div>
      <div class="footer-base">
          <h4 class="text-uppercase">Customer Service</h4>
         <ul>
            <li><a href="">Search Trems</a></li>
            <li><a href="">Advinced Search</a></li>
            <li><a href="">Orders and Returns</a></li>
            <li><a href="">Contact Us</a></li>
            <li><a href="">Rass</a></li>
            <li><a href="">Help & Fqas</a></li>
            <li><a href="">Consultant</a></li>
            <li><a href="">Store Locations</a></li>  
         </ul>
      </div>
      <div class="footer-base">
          <h4 class="text-uppercase">NewSrleter</h4>
          <p>Sign Up for News Leter</p>
          <input type="text" placeholder="Type Your E-mail">
          <button type="submit">Subcript</button>
          <div class="footer-icons">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-behance"></i>
            <i class="fab fa-tumblr"></i>
            <i class="fab fa-vimeo-v"></i>
          </div>
      </div>
     </div>
    </div>
</footer>
{{-- End Footer Here --}}
<div class="footer-end">
   <div class="container">
       <nav>
           <div class="logs">
            <p>&copy2021 ELLA Fashion Store Shopify</p>
           </div>
           <ul>
            <li class="text-uppercase"><a href="#"></a>Vice</li>
            <li ><a href="#"></a>Master Card</li>
            <li ><a href="#"></a>Pay Pai</li>
           </ul>
       </nav>
   </div>
   </div>
   {{-- End Footer End Section --}}

   <div class="ladder pt">
          <div class="container">
            <div class="lader-container">
                <img src="{{asset('home_panel/assets/images/loader.gif')}}" alt="">
               </div>
          </div>
       </div>
</div>
{{-- End Section Ladder Here --}}

<div class="models pt">
    <div class="container">
        <img src="{{asset('home_panel/assets/images/scroll-img.png')}}">
    </div>
</div>
{{-- End Section Scrllo Top Here --}}
</body>

<script src="{{asset('home_panel/assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="{{asset('home_panel/assets/js/all.min.js')}}"></script>
<script src="{{asset('home_panel/assets/js/custom.js')}}"></script>
</html>
