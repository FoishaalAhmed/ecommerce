@php
    use App\Model\CategoryProduct;                   
    $productCategoryObject = new CategoryProduct();
@endphp

@extends('layouts.app')
@section('title', 'Home')
@section('content')
<!-----Slider----->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{asset('public/frontend/img/red Bac.png')}}" alt="First slide">
          <div class="row in-slider">
            <div class="col-md-6">
              <div class="hero-image">
                <div class="hero-text hero-text1 hero-animation ">
                  <img src="{{asset('public/frontend/img/redbacgraund.jpg')}}" alt="">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="hero-image">
                <div class="hero-text hero-text2 banner ">
                  <h1>”সর্বোপরি, একজন বিপ্লবীকে সবসময় দৃঢ়ভাবে বিশ্বের যেকোন প্রান্তে সংঘটিত যে কোনো অন্যায়-অবিচারের
                    বিরুদ্ধে রুখে দাড়াতে হবে”</h1>
                  <button class="btn" style="border-radius: 20px; border: 1px solid black; ">Hire me</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('public/frontend/img/black wall.webp')}}" alt="Second slide">
          <div class="row in-slider">
            <div class="col-md-6">
              <div class="hero-image">
                <div class="hero-text hero-text1 hero-animation2 ">
                  <img src="{{asset('public/frontend/img/bob3.jpg')}}" alt="">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="hero-image">
                <div class="hero-text hero-text2 banner ">
                  <h1>উঠো, দাঁড়াও, দাঁড়াও তোমার অধিকারের জন্য।</h1>
                  <button class="btn" style="border-radius: 20px; border: 1px solid black; ">Hire me</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('public/frontend/img/fef200.png')}}" alt="Third slide">
          <div class="row in-slider">
            <div class="col-md-6">
              <div class="hero-image">
                <div class="hero-text hero-text1 hero-animation3">
                  <img src="{{asset('public/frontend/img/caplin2.png')}}" alt="">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="hero-image">
                <div class="hero-text hero-text2 banner">
                  <h1>“এই বিশ্বে স্থায়ী কিছুই না, এমনকি আমাদের সমস্যাগুলোও না। “</h1>
                  <button class="btn" style="border-radius: 20px; border: 1px solid black; ">Hire me</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-----catagory------>
    <div class="row" style="margin-top: -140px;">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6" style="margin-top: 10px;padding-right: 0px;">
            <div class="card" style="border: none;">
              <img class="crd1" src="{{asset('public/frontend/img/black bacground.jpeg')}}" alt="">
              <a href="#">
                <div class="text-block">
                  <p style="margin: 0px;">Creative </p>
                  <p class="txblck" style="margin: 0px;font-size: 20px;padding-left: 7px;padding-right: 7px;">Kidswear
                  </p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6" style="margin-top: 10px;padding-right: 0px;">
            <div class="card" style="border: none;">
              <img class="crd1" src="{{asset('public/frontend/img/পোশাক.jpg')}}" alt="">
              <a href="#">
                <div class="text-block">
                  <p style="margin: 0px;">Creative </p>
                  <p class="txblck" style="margin: 0px;font-size: 20px;padding-left: 7px;padding-right: 7px;">Kidswear
                  </p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-12" style="margin-top: 10px;padding-right: 0px;">
            <div class="card" style="border: none;">
              <img class="crd1" src="{{asset('public/frontend/img/superfoods_1200.jpg')}}" alt="">
              <a href="#">
                <div class="text-block">
                  <p style="margin: 0px;">Creative </p>
                  <p class="txblck" style="margin: 0px;font-size: 20px;padding-left: 7px;padding-right: 7px;">Kidswear
                  </p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4" style="margin-top: 10px;padding-left: 0px;">
        <div class="card" style="border: none;">
          <img class="crd2"
            src="{{asset('public/frontend/img/winter-travel.jpg')}}" alt="">
          <a href="#">
            <div class="text-block">
              <p style="margin: 0px;">Creative </p>
              <p class="txblck" style="margin: 0px;font-size: 20px;padding-left: 7px;padding-right: 7px;">Kidswear </p>
            </div>
          </a>
        </div>
      </div>
    </div>
    <br><br><br>
    <!------Tab Menu---->
    <div class="row">
      <div class="col-md-12" style="text-align: center;margin: auto;">
        <h2 style="font-weight: bold;">Trending This Week</h2>
      </div>
      <div id="exTab1" class="container" style="max-width: 1300px;">
        <ul class="nav nav-pills">
          <li class="active">
            <a href="#1a" data-toggle="tab"><button style="background-color: transparent;border: none;"
                class="btn ">All</button></a>
          </li>
          @php
              $categoryCount = 2;
          @endphp

          @foreach ($categoryProducts as $category)
              
          
          <li><a href="#<?php echo $categoryCount; ?>a" data-toggle="tab"><button style="background-color: transparent;border: none;"
                class="btn ">{{$category->name}}</button></a>
          </li>

          @php
              $categoryCount++;
          @endphp

          @endforeach
        </ul>
        <div class="tab-content clearfix">
          <!----Mug----->
          <div class="tab-pane active" id="1a">
            <div class="row">
              @foreach ($products as $product)
              <div class="col-md-3" style="padding-right:1px; padding-left:1px;">
                <div class="containe">
                  <img src="{{asset($product->cover)}}" alt="Avatar" class="image">
                  <div class="overlay">
                    <div class="btn-group">
                      <a href="#">
                        <button type="button" class="btn btn icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                            class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path
                              d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                            <path
                              d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                          </svg>
                        </button>
                      </a>
                      <a href="#">
                        <button type="button" class="btn btn icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                            class="bi bi-eye" viewBox="0 0 16 16">
                            <path
                              d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path
                              d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                          </svg>
                        </button>
                      </a>
                    </div>
                  </div>
                  <div class="" style="color: black;text-align: center;">
                    <p><small>
                      @foreach ($product->categories as $key => $item)
                          @if ($key > 0) {{', '}} @endif {{$item->name}}
                      @endforeach
                    </small></p>
                    <p style="margin-bottom: 5px;">{{$product->name}}</p>
                    <p><span style="font-size: 20px;font-weight: bold;">{{$product->current_price}}</span><span
                        style="font-size: 20px;font-weight: bold;">/=</span> &nbsp; &nbsp; <span
                        style="color: red;"><del>@if ($product->previous_price != null)
                            
                         {{$product->previous_price}}/=@endif</del></span> </p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <!-----T-Shart----->
          @php
              $productCount = 2;
          @endphp
          @foreach ($categoryProducts as $category)

          

          <div class="tab-pane" id="<?php echo $productCount; ?>a">
            <div class="row">
              @foreach ($category->products as $product)
              
          
              <div class="col-md-3" style="padding-right:1px; padding-left:1px;">
                <div class="containe">
                  <img src="{{asset($product->cover)}}" alt="Avatar" class="image">
                  <div class="overlay">
                    <div class="btn-group">
                      <a href="#">
                        <button type="button" class="btn btn icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                            class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                          </svg>
                        </button>
                      </a>
                      <a href="#">
                        <button type="button" class="btn btn icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                            class="bi bi-eye" viewBox="0 0 16 16">
                            <path  d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                          </svg>
                        </button>
                      </a>
                    </div>
                  </div>
                  <div class="" style="color: black;text-align: center;">
                    @php
                        $productCategories = $productCategoryObject->getProductCategories($product->id);
                    @endphp
                    <p><small>@foreach ($productCategories as $key => $item)
                        @if ($key > 0) {{', '}} @endif {{$item->name}}
                    @endforeach</small></p>
                    <p style="margin-bottom: 5px;">{{$product->name}}</p>
                    <p><span style="font-size: 20px;font-weight: bold;">{{$product->current_price}}</span><span
                        style="font-size: 20px;font-weight: bold;">/=</span> &nbsp; &nbsp; <span
                        style="color: red;"><del> @if ($product->previous_price != null)
                            
                         {{$product->previous_price}}/=@endif</del></span> </p>
                  </div>
                </div>
              </div>

              @endforeach
            </div>
          </div>
          @php
              $productCount++;
          @endphp
          @endforeach
        </div>
      </div>
    </div>
    <!-----Banner----->
    <div id="b1b" class="container-fluid">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('public/frontend/img/red Bac.png')}}" alt="First slide">
        <div class="row in-slider">
          <div class="col-md-6">
            <div class="hero-image">
              <div class="hero-text hero-text1 hero-animation ">
                <a href="#"><img id="banner" src="{{asset('public/frontend/img/redbacgraund.jpg')}}" alt=""></a>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="hero-image">
              <div id="b2b" class="hero-text hero-text2 banner ">
                <h1>”সর্বোপরি, একজন বিপ্লবীকে সবসময় দৃঢ়ভাবে বিশ্বের যেকোন প্রান্তে সংঘটিত যে কোনো অন্যায়-অবিচারের
                  বিরুদ্ধে রুখে দাড়াতে হবে”</h1>
                <button class="btn" style="border-radius: 20px; border: 1px solid black; ">Hire me</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--------Featured Items---------->
    <div class="container featured-items">
      <div class="row" style="text-align: center;">
        <div class="col-md-12">
          <h2>Featured Items</h2>
          <p>Find a bright ideal to suit your taste with our great selection.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3" style="padding-right:1px; padding-left:1px;">
          <div class="containe">
            <img src="{{asset('public/frontend/img/mockup1-2.jpg')}}" alt="Avatar" class="image">
            <div class="overlay">
              <div class="btn-group">
                <a href="#">
                  <button type="button" class="btn btn icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                      class="bi bi-cart-plus" viewBox="0 0 16 16">
                      <path
                        d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                      <path
                        d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                    </svg>
                  </button>
                </a>
                <a href="#">
                  <button type="button" class="btn btn icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                      class="bi bi-eye" viewBox="0 0 16 16">
                      <path
                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                      <path
                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                    </svg>
                  </button>
                </a>
              </div>
            </div>
            <div class="" style="color: black;text-align: center;">
              <p><small>Durga Puja 2020, Kid, Kids, T-Shirts</small></p>
              <p style="margin-bottom: 5px;">Cute Maa Durga – Kids Round Neck Cotton T-Shirt</p>
              <p><span style="font-size: 20px;font-weight: bold;">650</span><span
                  style="font-size: 20px;font-weight: bold;">/=</span> &nbsp; &nbsp; <span
                  style="color: red;"><del>850/=</del></span> </p>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="padding-right:1px; padding-left:1px;">
          <div class="containe">
            <img src="{{asset('public/frontend/img/mockup1-31.jpg')}}" alt="Avatar" class="image">
            <div class="overlay">
              <div class="btn-group">
                <a href="#">
                  <button type="button" class="btn btn icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                      class="bi bi-cart-plus" viewBox="0 0 16 16">
                      <path
                        d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                      <path
                        d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                    </svg>
                  </button>
                </a>
                <a href="#">
                  <button type="button" class="btn btn icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                      class="bi bi-eye" viewBox="0 0 16 16">
                      <path
                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                      <path
                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                    </svg>
                  </button>
                </a>
              </div>
            </div>
            <div class="" style="color: black;text-align: center;">
              <p><small>Durga Puja 2020, Kid, Kids, T-Shirts</small></p>
              <p style="margin-bottom: 5px;">Cute Maa Durga – Kids Round Neck Cotton T-Shirt</p>
              <p><span style="font-size: 20px;font-weight: bold;">650</span><span
                  style="font-size: 20px;font-weight: bold;">/=</span> &nbsp; &nbsp; <span
                  style="color: red;"><del>850/=</del></span> </p>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="padding-right:1px; padding-left:1px;">
          <div class="containe">
            <img src="{{asset('public/frontend/img/bob01.jpg')}}" alt="Avatar" class="image">
            <div class="overlay">
              <div class="btn-group">
                <a href="#">
                  <button type="button" class="btn btn icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                      class="bi bi-cart-plus" viewBox="0 0 16 16">
                      <path
                        d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                      <path
                        d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                    </svg>
                  </button>
                </a>
                <a href="#">
                  <button type="button" class="btn btn icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                      class="bi bi-eye" viewBox="0 0 16 16">
                      <path
                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                      <path
                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                    </svg>
                  </button>
                </a>
              </div>
            </div>
            <div class="" style="color: black;text-align: center;">
              <p><small>Durga Puja 2020, Kid, Kids, T-Shirts</small></p>
              <p style="margin-bottom: 5px;">Cute Maa Durga – Kids Round Neck Cotton T-Shirt</p>
              <p><span style="font-size: 20px;font-weight: bold;">650</span><span
                  style="font-size: 20px;font-weight: bold;">/=</span> &nbsp; &nbsp; <span
                  style="color: red;"><del>850/=</del></span> </p>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="padding-right:1px; padding-left:1px;">
          <div class="containe">
            <img src="{{asset('public/frontend/img/black bacground.jpeg')}}" alt="Avatar" class="image">
            <div class="overlay">
              <div class="btn-group">
                <a href="#">
                  <button type="button" class="btn btn icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                      class="bi bi-cart-plus" viewBox="0 0 16 16">
                      <path
                        d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                      <path
                        d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                    </svg>
                  </button>
                </a>
                <a href="#">
                  <button type="button" class="btn btn icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                      class="bi bi-eye" viewBox="0 0 16 16">
                      <path
                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                      <path
                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                    </svg>
                  </button>
                </a>
              </div>
            </div>
            <div class="" style="color: black;text-align: center;">
              <p><small>Durga Puja 2020, Kid, Kids, T-Shirts</small></p>
              <p style="margin-bottom: 5px;">Cute Maa Durga – Kids Round Neck Cotton T-Shirt</p>
              <p><span style="font-size: 20px;font-weight: bold;">650</span><span
                  style="font-size: 20px;font-weight: bold;">/=</span> &nbsp; &nbsp; <span
                  style="color: red;"><del>850/=</del></span> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

