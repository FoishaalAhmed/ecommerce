

@extends('layouts.app')
@section('title', "{$product->name}")
@section('header')
<script>
    function magnify(imgID, zoom) {
    	var img, glass, w, h, bw;
    	img = document.getElementById(imgID);
    	/*create magnifier glass:*/
    	glass = document.createElement("DIV");
    	glass.setAttribute("class", "img-magnifier-glass");
    	/*insert magnifier glass:*/
    	img.parentElement.insertBefore(glass, img);
    	/*set background properties for the magnifier glass:*/
    	glass.style.backgroundImage = "url('" + img.src + "')";
    	glass.style.backgroundRepeat = "no-repeat";
    	glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
    	bw = 3;
    	w = glass.offsetWidth / 2;
    	h = glass.offsetHeight / 2;
    	/*execute a function when someone moves the magnifier glass over the image:*/
    	glass.addEventListener("mousemove", moveMagnifier);
    	img.addEventListener("mousemove", moveMagnifier);
    	/*and also for touch screens:*/
    	glass.addEventListener("touchmove", moveMagnifier);
    	img.addEventListener("touchmove", moveMagnifier);
    	function moveMagnifier(e) {
    		var pos, x, y;
    		/*prevent any other actions that may occur when moving over the image*/
    		e.preventDefault();
    		/*get the cursor's x and y positions:*/
    		pos = getCursorPos(e);
    		x = pos.x;
    		y = pos.y;
    		/*prevent the magnifier glass from being positioned outside the image:*/
    		if (x > img.width - (w / zoom)) { x = img.width - (w / zoom); }
    		if (x < w / zoom) { x = w / zoom; }
    		if (y > img.height - (h / zoom)) { y = img.height - (h / zoom); }
    		if (y < h / zoom) { y = h / zoom; }
    		/*set the position of the magnifier glass:*/
    		glass.style.left = (x - w) + "px";
    		glass.style.top = (y - h) + "px";
    		/*display what the magnifier glass "sees":*/
    		glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
    	}
    
    	function getCursorPos(e) {
    		var a, x = 0, y = 0;
    		e = e || window.event;
    		/*get the x and y positions of the image:*/
    		a = img.getBoundingClientRect();
    		/*calculate the cursor's x and y coordinates, relative to the image:*/
    		x = e.pageX - a.left;
    		y = e.pageY - a.top;
    		/*consider any page scrolling:*/
    		x = x - window.pageXOffset;
    		y = y - window.pageYOffset;
    		return { x: x, y: y };
    	}
    }
</script>
@endsection
@section('content')
<br><br>
<div class="container-fluid" style="margin-bottom: 20px ;">
    <div class="dtl-2nd-nav">
        <div class="row" style="background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209));">
            <div class="container">
                <div class="row" style="text-align: center; padding-top: 10px; padding-bottom: 10px; ">
                    <div class="col-">
                        <a href="{{URL::to('/')}}" style="text-decoration: none;">Home</a> /
                        <a  style="text-decoration: none;">Products</a> /
                        <a style="text-decoration: none;"> {{$product->name}} </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---product dtl--->
<div class="container">
    <div class="row">
        <!---Zoom Img-->
        <div class="col-4">
            <div class="img-magnifier-container">
                <!-- <img id="myimage" src="img/Hoodies-Banner-Images.png" width="100%" height="400"> -->
                <!---Zoom Img Slider-->
                <!---Zoom Img Slider-->
                <div class="container222">
                    <div class="mySlides">
                        <img id="myimage1" src="{{asset($product->cover)}}" style="width:100%;">
                    </div>
                    @foreach ($productPhotos as $key => $item)
                    <div class="mySlides">
                        <img id="myimage2" src="{{asset($item->photo)}}" style="width:100%">
                    </div>
                    @endforeach
                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>
                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>
                    <div class="row myimage-he">
                        <div class="column">
                            <img class="demo cursor" id="myimage1" src="{{asset($product->cover)}}" style="width:100%; height: 60px;" onclick="currentSlide(0)">
                        </div>
                        @foreach ($productPhotos as $key => $item)
                        <div class="column">
                            <img class="demo cursor" id="myimage1" src="{{asset($item->photo)}}"
                                style="width:100%; height: 60px;" onclick="currentSlide({{++$key}})">
                        </div>
                        @endforeach
                    </div>
                </div>
                <script>
                    magnify("myimage1", 5);
                </script>
                <!---Zoom Img Slider-->
                <!---Zoom Img Slider-->
            </div>
        </div>
        <div class="col-8 dtldtl">
            <div class="row">
                <div class="col-11">
                    <h2 style="margin: 0px; padding-top: 20px; padding-bottom: 20px; font-weight: bold; ">{{$product->name}}</h2>
                    <p><del>@if ($product->previous_price != null) {{$product->previous_price}}/= @endif</del> &nbsp; <span style="font-size: 18px;font-weight: bold;">{{$product->current_price}}/=</span> </p>
                    <hr style="margin: 2px;">
                    <hr style="margin: 2px;">
                </div>
                <div class="col-7">
                    <br>
                    <p>
                        @if ($deliveryTime != null) {{$deliveryTime->value}} @endif
                    </p>
                </div>
                <br>
                <div class="col-12">
                    <p style="color: red;">
                        @if ($returnPolicy != null) {{$returnPolicy->value}} @endif
                    </p>
                </div>
                @if ($productColors->isNotEmpty())
                <div class="row" style="margin-top: 20px;">
                    <div class="col-2">
                        Color :
                    </div>
                    <div class="col-8">
                        <select name="color" style="width: 100%;" id="color">
                            @foreach ($productColors as $color)
                            <option value="{{$color->name}}">{{$color->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <br>
                @endif
                @if ($productSizes->isNotEmpty())
                <div class="row" style="margin-top: 10px;">
                    <div class="col-2">
                        Size :
                    </div>
                    <div class="col-8">
                        <select name="size" style="width: 100%;" id="size">
                            @foreach ($productSizes as $size)
                            <option value="{{$size->name}}">{{$size->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @endif
                <div class="row" style="margin-top: 10px;">
                    <div class="col-2">
                        Quantity :
                    </div>
                    <div class="col-8 " class="input-group">
                        <button class="form-control" style="width: 50px;height: 40px; float: left;"
                            onclick="qtyMinus()">-</button>
                        <input class="form-control" style="width: 50px;height: 40px; float: left;" value="1" type="text" id="qty">
                        <button class="form-control" style="width: 50px;height: 40px; "
                            onclick="qtyPlus()">+</button>
                    </div>
                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-8"><span>Category: @foreach ($productCategories as $key => $category) @if ($key != 0) {{', '}} @endif {{$category->name}}  @endforeach </span></div>
                    <div class="col-2">
                        <button type="button" style="width: 100%;" class="btn btn-info" onclick="addToCart();">Add To Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<!------Reviws---->
<div class="container reviws">
    <div class="row">
        <div class="col-4">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'Description')"
                    id="defaultOpen">Description</button>
                <button class="tablinks" onclick="openCity(event, 'Review')">Review</button>
            </div>
        </div>
        <div class="col-8">
            <div id="Description" class="tabcontent">
                <div class="row">
                    <h3>Description</h3>
                </div>
                <div class="row">
                    <p>{!! $product->description !!}</p>
                </div>
            </div>
            <div id="Review" class="tabcontent">
                <div class="row">
                    <h3>Reviews (
                        @if ($productReviews->isNotEmpty())

                        {{count((array)$productReviews)}}
                        @else {{'0'}}
                        @endif
                    )</h3>
                    @if ($productReviews->isNotEmpty())
                    <div class="col-md-12">
                        @foreach ($productReviews as $review)
                            
                        
                        <div class="card">
                            <p style="overflow-y: scroll;padding: 10px; height: 80px;" ><b><i>{{$review->name}} :</i></b> <span>{{$review->review_text}}</span> </p>
                        </div>

                        @endforeach
                    </div>
                    
                     @else

                    <p>There are no reviews yet.</p>
                    <br>
                    <p> Be the first to review “{{$product->name}}”
                    </p>
                    <br>
                    @endif
                    <p>Your email address will not be published. Required fields are marked *</p>
                </div>
                <div class="row">
                    <!-----Ratting ----->
                    <span id="form_output"></span>
                    <form action="" method="post" id="contact-form">
                        @csrf
                    <div class="col-12">
                        {{-- <div id="dtl-ratting">
                            <button name="star" class="btn dtl" value="1">1 <span><i class="fa fa-star"></i></span> </button>
                            <button name="star" class="btn dtl" value="2">2 <span><i class="fa fa-star"></i><i class="fa fa-star"></i></span></button>
                            <button name="star" class="btn dtl" value="3">3 <span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </button>
                            <button name="star" class="btn dtl" value="4">4 <span><i class="fa fa-star"></i><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i><i class="fa fa-star"></i></span></button>
                            <button name="star" class="btn dtl" value="5">5 <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i><i class="fa fa-star"></i></span></button>
                        </div> --}}
                    </div>
                    <div class="col-12">
                        Your review *
                    </div>
                    
                        <div class="col-12">
                            <textarea name="review_text" id="" style="width: 95%;background-color: none 0;" rows="10" required></textarea>
                        </div>
                        <div class="col-12" style="margin-top: 15px;">
                            Name* :
                            <input style="width: 95%;" type="text" name="name" id="" required>
                        </div>
                        <div class="col-12" style="margin-top: 15px;">
                            Email* :
                            <input style="width: 95%;" type="text" name="email" id="" required>
                            <input style="width: 95%;" type="hidden" name="product_id" value="{{$product->id}}" required>
                        </div>
                        <br>
                        <div class="col-4" style="margin-top: 15px;">
                            <button type="button" onclick="sendReview()" style="width: 95%;border-radius: 25px;" class="btn btn-info">SUBMIT</button>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!------Socil Link----->
{{-- 
<div class="container socillink" style="margin-top: 20px;font-size: 18px;  ">
    <div class="row" style="text-align: center;">
        <hr style="margin-bottom: 0px;">
        <div class="col-2"></div>
        <div class="col-2" style="border-right: 1px solid black; padding: 10px; "><span><a
            style="text-decoration: none;" href="#"><i class="fab fa-facebook-f"></i></span> &nbsp; &nbsp;
            Facebook </a> 
        </div>
        <div class="col-2" style="border-right: 1px solid black; padding: 10px; "><span><a
            style="text-decoration: none;" href="#"><i class="fab fa-instagram"></i></span> &nbsp; &nbsp;
            Instagram </a> 
        </div>
        <div class="col-2" style="border-right: 1px solid black; padding: 10px; "><span><a
            style="text-decoration: none;" href="#"><i class="fab fa-twitter"></i></span> &nbsp; &nbsp;
            Twitter </a> 
        </div>
        <div class="col-2" style="padding: 10px;"><span><a style="text-decoration: none;" href="#"><i
            class="fab fa-whatsapp"></i></span> &nbsp; &nbsp; Whatsapp </a> </div>
        <div class="col-2"></div>
        <hr>
    </div>
</div>
--}}
<!-----Related products-------->
<div class="container relatedproduct" style="padding:0px;">
    <div class="row" style="text-align: center;">
        <div class="col-4">
            <hr style="margin-top: 30px;">
        </div>
        <div class="col-4">
            <h2>Related products</h2>
        </div>
        <div class="col-4">
            <hr style="margin-top: 30px;">
        </div>
    </div>
    <!---fada---->
    <div class="row" style="margin-left: -20px; margin-right: -20px;">
        @foreach ($relatedProducts as $related)
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <div class="conta12">
                        <img src="{{asset($related->cover)}}" style="height: 250px; width: 100%; " alt="Avatar"
                            class="image12">
                        <div class="overlay12">
                            <div class="text12">
                                <h2 style="font-weight: bold;" >{{$related->name}}</h2>
                                <p>{{$related->current_price}}/=</p>
                                <a href="{{route('front.product', $related->slug)}}" class="btn btn-sm btn-Secondary" style="background-color: #ffffff;" >Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row" style="text-align: left;font-weight: bold;">
                        <a href="{{route('front.product', $product->slug)}}" style="text-decoration: none;" href="#" style="margin-bottom: 15px;">
                        {{$related->name}}
                        </a>
                    </div>
                    <del>
                    <span>@if ($related->previous_price != null) {{$related->previous_price}}/= @endif</span>
                    </del>
                    &nbsp; &nbsp;
                    <ins><span style="font-size: 15px; font-weight: bold;color: green;">{{$related->current_price}}/=</span></ins>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-6">
                            <a href="{{route('front.product', $product->slug)}}" style="text-decoration: none;"><span style="font-size: 10px;"><i class="fa fa-check-circle" style="font-size: 10px;"></i> &nbsp; Select Option</span></a>
                        </div>
                        <div class="col-6" style="text-align: right;">
                            <a href="{{route('front.product', $product->slug)}}" style="text-decoration: none;"><span style="font-size: 10px;"> <i class="fa fa-eye" style="font-size: 10px;"></i>&nbsp; Quick View </span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <br>
    </div>
</div>
<!-----responsive------->
<div class="row responsive-dtl">
    <div class="col-md-12" style="padding-right: 25px;">
        <div class="row">
            <div class="col-md-3">
                <div class="cartView-content-Delivery">
                    <p style="text-align: center; font-weight: 900; ">@if ($deliveryTime != null) {{$deliveryTime->value}} @endif</p>
                    <hr>
                    <p style="text-align: center;">@if ($returnPolicy != null) {{$returnPolicy->value}} @endif</p>
                </div>
                <hr>
            </div>
            <div class="col-md-6">
                <div class="row" style="margin: 0px;">
                    <p>{{$product->name}}</p>
                </div>
                <hr>
                <div class="row" style="margin: 0px;">
                    <div class="col-md-12">
                        <div class="rate">
                            <h2>{{$product->current_price}}/=</h2>
                            <p><del style="color: #c40f0f;"> @if ($product->previous_price != null) {{$product->previous_price}}/= @endif </del> &nbsp; @if ($product->saving != null) {{$product->saving}}% @endif </p>
                            <span>
                            Categories: <span>@foreach ($productCategories as $key => $category) @if ($key != 0) {{', '}} @endif {{$category->name}}  @endforeach</span>
                            </span>
                        </div>
                        <div class="row">
                            @if ($productSizes->isNotEmpty())
                            <div class="col-md-6">
                                <div class="size">
                                    <div class="pdp-mod-product-info-section sku-prop-selection">
                                        <span class="section-title">Size: </span> &nbsp;
                                        <hr style="margin-top: 0px; margin-bottom: 10px; font-weight: bolder; ">
                                        @foreach ($productSizes as $item)
                                        <input type="checkbox"  name="mobilesize" value="{{$item->name}}">
                                        <label for="size"> {{$item->name}}</label> &nbsp; &nbsp;
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if ($productColors->isNotEmpty())
                            <div class="col-md-6">
                                <div class="size">
                                    <div class="pdp-mod-product-info-section sku-prop-selection">
                                        <span class="section-title">color: </span> &nbsp;
                                        <hr style="margin-top: 0px; margin-bottom: 10px; font-weight: bolder; ">
                                        @foreach ($productColors as $item)
                                        <input type="checkbox" name="mobilecolor" value="{{ $item->name}}">
                                        <label for="color"> {{$item->name}} </label> &nbsp; &nbsp;
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cartview-product-btn">
									 <div class="row" style="margin-top: 5px;margin-bottom: 5px;" >
                                        
                                        <div class="col- " class="input-group" >
                                          <button  class="form-control" style="width: 50px;height: 40px; float: left;" onclick="qtyMobileMinus()" >-</button>
                                          <input class="form-control" style="width: 50px;height: 40px; float: left;" value="1" type="text" id="quantity">
                                          <button class="form-control" style="width: 50px;height: 40px; " onclick="qtyMobilePlus()" >+</button>
                                        </div>
                                        <div class="col-">
                                          Quantity :
                                        </div>
                                      </div>

                                    <a onclick="AddToCartForMobile();" href="#" type="button" class=" btn btn-warning cart-btn  col-md-3 waves-effect waves-light">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------more product-->
        <div class="all-product">
            <div class="row" style="margin: 0px;">
                <div class="col-md-12">
                    <div class="card">
                        <div class="left">
                            <h3
                                style="text-align: center; font-weight: 900; word-spacing: 10px; letter-spacing: 10px; ">
                                <span style="color: red;"></span>Related Product
                            </h3>
                            <hr>
                            <div class="product">
                                <div class="row">
                                    @foreach ($relatedProducts as $related)
                                    <div class="col-md-3" style="padding: 10px;">
                                        <div class="card product-card">
                                            <div class="cardtocart">
                                                <a href="#">
                                                <img src="{{asset($related->cover)}}" alt="Denim Jeans" style="width:100%">
                                                </a>
                                                <h2>{{$related->name}}</h2>
                                                <p class="title-many mb-2" style="color: black;font-weight: 800;">
                                                    {{$related->current_price}}/= <del style="color: red;margin-bottom: 2px;">@if ($related->previous_price != null) {{$related->previous_price}}/= @endif</del>
                                                </p>
                                                <a href="{{route('front.product', $related->slug)}}" class="btn btn-success"> Detail </a>
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
        <!---more product-->
    </div>
</div>
@endsection
@section('footer')
<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
    	showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
    	showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
    	var i;
    	var slides = document.getElementsByClassName("mySlides");
    	var dots = document.getElementsByClassName("demo");
    	var captionText = document.getElementById("caption");
    	if (n > slides.length) { slideIndex = 1 }
    	if (n < 1) { slideIndex = slides.length }
    	for (i = 0; i < slides.length; i++) {
    		slides[i].style.display = "none";
    	}
    	for (i = 0; i < dots.length; i++) {
    		dots[i].className = dots[i].className.replace(" active", "");
    	}
    	slides[slideIndex - 1].style.display = "block";
    	dots[slideIndex - 1].className += " active";
    	captionText.innerHTML = dots[slideIndex - 1].alt;
    }

    
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
<script>
    function qtyMinus() {
        
    	let qty = $("#qty").val();
    	let newQty = qty - 1;
    
    	if (newQty <= 1) {
    		$("#qty").val(1);
    	} else {
    
    		$("#qty").val(newQty);
    	}
    
    }

	function qtyPlus() {
    	let qty = $("#qty").val();
    	let newQty = parseInt(qty) + 1;
    	$("#qty").val(newQty);
    
    }

    function qtyMobilePlus() {
    	let quantity = $("#quantity").val();
    	let newquantity = parseInt(quantity) + 1;
    	$("#quantity").val(newquantity);
    
    }

    function qtyMobileMinus() {
    	let quantity = $("#quantity").val();
    	let newquantity = quantity - 1;
    
    	if (newquantity <= 1) {
    		$("#quantity").val(1);
    	} else {
    
    		$("#quantity").val(newquantity);
    	}
    
    }

</script>
<script>

    function addToCart() {
    
    	$.ajaxSetup({
      
              headers: {'X-CSRF-Token' : '{{csrf_token()}}'}
      
          });
      
		var product_id = "{{$product->id}}";
		var size 	   = $("input[name$='size']").val();
			var color 	   = $("input[name$='color']").val();
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

    function AddToCartForMobile() {
    
    	$.ajaxSetup({
      
              headers: {'X-CSRF-Token' : '{{csrf_token()}}'}
      
          });
      
		var product_id = "{{$product->id}}";
		var size 	   = $("input[name$='mobilesize']").val();
		var color 	   = $("input[name$='mobilecolor']").val();
		var qty 	   = $("#quantity").val();
		
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

    function sendReview(){
    
        $.ajaxSetup({
    
            headers: {'X-CSRF-Token' : '{{csrf_token()}}'}
    
        });
    
		var formData = $('#contact-form').serialize();

        //alert(formData);

		var url = '{{route("reviews.store")}}';



		$.ajax({

			url: url,
			method: 'POST',
			data: formData,
			dataType: 'json',

			success: function(data){

                //alert(data);


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
    
    };
</script>
@endsection

