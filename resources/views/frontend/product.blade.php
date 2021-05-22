@php
use App\Model\CategoryProduct;
$productCategoryObject = new CategoryProduct();
@endphp

@extends('layouts.app')
@section('title', "{$product->name}")
@section('content')
    <div class="container-fluid" style="width: 75%;">
        <div id="pdtls" class="cartView-wrapper my-2">
            <div class="nav-container-fluid container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-5" style="margin-bottom: 5px">
                            <!-- cartVied-title -->
                            <div class="row" id="headctg">
                                <p style="text-align: center;margin: auto;"><span><a
                                            href="{{ URL::to('/') }}">Home</a></span> /
                                    <span><a href="#">Products</a></span> / <span> {{ $product->name }} </span>
                                </p>
                            </div>


                            <h2
                                style="margin: 0px; padding-top: 5px; font-weight: bold;padding-bottom: 20px; padding-left: 10px;margin: auto; text-align: center; ">
                                {{ $product->name }} </h2>
                        </div>

                        <!-- cartview-main-content -->
                        <div class="col-md-12">
                            <div class="row mt-3">
                                <!-- zoom-img-area -->
                                <div class="col-md-6 col-xl-6">
                                    <div class="banner-img my-4" style="margin: auto; text-align: center; ">

                                        <img style="width: 100%;height: auto;text-align: center;margin: auto;position: relative; overflow: hidden;"
                                            src="{{ asset($product->cover) }}" alt="product1" class="block__pic">

                                        <div class="row" style="margin-left: 5px;margin-right: 10px;">
                                            <div class="col py-2">
                                                <img src="{{ asset($product->cover) }}"
                                                    onerror="this.src= '{{ asset($product->cover) }}" width="90px"
                                                    height="117px;" class="thumb">
                                            </div>
                                            @foreach ($productPhotos as $key => $item)
                                                <div class="col py-2">
                                                    <img src="{{ asset($item->photo) }}"
                                                        onerror="this.src= '{{ asset($item->photo) }}'" width="90px"
                                                        height="117px;" class="thumb">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <!-- cartView-content-area -->
                                <div class="col-md-12 col-xl-5">
                                    <div class="cartview-content">
                                        <!-- cartview-product-price -->
                                        <div class="row cartview-product-price">
                                            <div class="col-md-12">
                                                <div class="cv-product-price">
                                                    <span>
                                                        <h2>৳ {{ $product->current_price }}</h2>
                                                    </span>
                                                </div>
                                                <div class="cv-origin-block">
                                                    <span class="font-14">
                                                        <del style="color: #22222273;">
                                                            @if ($product->previous_price != null) ৳
                                                                {{ $product->previous_price }} @endif
                                                        </del>
                                                    </span>
                                                </div>

                                                <div class="cv-origin-block mt-3">
                                                    <span class="font-14">
                                                        <span>Categories: <span>
                                                                @foreach ($productCategories as $key => $category)
                                                                    @if ($key != 0)
                                                                        {{ ', ' }} @endif
                                                                    {{ $category->name }}
                                                                @endforeach
                                                            </span></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="">
                                            {!! $product->short !!}
                                        </div>

                                        <!-- cartview-product-stock-->
                                        {{-- <div class="row cartview-product-color ">
                                            <div class="col-md-12">
                                                <p
                                                    style="background-color: #b43f68;display: inline-block;padding: 5px;padding-top: 2px;padding-bottom: 2px;">
                                                    1 IN STOCK</p>
                                            </div>
                                        </div> --}}
                                        <!-- cartview-product-Color-->
                                        @if ($productColors->isNotEmpty())
                                            <div class="row cartview-product-color ">
                                                <div class="col-md-12">
                                                    <div class="cartview-product-Quantity">
                                                        <p>
                                                            color <i title="This option is required "
                                                                class="fas fa-info-circle"></i> <span
                                                                class="btn btn-outline-secondary"
                                                                style="background-color: cornflowerblue; color: rgb(252, 249, 249); display: none;"
                                                                id="selectedColor"></span>

                                                            <input type="hidden" id="color">
                                                        </p>
                                                        <div id="clrbtn" class="">
                                                            @foreach ($productColors as $color)


                                                                <button type="button" id="colorbtn"
                                                                    class="btn btn-outline-secondary"
                                                                    onclick="selectColor('{{ $color->name }}')">{{ $color->name }}</button>

                                                            @endforeach

                                                            <!-- <div class="btn btn-outline-secondary" style="background-color: cornflowerblue; color: red;" id="selected"></div> -->

                                                            <!-- <input type="text" id="color"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <script>
                                                function selectColor(color) {
                                                    $('#color').val(color);
                                                    $("#selectedColor").show();
                                                    $("#selectedColor").text(color);
                                                }

                                            </script>

                                        @endif
                                        @if ($productSize != null)

                                            <br>
                                            <!-- cartview-product-Size-->
                                            <div class="row cartview-product-size ">
                                                <div class="col-md-12">
                                                    <div class="cartview-product-Quantity">
                                                        <p>
                                                            Size <i title="This option is required "
                                                                class="fas fa-info-circle"></i>
                                                            <span class="btn btn-outline-secondary"
                                                                style="background-color: cornflowerblue; color: rgb(255, 255, 255); display: none;"
                                                                id="selectedSize"></span>

                                                            <input type="hidden" id="size">
                                                        </p>
                                                        <div class="">
                                                            @foreach ($sizes as $size)

                                                                @if (in_array($size->name, $productSize))
                                                                    <button type="button" id="sizebtn"
                                                                        class="btn btn-outline-secondary"
                                                                        onclick="selectSize('{{ $size->name }}')">{{ $size->name }}</button>
                                                                @else
                                                                    <button type="button" id="sizebtn"
                                                                        class="btn btn-outline-secondary"
                                                                        disabled><del>{{ $size->name }}</del></button>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <script>
                                                function selectSize(size) {
                                                    $('#size').val(size);
                                                    $("#selectedSize").show();
                                                    $("#selectedSize").text(size);
                                                }

                                            </script>

                                            <br>
                                        @endif
                                        <!-- cartview-product-Quantity-->
                                        <div class="row cartview-product-Quantity ">
                                            <div class="col-md-12">
                                                <div class="cartview-product-Quantity">
                                                    <span class="font-16">
                                                        <p>
                                                            Quantity <i title="This option is required "
                                                                class="fas fa-info-circle"></i>
                                                        </p>
                                                        <span class="price-input">
                                                            <input type="number" class="text-center" id="qty" name="qty"
                                                                min="1" max="1000" value="1" style="width: 50%" />
                                                        </span>

                                                        <span>
                                                            <button style="margin-top: -5px;" type="button" id="addbtn"
                                                                class="btn btn-outline-secondary" onclick="addToCart()">Add
                                                                To
                                                                Cart</button>
                                                        </span>

                                                    </span>
                                                </div>
                                            </div>

                                            <div class="col-md-12" id="buybtn">
                                                <a id="buysign-write" style="text-decoration: none;" href="javascript:;"
                                                    onclick="addToWishlist()">
                                                    <span><i id="buysign-icon" class="fa fa-heart"></i></span> <span
                                                        id="buysign-write">Add to Wishlist</span> </a>
                                            </div>

                                            <div class="col-md-12" id="">

                                                <a id="buysign-write" style="text-decoration: none;" href="#">
                                                    <span><i id="buysign-icon" class="fa fa-heart"></i></span> <span
                                                        id="buysign-write">Share this product</span> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- cartView-content-Delivery-area -->
                                {{-- <div class="col-md-12 col-xl-1">
                                    <p>
                                        Recently Viewed Products
                                    </p>

                                    <a href="#">
                                        <img src="img/new product01.jpg" width="100%" alt="">
                                    </a>

                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-----tabs---->
                <div class="row" style="margin-top: 50px;">
                    <div class="col-md-12" style="text-align: center;margin: auto;">
                        <h2 style="font-weight: bold;"></h2>
                    </div>


                    <div class="container" style="max-width: 1300px;">
                        <ul class="nav nav-pills" id="nav-pills2" style="margin-left: 150px;margin-bottom: 30px;">
                            <li id="option" class="active">
                                <a href="#1a" data-toggle="tab"><button
                                        style="background-color: transparent; font-weight: bold;font-size: 20px;  border-radius: 0px; "
                                        class="btn ">Size Guide</button></a>
                            </li>
                            <li id="option"><a href="#2a" data-toggle="tab"><button
                                        style="background-color: transparent; font-weight: bold;font-size: 20px;  border-radius: 0px; "
                                        class="btn ">FAQ</button></a>
                            </li>
                            <li id="option"><a href="#3a" data-toggle="tab"><button
                                        style="background-color: transparent; font-weight: bold;font-size: 20px;  border-radius: 0px; "
                                        class="btn ">Additional information</button></a>
                            </li>
                            <li id="option"><a href="#4a" data-toggle="tab"><button
                                        style="background-color: transparent; font-weight: bold;font-size: 20px;  border-radius: 0px; "
                                        class="btn ">Reviews ({{ sizeof($productReviews) }}) </button></a>
                            </li>
                        </ul>

                        <div class="tab-content clearfix">
                            <!----Size Guide----->
                            <div class="tab-pane active" id="1a">

                                <div class="row">
                                    <div class="col-md-12 table-responsive" style="padding-right:1px; padding-left:1px;">
                                        {!! $product->size_guide !!}
                                    </div>

                                </div>

                            </div>

                            <!-----FAQ----->
                            <div class="tab-pane" id="2a">

                                <div class="" style=" text-align: center; margin: auto; ">
                                    <div class="row" style="text-align: center;margin: auto;">

                                        <h4 style="text-align: left;">
                                            <p style="text-align: justify;">
                                                @if ($faqText != null)
                                                    {!! $faqText->text !!}

                                                @endif
                                            </p>
                                        </h4>
                                    </div>

                                    <div class="row">
                                        @foreach ($faqs as $item)


                                            <div class="col-md-12" style="padding: 10px;text-align: left;">
                                                <details>
                                                    <summary><span
                                                            style="font-size: 20px;font-weight: bold;text-align: left;">{{ $item->title }}</span>
                                                    </summary>
                                                    <p
                                                        style="text-align: justify;border: 3px solid white; padding: 10px;border-radius: 10px;">
                                                        {!! $item->text !!}
                                                    </p>
                                                </details>
                                            </div>
                                        @endforeach
                                        <br><br>
                                        <div class="col-md-12">
                                            <a href="{{ route('faq') }}" class="btn btn"
                                                style="margin-top: 50px;background: black;text-decoration: none;color: white;">CLICK
                                                TO SEE FAQ </a>
                                        </div>
                                    </div>


                                    <br><br>
                                </div>
                            </div>

                            <!----Additional information----->
                            <div class="tab-pane" id="3a">
                                <div class="row">
                                    <div class="col-md-12">
                                        {!! $product->description !!}
                                    </div>
                                </div>
                            </div>

                            <!-----Reviews (0)----->
                            <div class="tab-pane" id="4a">
                                <div class="row">
                                    <h3>Reviews (@if ($productReviews->isNotEmpty())

                                            {{ sizeof($productReviews) }}
                                        @else {{ '0' }}
                                        @endif)</h3>
                                        <div class="col-md-12">
                                            @if ($productReviews->isNotEmpty())
                                            @foreach ($productReviews as $review)


                                                <div class="card">
                                                    <p style="overflow-y: scroll;padding: 10px; height: 80px;">
                                                        <b><i>{{ $review->name }} :</i></b>
                                                        <span>{{ $review->review_text }}</span>
                                                    </p>
                                                </div>

                                            @endforeach
                                            @else
                                                <p>
                                                    Be the first to review “{{ $product->name }}”
                                                </p>
                                            @endif
                                            <br>
                                            <p>Your email address will not be published. Required fields are marked *</p>
                                        </div>

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
                                            <textarea name="review_text" id="" style="width: 95%;background-color: none 0;"
                                                rows="10"></textarea>
                                        </div>
                                        <div class="col-12" style="margin-top: 15px;">
                                            Name* :
                                            <input style="width: 95%;" type="text" name="name" id="">
                                        </div>
                                        <div class="col-12" style="margin-top: 15px;">
                                            Email* :
                                            <input style="width: 95%;" type="text" name="email""" id="">
                                            <input style="width: 95%;" type="hidden" name="product_id"
                                                value="{{ $product->id }}" required>
                                        </div>
                                        <br>
                                        <input type="checkbox" name="" id="">
                                        <label for="">Save my name, email, and website in this browser for the next time I
                                            comment.</label>
                                        <div class="col-4" style="margin-top: 15px;">
                                            <button type="submit" style="width: 95%;border-radius: 25px;"
                                                class="btn btn-info">SUBMIT</button>
                                        </div>
                                        <br>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <!-----tabs---->
            </div>
        </div>

    </div>


    <!---MAIN CONTENT-->
    <br><br><br><br><br>

    <!--------Featured Items---------->




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
            <div class="containe" style="margin-left: 0px;">
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
    function addToCart() {
    
    	$.ajaxSetup({
      
            headers: {'X-CSRF-Token' : '{{csrf_token()}}'}
      
        });
      
        var id = "{{$product->id}}";
        var size 	   = $("#size").val();
        var color 	   = $("#color").val();
        var qty 	   = $("#qty").val();

        var url = '{{route("carts.store")}}';
    
        $.ajax({
    
            url: url,
            method: 'POST',
            data: { 'product_id' : id, 'size' : size,'color' : color, 'qty' : qty,},
    
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
