@php
    use App\Model\CategoryProduct;                   
    $productCategoryObject = new CategoryProduct();
@endphp

@extends('layouts.app')
@section('title', 'Home')
@section('content')

<!-----  SLIDER  3  ----->

<div id="my-carousel" style="margin-bottom: 148px;margin-left:-15px;margin-right:-15px;" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
  
  <div class="carousel-inner">
    @foreach ($sliders as $key => $slider)
      <div class="carousel-item  @if($key == 0) {{'active'}} @endif">
           <img class="slider-background" src="{{asset($slider->background)}}" alt="First slide">

           <div class="row slider-iner">
             <div class="col-md-6">
               <img src="{{asset($slider->photo)}}" alt="">
             </div>

             <div class="col-md-6 slider-iner-dtl">
               <p style="margin: 0px;" >  {{$slider->intro}} </p>
               <h2> {{$slider->product_name}} </h2>
               <p class="ctg" >{{$slider->short_description}}</p>
               <h4> <span style="background: black; color: white; padding: 5px;">@if ($slider->coupon != null) Use Coupon: {{$slider->coupon}} @endif </span></h4>
               <br>
               <a href="{{$slider->link}}"><button class="btn btn slider-buy-now" id="slider-buy-now" >Buy Now</button></a>
             </div>
           </div>

      </div>
       @endforeach   
  </div>
  <a class="carousel-control-prev" href="#my-carousel" role="button"  data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#my-carousel"  role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
  </a>
</div>





<!-----  SLIDER  3  ----->

    <!-----catagory------>
    <div class="row" style="margin-top: -140px;">
      <div class="col-md-8">
        <div class="row">
          @php
              $firstThree = array_slice($fourCategories, 0, 3);
              $lastOne    = array_slice($fourCategories, 3, 1);

          @endphp
          @foreach ($firstThree as $key => $three)

            <div class="@if($key == 0 || $key == 1) {{'col-md-6'}} @else {{'col-md-12'}} @endif" style="margin-top: 10px;padding-right: 0px;">
              <div class="card" style="border: none;">
                <img class="crd1" src="{{asset($three->photo)}}" alt="">
                <a href="#" >
                  <div class="text-block">
                    {{-- <p style="margin: 0px;">Creative </p> --}}
                    <p class="txblck" style="margin: 0px;font-size: 20px;padding-left: 7px;padding-right: 7px;"><a style="text-decoration: none;" href="{{route('front.products', [$three->category_id, strtolower(str_replace(' ', '-', $three->name))])}}">{{$three->title}}</a>
                    </p>
                  </div>
                </a>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <div class="col-md-4" style="margin-top: 10px;padding-left: 0px;">
        <div class="card" style="border: none;">
          <img class="crd2"
            src="{{asset($lastOne[0]->photo)}}" alt="">
          <a href="#">
            <div class="text-block">
              <p class="txblck" style="margin: 0px;font-size: 20px;padding-left: 7px;padding-right: 7px;"><a style="text-decoration: none;" href="{{route('front.products', [$lastOne[0]->category_id, strtolower(str_replace(' ', '-', $lastOne[0]->name))])}}">{{$lastOne[0]->title}}</a> </p>
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
                      <a href="{{route('front.product', $product->slug)}}">
                        <button type="button" class="btn btn icon">
                          <i class="fa fa-heart"></i>
                        </button>
                      </a>
                      <a href="{{route('front.product', $product->slug)}}">
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
                        style="font-size: 20px;font-weight: bold;"> ৳ </span> 
                         </p>
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
                      <a href="{{route('front.product', $product->slug)}}">
                        <button type="button" class="btn btn icon">
                        <i class="fa fa-heart"></i>
                        </button>
                      </a>
                      <a href="{{route('front.product', $product->slug)}}">
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
      @foreach ($lastCategories as $item)
      
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset($item->background)}}" alt="First slide">
        <div class="row in-slider">
          <div class="col-md-6">
            <div class="hero-image">
              <div class="hero-text hero-text1 hero-animation ">
                <a href="#"><img id="banner" src="{{asset($item->photo)}}" alt=""></a>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="hero-image">
              <div id="b2b" class="hero-text hero-text2 banner ">
                <h1>{{$item->title}}</h1>
                <a href="{{route('front.products', [$item->category_id, strtolower(str_replace(' ', '-', $item->name))])}}" class="btn" style="border-radius: 20px; border: 1px solid black; ">Buy Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <!--------Featured Items---------->
    <div class="container featured-items">
      <div class="row" style="text-align: center;">
        <div class="col-md-12">
          <h2>Upcomming Items</h2>
          <p>Find a bright ideal to suit your taste with our great selection.</p>
        </div>
      </div>
      <div class="row">
        @foreach ($upcomingProducts as $upcoming)

        <div class="col-md-3" style="padding-right:1px; padding-left:1px;">
          <div class="containe">
            <img src="{{asset($upcoming->cover)}}" alt="Avatar" class="image">
            <div class="overlay">
              <div class="btn-group">
                <a href="{{route('front.product', $upcoming->slug)}}">
                  <button type="button" class="btn btn icon">
                    <i class="fa fa-heart"></i>
                  </button>
                </a>
                <a href="{{route('front.product', $upcoming->slug)}}">
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
              <p><small>@php
                        $productCategories = $productCategoryObject->getProductCategories($upcoming->id);
                    @endphp
                    @foreach ($productCategories as $key => $item)
                        @if ($key > 0) {{', '}} @endif {{$item->name}}
                    @endforeach</small></p>
              <p style="margin-bottom: 5px;">{{$upcoming->name}}</p>
              <p><span style="font-size: 20px;font-weight: bold;">{{$upcoming->current_price}}</span><span
                  style="font-size: 20px;font-weight: bold;">/=</span> </p>
            </div>
          </div>
        </div>

        @endforeach
      </div>
    </div>
@endsection

