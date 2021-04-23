

@php
use App\Model\CategoryProduct;                   
$productCategoryObject = new CategoryProduct();
@endphp
@extends('layouts.app')
@section('title', 'Products')
@section('content')
<!---MAIN CONTENT-->
<div class="container-fluid" style="margin-bottom: 20px ;">
    <div class="dtl-2nd-nav">
        <div class="row" style="background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209));">
            <div class="container">
                <div class="row" style="text-align: center; padding-top: 10px; padding-bottom: 10px; ">
                    <div class="col-12">
                        <a href="#" style="text-decoration: none;color: black;">Home</a> /
                        <a href="#" style="text-decoration: none;color: red;">Shop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---product dtl--->
<div class="container-fluid productdtls">
    <div class="row">
        <!----Product Dtls----->
        <!------------Responsive Product Page-->
        <div class="responsive-productpage">
            <button style="width: 100%;" class="btn btn dropdown-toggle " onclick="myFunction9()"> <i
                class="fas fa-infinity"></i> <i class="fas fa-retweet"></i> Filter By <span
                style="font-size: 10px;">Gender,Price or Categories </span></button>
            <div id="myDIV2" class="dfdf">
                <div class="col-md-3">
                    <div class="col-md-12 responsive">
                        <div class="row" style="width: 98%;">
                            <div class="col-md-12"
                                style="text-align: left; padding-left: 0px; margin-left: 0px;background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209)); margin-top: 15px;font-weight: bold; color: rgb(2, 1, 1); border-radius: 5px;">
                                <div class="">
                                    <p style="margin: 0px; padding: 10px; "> Price </p>
                                </div>
                            </div>
                            <div class="container" style="padding: 0px;">
                                <div class="slidecontainer">
                                    <input style="width: 100%; padding-top: 10px; padding-bottom: 10px; " type="range" min="<?php if($lowestPrice) echo $lowestPrice->current_price; ?>" max="<?php if($highestPrice) echo $highestPrice->current_price; ?>" value="<?php if($lowestPrice) echo $lowestPrice->current_price; ?>" class="range" id="22" onchange="filterProductsMobile()">
                                    <hr style="margin-top: -5px; margin-bottom: 5px; ">
                                    <div class="row" style="margin-bottom: -20px;">
                                        <div class="col-6" style="padding-left: 20px;">
                                            <p><span id="rt"> </span> </p>
                                        </div>
                                        <div class="col-6" style="text-align: right;padding-right: 20px;">
                                            <p><?php if($highestPrice) echo $highestPrice->current_price; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="width: 98%;">
                            <div class="col-md-12"
                                style="text-align: left; padding-left: 0px; margin-left: 0px;background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209)); margin-top: 15px;font-weight: bold; color: rgb(2, 1, 1); border-radius: 5px;  ">
                                <div class="">
                                    <p style="margin: 0px; padding: 10px; "> Categories </p>
                                </div>
                            </div>
                        </div>
                        <div class="cont">
                            @foreach ($categories as $item)
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-1"><input type="checkbox" name="categories[]" onclick="filterProducts()" value="{{$item->id}}"></div>
                                <div class="col-9">{{$item->name}} @if ($item->parent_name != null) ({{$item->parent_name}}) @endif</div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function myFunction9() {
                  var x = document.getElementById("myDIV2");
                  if (x.style.display == "block") {
                    x.style.display = "none";
                  } else {
                    x.style.display = "block";
                  }
                }
            </script>
        </div>
        <!--------------------------------------------------------->
        <!--------------------------------------------------------->
        <!--------------------------------------------------------->
        <!--------------------------------------------------------->
        <!--------------------------------------------------------->
        <div class="col-md-3 product-sidebar">
            <div class="col-md-12 responsive">
                <div class="row" style="width: 98%;">
                    <div class="col-md-12"
                        style="text-align: left; padding-left: 0px; margin-left: 0px;background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209)); margin-top: 15px;font-weight: bold; color: rgb(2, 1, 1); border-radius: 5px;  ">
                        <div class="">
                            <p style="margin: 0px; padding: 10px; "> Price </p>
                        </div>
                    </div>
                    <div class="container" style="padding: 0px;">
                        <div class="slidecontainer">
                            <input style="width: 100%; padding-top: 10px; padding-bottom: 10px; " type="range" min="<?php if($lowestPrice) echo $lowestPrice->current_price; ?>"
                                max="<?php if($highestPrice) echo $highestPrice->current_price; ?>" value="<?php if($lowestPrice) echo $lowestPrice->current_price; ?>" class="range" id="range" onchange="filterProducts()">
                            <hr style="margin-top: -5px; margin-bottom: 5px; ">
                            <div class="row" style="margin-bottom: -20px;">
                                <div class="col-6" style="padding-left: 20px;">
                                    <p><span id="output"> </span> </p>
                                </div>
                                <div class="col-6" style="text-align: right;padding-right: 20px;">
                                    <p id="highestPrice"><?php if($highestPrice) echo $highestPrice->current_price; ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- <p > <span style="padding-right: 50px;" id="now"></span> <span style=" float: inline-end;margin-left: 100px;"  >5000</span>  </p></h4> -->
                    </div>
                </div>
                <div class="row" style="width: 98%;">
                    <div class="col-md-12"
                        style="text-align: left; padding-left: 0px; margin-left: 0px;background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209)); margin-top: 15px;font-weight: bold; color: rgb(2, 1, 1); border-radius: 5px;  ">
                        <div class="">
                            <p style="margin: 0px; padding: 10px; "> Categories </p>
                        </div>
                    </div>
                </div>
                <div class="cont">
                    @foreach ($categories as $item)
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-1"><input type="checkbox" name="categories[]" onclick="filterProducts()" value="{{$item->id}}"></div>
                        <div class="col-9">{{$item->name}} @if ($item->parent_name != null) ({{$item->parent_name}}) @endif</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div style="margin-top: 15px;" class="col-md-9 col-12" id="allproduct">
            <!-----Product ----->
            <div class="cont" style="padding:0px;">
                <span id="filter"></span>
                <div id="products">
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
                                    <p><small>@php
                                        $productCategories = $productCategoryObject->getProductCategories($product->id);
                                        @endphp @foreach ($productCategories as $key => $item)
                                        @if ($key > 0) {{', '}} @endif {{$item->name}}
                                        @endforeach</small>
                                    </p>
                                    <p style="margin-bottom: 5px;">{{$product->name}}</p>
                                    <p><span style="font-size: 20px;font-weight: bold;">{{$product->current_price}}</span><span
                                        style="font-size: 20px;font-weight: bold;">/=</span> &nbsp; &nbsp; <span
                                        style="color: red;"><del> @if ($product->previous_price != null)
                                        {{$product->previous_price}}/=@endif</del></span> 
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!---- Pagination ---->
            <br>
            <div class="row">
                <div class="col-12" style="text-align: center;">
                    {{$products->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
<!---MAIN CONTENT-->
@endsection
@section('footer')
<script>
    var range = document.getElementById("22");
    var output = document.getElementById("rt");
    output.innerHTML = range.value;
    
    range.oninput = function () {
    output.innerHTML = this.value;
    }
</script>
<script>
    var rangeValue = document.getElementById("range");
    var outputValue = document.getElementById("output");
    outputValue.innerHTML = rangeValue.value;
    
    rangeValue.oninput = function () {
    outputValue.innerHTML = this.value;
    }
</script>
<script>
    function filterProducts() {
    
        let priceStart   = $('#range').val();
        let highestPrice = $('#highestPrice').text();
        let categories   = $("input:checkbox:checked").map(function(){
                          return $(this).val();
                        }).get();
      
        $.ajaxSetup({
    
          headers: {'X-CSRF-Token' : '{{csrf_token()}}'}
    
        });
    
        var url = '{{route("filter.products")}}';
    
        $.ajax({
    
            url: url,
            method: 'POST',
            data: { 'categories' : categories, 'priceStart': priceStart, 'highestPrice': highestPrice,},

            success: function(data){

                $('#products').hide();
                $('#filter').html(data).fadeIn(6000);
            },

            error: function(error) {

                console.log(error);
            }
        });
    
    }

    function filterProductsMobile() {
    
        let priceStart   = $('#22').val();
        let highestPrice = $('#highestPrice').text();
        let categories   = $("input:checkbox:checked").map(function(){
                          return $(this).val();
                        }).get();
      
        $.ajaxSetup({
    
          headers: {'X-CSRF-Token' : '{{csrf_token()}}'}
    
        });
    
        var url = '{{route("filter.products")}}';
    
        $.ajax({
    
            url: url,
            method: 'POST',
            data: { 'categories' : categories, 'priceStart': priceStart, 'highestPrice': highestPrice,},

            success: function(data){

                $('#products').hide();
                $('#filter').html(data).fadeIn(6000);
            },

            error: function(error) {

                console.log(error);
            }
        });
    
    }

    
</script>
@endsection

