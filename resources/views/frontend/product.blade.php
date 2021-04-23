@php
    use App\Model\CategoryProduct;                   
    $productCategoryObject = new CategoryProduct();
@endphp

@extends('layouts.app')
@section('title', "{$product->name}")
@section('content')
<!---MAIN CONTENT-->
<div class="container-fluid" style="margin-bottom: 20px ;">
    <div class="dtl-2nd-nav">
        <div class="row" style="background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209));">
            <div class="container">
                <div class="row" style="text-align: center; padding-top: 10px; padding-bottom: 10px; ">
                    <div class="col-md-12" style="text-align: center;">
                        <a href="{{URL::to('/')}}" style="text-decoration: none;">Home</a> /
                        <a  style="text-decoration: none;">Products</a> /
                        <a style="text-decoration: none;"> {{$product->name}} </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cartView-wrapper -->
<div id="pdtls" class="cartView-wrapper my-2">
    <div class="nav-container-fluid container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="mb-5" style="margin-bottom: 5px">
                        <!-- cartVied-title -->
                        <h2 style="margin: 0px; padding-top: 20px; font-weight: bold;padding-bottom: 20px;
                            padding-left: 10px; ">{{$product->name}}</h2>
                        <hr style="margin: 2px;">
                    </div>
                    <!-- cartview-main-content -->
                    <div class="col-md-12">
                        <div class="row mt-3">
                            <!-- zoom-img-area -->
                            <div class="col-md-6 col-xl-3">
                                <div class="banner-img my-4">
                                    <img style="width: 100%;height: 295px;" src="{{asset($product->cover)}}" alt="product1" width="100%"
                                        height="auto;" class="block__pic">
                                    <div class="row">
                                        <div class="col py-2">
                                            <img src="{{asset($product->cover)}}" onerror="this.src= '{{asset($product->cover)}}'" width="100%"
                                                height="50px;" class="thumb">
                                        </div>
                                        @foreach ($productPhotos as $key => $item)
                                        <div class="col py-2">
                                            <img src="{{asset($item->photo)}}" onerror="this.src= '{{asset($item->photo)}}'" width="100%"
                                                height="50px;" class="thumb">
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- cartView-content-area -->
                            <div class="col-md-12 col-xl-6">
                                <div class="cartview-content">
                                    <hr>
                                    <!-- cartview-product-price -->
                                    <div class="row cartview-product-price">
                                        <div class="col-md-12">
                                            <div class="cv-product-price">
                                                <span>৳ {{$product->current_price}}</span>
                                            </div>
                                            <div class="cv-origin-block">
                                                <span class="font-14">
                                                <del style="color: #22222273;">@if ($product->previous_price != null) Tk. {{$product->previous_price}} @endif</del>&nbsp;
                                                <ins style="text-decoration: none;"> @if ($product->saving != null) - {{$product->saving}}/= %@endif</ins>
                                                </span>
                                            </div>
                                            <div class="cv-origin-block mt-3">
                                                <span class="font-14">Categories: <span>@foreach ($productCategories as $key => $category) @if ($key != 0) {{', '}} @endif {{$category->name}}  @endforeach</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($productColors->isNotEmpty())
                                    <!-- cartview-product-Color-->
                                    <div class="row cartview-product-Quantity ">
                                        <div class="col-md-12">
                                            <div class="cartview-product-Quantity">
                                                <span class="font-16">
                                                    <span style="color: #222222b8;">Color:</span>
                                                    <span class="price-input">
                                                        <select class="form1" name="color" id="color">
                                                            @foreach ($productColors as $color)
                                                            <option value="{{$color->name}}">{{$color->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @if ($productSizes->isNotEmpty())
                                    <!-- cartview-product-Size-->
                                    <div class="row cartview-product-Quantity ">
                                        <div class="col-md-12">
                                            <div class="cartview-product-Quantity">
                                                <span class="font-16">
                                                    <span style="color: #222222b8;">Size:</span>
                                                    <span class="price-input">
                                                        <select class="form2" name="size" id="size">
                                                            @foreach ($productSizes as $size)
                                                            <option value="{{$size->name}}">{{$size->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <!-- cartview-product-Quantity-->
                                    <div class="row cartview-product-Quantity ">
                                        <div class="col-md-12">
                                            <div class="cartview-product-Quantity">
                                                <span class="font-16">
                                                <span style="color: #222222b8;">Quantity:</span>
                                                <span class="price-input">
                                                <input type="number" class="text-center" id="qty" name="qty" min="1" max="1000" value="1" />
                                                </spanv>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- cartview-product-btn-->
                                    <div class="row cartview-product-Quantity my4">
                                        <div class="col-md-12" id="exampleFormControlSelect3">
                                            <a onclick="addToWishlist()" type="button" class="btn btn" style="text-decoration: none;border-bottom: 1px solid red;border-right: 1px solid red;border-top: 1px solid green;border-left: 1px solid green;"><span style="color: green;">Add</span>
                                            <span style="color: red;">to</span>
                                            <span style="color: green;">Wishlist</span>
                                            </a>
                                            <a onclick="addToCart()" type="button" class="btn btn" style="text-decoration: none;border-bottom: 1px solid red;border-right: 1px solid red;border-top: 1px solid green;border-left: 1px solid green;">
                                            <span style="color: green;">Add</span>
                                            <span style="color: red;">to</span>
                                            <span style="color: green;">Cart</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- cartView-content-Delivery-area -->
                            <div class="col-md-12 col-xl-3">
                                @if ($deliveryTime != null)
                                <!-- cartView-content-Delivery -->
                                <div class="cartView-content-Delivery">
                                    <!-- DeliveryOptions-heading -->
                                    <div class="DeliveryOptions-heading">
                                        <span>Delivery Options</span>
                                    </div>
                                    <!-- DeliveryOptions-content -->
                                    <div class="DeliveryOptions-content my-2 pb-2">
                                        <span class="icon"><i class="fas fa-money-bill"></i></span>
                                        <span> {{$deliveryTime->value}} </span>
                                    </div>
                                </div>
                                @endif
                                @if ($returnPolicy != null)
                                <!-- cartView-content-Delivery -->
                                <div class="cartView-content-Delivery">
                                    <!-- DeliveryOptions-heading -->
                                    <div class="DeliveryOptions-heading mt-3">
                                        <span>Return & Warranty</span>
                                    </div>
                                    <!-- DeliveryOptions-content -->
                                    <div class="DeliveryOptions-content my-2 pb-2">
                                        <span class="icon"><i class="fas fa-truck"></i></span>
                                        <span>  {{$returnPolicy->value}} </span>
                                    </div>
                                </div>
                                @endif
                                <!-- cartView-content-Delivery -->
                                <div class="cartView-content-Delivery">
                                    <!-- cartView-content-Secure -->
                                    <div class="cartView-content-Secure">
                                        <!-- DeliveryOptions-heading -->
                                        <div class="DeliveryOptions-heading mt-3">
                                            <span><i class="fas fa-lock"></i> Secure Payment</span>
                                        </div>
                                        <!-- DeliveryOptions-content -->
                                        <div class="Secure-content my-2 pb-2">
                                            <p class="m-0">fulfilled by <a href="#"><span style="color: green;">Bangla</span><span
                                                style="color: red;">Besh</span></a></p>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container reviws">
    <div class="row">
        <div class="col-md-4">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'Description')" id="defaultOpen">Description</button>
                <button class="tablinks" onclick="openCity(event, 'Review')">Review</button>
            </div>
        </div>
        <div class="col-md-8">
            <div id="Description" class="tabcontent">
                <div class="row">
                    <h3>Description</h3>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>
                            {!! $product->description !!}
                        </p>
                    </div>
                </div>
            </div>
            <div id="Review" class="tabcontent">
          <div class="row">
            <h3>Reviews (@if ($productReviews->isNotEmpty())

                        {{sizeof($productReviews)}}
                        @else {{'0'}}
                        @endif)</h3>
                        @if ($productReviews->isNotEmpty())
            <div class="col-md-12">
              @foreach ($productReviews as $review)
                            
                        
                        <div class="card">
                            <p style="overflow-y: scroll;padding: 10px; height: 80px;" ><b><i>{{$review->name}} :</i></b> <span>{{$review->review_text}}</span> </p>
                        </div>

                        @endforeach
            </div>
           
            <br>
            @else
            <p>
              Be the first to review “{{$product->name}}”
            </p>
            @endif
            <br>
            <p>Your email address will not be published. Required fields are marked *</p>
            
          </div>
          <div class="row">
            <!-----Ratting ----->
            {{-- <div class="col-12">
              <div id="dtl-ratting">
                <button name="1star" class="btn dtl">1 <span><i class="fa fa-star"></i></span> </button>
                <button name="2star" class="btn dtl ">2 <span><i class="fa fa-star"></i><i
                      class="fa fa-star"></i></span></button>
                <button name="3star" class="btn dtl">3 <span><i class="fa fa-star"></i></span><span><i
                      class="fa fa-star"></i><i class="fa fa-star"></i></span> </button>
                <button name="4star" class="btn dtl">4 <span><i class="fa fa-star"></i><i
                      class="fa fa-star"></i></span><span><i class="fa fa-star"></i><i
                      class="fa fa-star"></i></span></button>
                <button name="5star" class="btn dtl">5 <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i></span><span><i class="fa fa-star"></i><i
                      class="fa fa-star"></i></span></button>
              </div>
              <script>
                // Add active class to the current button (highlight it)
                var header = document.getElementById("dtl-ratting");
                var btns = header.getElementsByClassName("dtl");
                for (var i = 0; i < btns.length; i++) {
                  btns[i].addEventListener("click", function () {
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                  });
                }
              </script>
            </div> --}}
            <div class="col-12">
              Your review *
            </div>
            <span id="form_output"></span>
                <form action="" method="post" id="contact-form">
                    @csrf
              <div class="col-12">
                <textarea name="review_text" id="" style="width: 95%;background-color: none 0;" rows="10"></textarea>
              </div>
              <div class="col-12" style="margin-top: 15px;">
                Name* :
                <input style="width: 95%;" type="text" name="name" id="">
              </div>
              <div class="col-12" style="margin-top: 15px;">
                Email* :
                <input style="width: 95%;" type="text" name="email""" id="">
                <input style="width: 95%;" type="hidden" name="product_id" value="{{$product->id}}" required>
              </div>
              <br>
              <input type="checkbox" name="" id="">
              <label for="">Save my name, email, and website in this browser for the next time I comment.</label>
              <div class="col-4" style="margin-top: 15px;">
                <button type="submit" style="width: 95%;border-radius: 25px;" class="btn btn-info">SUBMIT</button>
              </div>
              <br>
            </form>
          </div>
        </div>
        </div>
    </div>
</div>
<hr>
<br><br><br><br><br><br>
<div class="container featured-items">
    <div class="row" style="text-align: center;">
        <div class="col-md-12">
            <h2>Retaled Items</h2>
            <p>Find a bright ideal to suit your taste with our great selection.</p>
        </div>
    </div>
    <div class="row">
        @foreach ($relatedProducts as $related)
        <div class="col-md-3" style="padding-right:1px; padding-left:1px;">
            <div class="containe" style="margin-left: 16px;">
                <img src="{{asset($related->cover)}}" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="btn-group">
                        <a href="{{route('front.product', $related->slug)}}">
                            <button type="button" class="btn btn icon">
                                <i class="fa fa-heart"></i>
                            </button>
                        </a>
                        <a href="{{route('front.product', $related->slug)}}">
                            <button type="button" class="btn btn icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                                    class="bi bi-eye" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="" style="color: black;text-align: center;">
                    <p><small>@php
                        $productCategories = $productCategoryObject->getProductCategories($product->id);
                    @endphp @foreach ($productCategories as $key => $item)
                        @if ($key > 0) {{', '}} @endif {{$item->name}}
                    @endforeach</small></p>
                    <p style="margin-bottom: 5px;">{{$related->name}}</p>
                    <p><span style="font-size: 20px;font-weight: bold;">{{$related->current_price}}</span><span
                        style="font-size: 20px;font-weight: bold;">/=</span> &nbsp; &nbsp; <span
                        style="color: red;"><del>@if ($related->previous_price != null) {{$related->previous_price}}/= @endif</del></span> </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<br><br>
@endsection
@section('footer')
<script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
<script>
    function addToCart() {
    
    	$.ajaxSetup({
      
            headers: {'X-CSRF-Token' : '{{csrf_token()}}'}
      
        });
      
        var product_id = "{{$product->id}}";
        var size 	   = $("#size").val();
        var color 	   = $("#color").val();
        var qty 	   = $("#qty").val();

        var url = '{{route("carts.store")}}';
    
        $.ajax({
    
            url: url,
            method: 'POST',
            data: { 'product_id' : product_id, 'size' : size,'color' : color, 'qty' : qty,},
    
            success: function(data){
    
                Swal.fire({
                    title: 'Operation Successfull!',
                    icon: 'success',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '<a href="{{route('carts')}}" style="color:white; text-decoration: none">Go to cart</a>',
                    cancelButtonText: 'Continue Shopping'
                })
        
                $('#cart-count').text(data);
            },
    
            error: function(error) {
    
                console.log(error);
            }
    
    
        });
    }

    function addToWishlist() {

        var product_id = "{{$product->id}}";

        @if(Auth::check())

        $.ajaxSetup({
      
            headers: {'X-CSRF-Token' : '{{csrf_token()}}'}
      
        });

        var url = '{{route("wishlists.store")}}';
    
        $.ajax({
    
            url: url,
            method: 'POST',
            data: { 'product_id' : product_id,},
    
            success: function(data){
    
                Swal.fire({
                    title: 'Product Added To Wishlist Successfully!',
                    icon: 'success',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '<a href="{{route('wishlists')}}" style="color:white; text-decoration: none">Go to wishlist</a>',
                    cancelButtonText: 'Continue'
                })
            },
    
            error: function(error) {
    
                console.log(error);
            }
    
    
        });
        @else
        @php

            $product_id = $product->id;

            Session::put('product_id', $product_id);

        @endphp

            window.location.href = "{{ route('login')}}";

        @endif
    }
    
    $(function(){
    
        $.ajaxSetup({
    
            headers: {'X-CSRF-Token' : '{{csrf_token()}}'}
    
        });

         $('#contact-form').submit(function(event) {
    
            event.preventDefault();
    
            var formData = $('#contact-form').serialize();
        
            var url = '{{route("reviews.store")}}';
        
            $.ajax({
        
                url: url,
                method: 'POST',
                data: formData,
                dataType: 'json',
        
                success: function(data){
        
                    if (data.error.length > 0) {
                    
                        var error_html = '';
                    
                        for(var count = 0; count < data.error.length; count++)
                        {
                            error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
                        }
                    
                        $('#form_output').html(error_html);  
                                            
                    } else {
                    
                        Swal.fire({
                    
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'Your review has been saved',
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                    
                        $('#contact-form')[0].reset();
                    }
        
                },
        
                error: function(error) {
        
                    console.log(error);
                }
        
        
            });
    
        });
    });
</script>
@endsection

