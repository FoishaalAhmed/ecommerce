

@extends('layouts.app')
@section('title', 'Products')
@section('content')
<br><br>
<div class="container-fluid" style="margin-bottom: 20px ;">
    <div class="dtl-2nd-nav">
        <div class="row" style="background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209));">
            <div class="container">
                <div class="row" style="text-align: center; padding-top: 10px; padding-bottom: 10px; ">
                    <div class="col-">
                        <a href="{{URL::to('/')}}" style="text-decoration: none;">Home</a> /
                        <a style="text-decoration: none;">Shop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---product dtl--->

<div class="container-fluid productdtls" style="width: 80%;">
    <div class="row">
        <!----Product Dtls----->
        <div class="col-3 responsive">
            <div class="col-md-12 responsive">
                {{-- 
                <div class="row" style="width: 98%;">
                    <div class="col-md-12"
                        style="text-align: left; padding-left: 0px; margin-left: 0px; background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209)); margin-top: 15px;font-weight: bold; color: rgb(2, 1, 1); border-radius: 5px; ">
                        <div class="">
                            <p style="margin: 0px; padding: 10px; "> Gender</p>
                        </div>
                    </div>
                </div>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label><br>
                <input type="radio" id="kids" name="gender" value="kids">
                <label for="female">Kids</label> --}}
                <div class="row" style="width: 98%;">
                    <div class="col-md-12"
                        style="text-align: left; padding-left: 0px; margin-left: 0px;background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209)); margin-top: 15px;font-weight: bold; color: rgb(2, 1, 1); border-radius: 5px;  ">
                        <!-- <span style="padding: 5px;" >Star Rating</span> -->
                        <div class="">
                            <p style="margin: 0px; padding: 10px; "> Price </p>
                        </div>
                    </div>
                    <div class="container" style="padding: 0px;">
                        <div class="slidecontainer">
                            <input style="width: 100%; padding-top: 10px; padding-bottom: 10px; " type="range" min="<?php if($lowestPrice) echo $lowestPrice->current_price; ?>" max="<?php if($highestPrice) echo $highestPrice->current_price; ?>" value="<?php if($lowestPrice) echo $lowestPrice->current_price; ?>" class="slider" id="myRange" onchange="filterProducts()">
                            <hr style="margin-top: -5px; margin-bottom: 5px; ">
                            <div class="row" style="margin-bottom: -20px;">
                                <div class="col-6" style="padding-left: 20px;">
                                    <p><span id="demo"></span> </p>
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
                        <div class="col-9">{{$item->name}} @if ($item->parent_name != null) ({{$item->parent_name}}) @endif </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
		
        <div class="col-9">
            <!-----Product ----->
            <div class="cont" style="padding:0px;">
                <div class="row" style="text-align: center;">
                    <div class="col-4">
                        <hr style="margin-top: 30px;">
                    </div>
                    <div class="col-4">
                        <h3>{{$category}} Products</h3>
                    </div>
                    <div class="col-4">
                        <hr style="margin-top: 30px;">
                    </div>
                </div>
                <!---fada---->
                <span id="filter"></span>
                <div id="products">
                    <div class="row" style="margin-left: 0px; margin-right: 0px;">
                    
                    
                    @foreach ($products as $product)
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="conta12">
                                    <img src="{{asset($product->cover)}}" style="height: 250px; width: 100%; " alt="Avatar" class="image12">
                                    <div class="overlay12">
                                        <div class="text12">
                                            <h6 style="font-weight: bold;" >{{$product->name}}</h6>
                                            <p>{{$product->current_price}}/=</p>
                                            <a href="{{route('front.product', $product->slug)}}" class="btn btn-sm btn-Secondary" style="background-color: #ffffff;" >Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row" style="text-align: left;font-weight: bold;">
                                    <a href="{{route('front.product', $product->slug)}}" style="text-decoration: none;" href="#" style="margin-bottom: 15px;">
                                    {{$product->name}}
                                    </a>
                                </div>
                                <del>
                                <span> @if ($product->previous_price != null) {{$product->previous_price}}/= @endif  </span>
                                </del>
                                &nbsp; &nbsp;
                                <ins><span style="font-size: 20px; font-weight: bold;color: green;margin-left: -17px;text-decoration: none;">{{$product->current_price}}/=</span></ins>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="{{route('front.product', $product->slug)}}" style="text-decoration: none;"><span style="font-size: 10px;"><i class="fa fa-check-circle" style="font-size: 10px;"></i> &nbsp; Buy Now </span></a>
                                    </div>
                                    <div class="col-6" style="text-align: right;">
                                        <a href="{{route('front.product', $product->slug)}}" style="text-decoration: none;"><span style="font-size: 10px;"> <i class="fa fa-eye" style="font-size: 10px;"></i>&nbsp; Quick View </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    </div>
                </div>
            </div>
            <!---- Pagination ---->
            <br>
            {{$products->links()}}
        </div>
    </div>
</div>
<br><br>
<!------responsive-------->
<div class="all-product">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="left">
                    <h3 style="text-align: center; font-weight: 900; word-spacing: 10px; letter-spacing: 10px; "> {{$category}} Products</h3>
                    <hr>
                    <div class="product">
                        <div class="row" style="margin: 0px;">
                            @foreach ($products as $product)
                            <div class="col-md-4" style="padding: 10px;">
                                <div class="card product-card">
                                    <div class="cardtocart">
                                        <a href="{{route('front.product', $product->slug)}}">
                                        <img src="{{asset($product->cover)}}" alt="{{$product->name}}" style="width:100%">
                                        </a>
                                        <h2>{{$product->name}}</h2>
                                        <p class="title-many mb-2" style="color: black;font-weight: 800;">{{$product->current_price}}/= <del style="color: red;margin-bottom: 2px;">@if ($product->previous_price != null) {{$product->previous_price}}/= @endif</del> <span
                                            style="color: green; font-weight: 200; "> &nbsp; &nbsp; &nbsp;  @if ($product->saving != null) Off {{$product->saving}}% @endif</span>
                                        </p>
                                        <a href="{{route('front.product', $product->slug)}}" class="btn btn-success"> Details </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!------responsive-------->
@endsection
@section('footer')
<script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;
    
    slider.oninput = function () {
      output.innerHTML = this.value;
    }
    
    function filterProducts() {

      let priceStart   = $('#demo').text();
      let highestPrice = $('#highestPrice').text();
      let categories   = $("input:checkbox:checked").map(function(){
                          return $(this).val();
                        }).get();

						//alert(categories);
						//alert(highestPrice);
      
      $.ajaxSetup({
    
          headers: {'X-CSRF-Token' : '{{csrf_token()}}'}
    
      });
    
            var url = '{{route("filter.products")}}';
    
            
    
            $.ajax({
    
                url: url,
                method: 'POST',
                data: { 'categories' : categories, 'priceStart': priceStart, 'highestPrice': highestPrice,},
    
                success: function(data){
					//alert(data);
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

