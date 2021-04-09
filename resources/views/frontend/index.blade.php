

@extends('layouts.app')
@section('title', 'Home')
@section('content')
<br><br>
<!------1st slider---->
<div class="w3-content w3-display-container-fluid">
    @foreach ($sliders as $slider)
        
    
    <div class="w3-display-container mySlides w3-container w3-center w3-animate-opacity ">
        <img src="{{asset($slider->photo)}}" style="width:100%;">
        <div class="w3-display-left w3-large w3-container w3-padding-16 w3-black">
            <div class="row">
                <div class="col-6 w3-container w3-left w3-animate-bottom "
                    style="margin-top: 200px;margin-left: 200px;">
                    <a href="{{$slider->link}}" class="btn btn-info"> Buy Now </a>
                </div>
            </div>
        </div>
        <div class="w3-display-middle  w3-large w3-container w3-padding-16 w3-black">
            <div class="row fstslidr">
                <div class="col-6 w3-container w3-center w3-animate-top">
                    
                </div>
                <div class="col-6 w3-container w3-center w3-animate-top">
                    <a class="fstsliderwrite" href="{{$slider->link}}">
                        <h6 id="bangla" style="font-weight: 800;color: white;">{{$slider->text}}
                        </h6>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    @endforeach
    <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
</div>
<script>
    var slideIndex = 1;
    showDivs(slideIndex);
    
    function plusDivs(n) {
    	showDivs(slideIndex += n);
    }
    
    function showDivs(n) {
    	var i;
    	var x = document.getElementsByClassName("mySlides");
    	if (n > x.length) { slideIndex = 1 }
    	if (n < 1) { slideIndex = x.length }
    	for (i = 0; i < x.length; i++) {
    		x[i].style.display = "none";
    	}
    	x[slideIndex - 1].style.display = "block";
    }
</script>
<!-- <div class="container-fluid" style="padding: 0px; background-image: linear-gradient(rgb(170, 199, 241), rgb(123, 127, 128), rgb(170, 199, 241));"> -->
<!------Main Containt Desktop-->
<div class="container-fluid maincontaint ">
    <!------2nd slider----->
    <div class="container-fluid secondslider">
        <br><br>
        <div class="container">
            .
            <div class="row" style="padding: 0px; border-radius: 50px 50px 0px 0px;">
                <div class="col-4"
                    style="margin-top: 25px;border-top: 2px solid black;border-radius: 50px 0px 0px 0px;">
                </div>
                <div class="col-4" style="text-align: center;">
                    <h2 style="margin: 0px;">Mens Collection</h2>
                    {{-- 
                    <p>Lorem ipsum dolor sit amet.</p>
                    --}}
                </div>
                <div class="col-4"
                    style="margin-top: 25px;border-top: 2px solid black;border-radius: 0px 50px 0px 0px;">
                </div>
            </div>
        </div>
        <div id="multi-item-example"
            class="carousel slide carousel-multi-item carousel-multi-item-2  w3-container w3-center w3-animate-zoom" data-ride="carousel" style="position: relative;">
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                    @php
                    $firstSixMenProducts  = array_slice($menProducts, 0, 6);
                    $secondSixMenProducts = array_slice($menProducts, 6, 6);
                    @endphp
                    @foreach ($firstSixMenProducts as $MenProducts)
                    <div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
                        <div class="card">
                            <div class="container22">
                                <img class="img-fluid" src="{{asset($MenProducts->cover)}}" alt="Card image cap">
                                <div class="overlay">
                                    <div class="text2">
                                        <h5  style="font-weight: bold;">{{$MenProducts->name}}</h5>
                                        <p>{{$MenProducts->current_price}}/=</p>
                                        <a href="{{route('front.product', $MenProducts->slug)}}" class="btn btn-sm btn-Secondary" style="background-color: #ffffff;">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!--/.First slide-->
                <!--Second slide-->
                <div class="carousel-item">
                    @foreach ($secondSixMenProducts as $MenProductsItem)
                    <div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
                        <div class="card">
                            <div class="container22">
                                <img class="img-fluid" src="{{asset($MenProductsItem->cover)}}" alt="Card image cap">
                                <div class="overlay">
                                    <div class="text25">
                                        <h6 style="font-weight: bold;">{{$MenProductsItem->name}}</h6>
                                        <p>{{$MenProductsItem->current_price}}/=</p>
                                        <a href="{{route('front.product', $MenProductsItem->slug)}}" class="btn btn-sm btn-Secondary"
                                            style="background-color: #ffffff;">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!--/.Second slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <div class="controls-top">
                <div class="container">
                    <div class="row" style="padding: 0px;;border-radius: 0px 0px 50px 50px;border-bottom: 1px solid black;">
                        <div class="col-md-2" style="text-align: center;">
                            <a class="black-text" href="#multi-item-example" data-slide="prev"><i
                                class="fas fa-angle-left fa-3x pr-3"></i></a>
                        </div>
                        <div class="col-3"></div>
                        <div class="col-2" style="    text-align: center;margin-top: 10px;"><a href="{{route('front.products', [1, 'men'])}}"><button type="button" style="border-radius: 50px;"
                            class="btn btn-info">EXPLORE</button></a></div>
                        <div class="col-3"></div>
                        <div class="col-md-2" style="text-align: center;">
                            <a class="black-text" href="#multi-item-example" data-slide="next"><i
                                class="fas fa-angle-right fa-3x pl-3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.Controls-->
        </div>
    </div>
    <!-----slider test---->
    <!-----slider test---->
    <!-----1st Flip Card----->
    <div class="container-fluid">
        <br><br>
        <div class="container">
            .
            <div class="row" style="padding: 0px; border-radius: 50px 50px 0px 0px;">
                <div class="col-4"
                    style="margin-top: 25px;border-top: 2px solid black;border-radius: 50px 0px 0px 0px;">
                </div>
                <div class="col-4" style="text-align: center;">
                    <h2 style="margin: 0px;">Mug Collections</h2>
                </div>
                <div class="col-4"
                    style="margin-top: 25px;border-top: 2px solid black;border-radius: 0px 50px 0px 0px;">
                </div>
            </div>
        </div>
        <div class="row" style="text-align: center; margin: auto;">
            @foreach ($mugProducts as $mug)
            <div class="col-2">
                <div class="flip-card" style="height: 300px;">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset($mug->cover)}}" alt="Avatar"
                                style="width:100%;height:100%;">
                        </div>
                        <div class="flip-card-back">
                            <h6>{{$mug->name}}</h6>
                            <p>{{$mug->current_price}}/=</p>
                            <a href="{{route('front.product', $mug->slug)}}" class="btn btn-sm btn-Secondary" style="background-color: #ffffff;">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="container">
            <div class="row" style="padding: 0px;border-bottom: 1px solid black;border-radius: 0px 0px 50px 50px; ">
                <div class="col-md-2" style="text-align: center;">
                    <!-- <a class="black-text" href="#multi-item-example3" data-slide="prev"><i class="fas fa-angle-left fa-3x pr-3"></i></a> -->
                </div>
                <div class="col-3"></div>
                <div class="col-2" style="    text-align: center;margin-top: 10px;"><a href="{{route('front.products', [7, 'mug'])}}"><button type="button" style="border-radius: 50px;" class="btn btn-info">more</button></a></div>
                <div class="col-3"></div>
                <div class="col-md-2" style="text-align: center;">
                    <!-- <a class="black-text" href="#multi-item-example3" data-slide="next"><i class="fas fa-angle-right fa-3x pl-3"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <!------3rd slider----->
    <div class="container-fluid">
        <br><br>
        <div class="container">
            .
            <div class="row" style="padding: 0px; border-radius: 50px 50px 0px 0px;">
                <div class="col-4"
                    style="margin-top: 25px;border-top: 2px solid black;border-radius: 50px 0px 0px 0px;">
                </div>
                <div class="col-4" style="text-align: center;">
                    <h2 style="margin: 0px;">Women Collections</h2>
                </div>
                <div class="col-4"
                    style="margin-top: 25px;border-top: 2px solid black;border-radius: 0px 50px 0px 0px;">
                </div>
            </div>
        </div>
        <div id="multi-item-example2" class="carousel slide carousel-multi-item carousel-multi-item-2"
            data-ride="carousel" style="position: relative;">
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                    @php
                    $firstSixWomenProducts  = array_slice($womenProducts, 0, 6);
                    $secondSixWomenProducts = array_slice($womenProducts, 6, 6);
                    @endphp
                    @foreach ($firstSixWomenProducts as $WomenProducts)
                    <div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
                        <div class="card">
                            <div class="container22">
                                <img class="img-fluid" src="{{asset($WomenProducts->cover)}}" alt="Card image cap">
                                <div class="overlay">
                                    <div class="text">
                                        <h6 style="font-weight: bold;">{{$WomenProducts->name}}</h6>
                                        <p>{{$WomenProducts->current_price}}/=</p>
                                        <a href="{{route('front.product', $WomenProducts->slug)}}" class="btn btn-sm btn-Secondary"
                                            style="background-color: #ffffff;">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!--/.First slide-->
                <!--Second slide-->
                <div class="carousel-item">
                    @foreach ($secondSixWomenProducts as $WomenProductsItem)
                    <div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
                        <div class="card">
                            <div class="container22">
                                <img class="img-fluid" src="{{asset($WomenProductsItem->cover)}}" alt="Card image cap">
                                <div class="overlay">
                                    <div class="text">
                                        <h6 style="font-weight: bold;">{{$WomenProductsItem->name}}</h6>
                                        <p>{{$WomenProductsItem->current_price}}/=</p>
                                        <a href="{{route('front.product', $WomenProductsItem->slug)}}" class="btn btn-sm btn-Secondary"
                                            style="background-color: #ffffff;">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!--/.Second slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <div class="controls-top">
                <div class="container">
                    {{-- 
                    <div class="row" style="padding: 0px; background-image: linear-gradient(rgb(250, 252, 255), rgb(170, 170, 168), rgb(197, 204, 235));border-radius: 0px 0px 50px 50px;">
                        --}}
                        <div class="row" style="padding: 0px;;border-radius: 0px 0px 50px 50px;border-bottom: 1px solid black;">
                            <div class="col-md-2" style="text-align: center;">
                                <a class="black-text" href="#multi-item-example2" data-slide="prev"><i
                                    class="fas fa-angle-left fa-3x pr-3"></i></a>
                            </div>
                            <div class="col-3"></div>
                            <div class="col-2" style="    text-align: center;margin-top: 10px;"><a href="{{route('front.products', [2, 'women'])}}"><button type="button" style="border-radius: 50px;"
                                class="btn btn-info">EXPLORE</button></a></div>
                            <div class="col-3"></div>
                            <div class="col-md-2" style="text-align: center;">
                                <a class="black-text" href="#multi-item-example2" data-slide="next"><i
                                    class="fas fa-angle-right fa-3x pl-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Controls-->
            </div>
        </div>
        <!----mug----->
        <div class="container-fluid">
            <br><br>
            <div class="container">
                .
                <div class="row" style="padding: 0px; border-radius: 50px 50px 0px 0px;">
                    <div class="col-4"
                        style="margin-top: 25px;border-top: 2px solid black;border-radius: 50px 0px 0px 0px;">
                    </div>
                    <div class="col-4" style="text-align: center;">
                        <h2 style="margin: 0px;">Mobile Cover Collection</h2>
                    </div>
                    <div class="col-4"
                        style="margin-top: 25px;border-top: 2px solid black;border-radius: 0px 50px 0px 0px;">
                    </div>
                </div>
            </div>
            <div class="row" style="text-align: center; margin: auto;">
                @foreach ($mobileCoverProducts as $mobileCover)
                <div class="col-2">
                    <div class="flip-card" style="height: 300px;">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="{{asset($mobileCover->cover)}}" alt="Avatar"
                                    style="width:100%;height:100%;">
                            </div>
                            <div class="flip-card-back">
                                <h6>{{$mobileCover->name}}</h6>
                                <p>{{$mobileCover->current_price}}/=</p>
                                <a href="{{route('front.product', $mobileCover->slug)}}" class="btn btn-sm btn-Secondary" style="background-color: #ffffff;">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="container">
                <div class="row" style="padding: 0px;border-bottom: 1px solid black;border-radius: 0px 0px 50px 50px; ">
                    <div class="col-md-2" style="text-align: center;">
                        <!-- <a class="black-text" href="#multi-item-example3" data-slide="prev"><i class="fas fa-angle-left fa-3x pr-3"></i></a> -->
                    </div>
                    <div class="col-3"></div>
                    <div class="col-2" style="    text-align: center;margin-top: 10px;"><a href="{{route('front.products', [8, 'mobile-cover'])}}"><button type="button" style="border-radius: 50px;" class="btn btn-info">more</button></a></div>
                    <div class="col-3"></div>
                    <div class="col-md-2" style="text-align: center;">
                        <!-- <a class="black-text" href="#multi-item-example3" data-slide="next"><i class="fas fa-angle-right fa-3x pl-3"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
        <!------4th slider----->
        <div class="container-fluid">
            <br><br>
            <div class="container">
                .
                <div class="row" style="padding: 0px; border-radius: 50px 50px 0px 0px;">
                    <div class="col-4"
                        style="margin-top: 25px;border-top: 2px solid black;border-radius: 50px 0px 0px 0px;">
                    </div>
                    <div class="col-4" style="text-align: center;">
                        <h2 style="margin: 0px;">Kids Collection</h2>
                    </div>
                    <div class="col-4"
                        style="margin-top: 25px;border-top: 2px solid black;border-radius: 0px 50px 0px 0px;">
                    </div>
                </div>
            </div>
            <div id="multi-item-example3" class="carousel slide carousel-multi-item carousel-multi-item-2"
                data-ride="carousel" style="position: relative;">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item active">
                        @php
                        $firstSixKidProducts  = array_slice($kidProducts, 0, 6);
                        $secondSixKidProducts = array_slice($kidProducts, 6, 6);
                        @endphp
                        @foreach ($firstSixKidProducts as $KidProducts)
                        <div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
                            <div class="card">
                                <div class="container22">
                                    <img class="img-fluid" src="{{asset($KidProducts->cover)}}" alt="Card image cap">
                                    <div class="overlay">
                                        <div class="text" style="text-align: center;" >
                                            <h6 style="font-weight: bold;">{{$KidProducts->name}}</h6>
                                            <p>{{$KidProducts->current_price}}/=</p>
                                            <a href="{{route('front.product', $KidProducts->slug)}}" class="btn btn-sm btn-Secondary"
                                                style="background-color: #ffffff;">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--/.First slide-->
                    <!--Second slide-->
                    <div class="carousel-item">
                        @foreach ($secondSixKidProducts as $KidProductsItem)
                        <div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
                            <div class="card">
                                <div class="container22">
                                    <img class="img-fluid" src="{{asset($KidProductsItem->cover)}}" alt="Card image cap">
                                    <div class="overlay">
                                        <div class="text">
                                            <h6 style="font-weight: bold;">{{$KidProductsItem->name}}</h6>
                                            <p>{{$KidProductsItem->current_price}}/=</p>
                                            <a href="{{route('front.product', $KidProductsItem->slug)}}" class="btn btn-sm btn-Secondary"
                                                style="background-color: #ffffff;">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--/.Second slide-->
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <div class="controls-top">
                    <div class="container">
                        <div class="row"
                            style="padding: 0px;border-bottom: 1px solid black ;border-radius: 0px 0px 50px 50px; ">
                            <div class="col-md-2" style="text-align: center;">
                                <a class="black-text" href="#multi-item-example3" data-slide="prev"><i
                                    class="fas fa-angle-left fa-3x pr-3"></i></a>
                            </div>
                            <div class="col-3"></div>
                            <div class="col-2" style="    text-align: center;margin-top: 10px;"><a href="{{route('front.products', [6, 'kids'])}}"><button type="button" style="border-radius: 50px;"
                                class="btn btn-info">EXPLORE</button></a></div>
                            <div class="col-3"></div>
                            <div class="col-md-2" style="text-align: center;">
                                <a class="black-text" href="#multi-item-example3" data-slide="next"><i
                                    class="fas fa-angle-right fa-3x pl-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Controls-->
            </div>
        </div>
        <br>
        <div class="container relatedproduct" style="padding:0px;" >
            <div class="row" style="text-align: center;" >
                <div class="col-4">
                    <hr style="margin-top: 30px;" >
                </div>
                <div class="col-4">
                    <h2>Recent products</h2>
                </div>
                <div class="col-4">
                    <hr style="margin-top: 30px;" >
                </div>
            </div>
            <!---fada---->
            <div class="row" style="margin-left: -20px; margin-right: -20px;" >
				@foreach ($recentProducts as $recentProduct)
					
				
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="conta12">
                                <img src="{{asset($recentProduct->cover)}}" style="height: 250px; width: 100%; " alt="Avatar" class="image12">
                                <div class="overlay12">
                                    <div class="text" style="text-align: center;" >
                                        <h2 style="font-weight: bold;" >{{$recentProduct->name}}</h2>
                                        <p>{{$recentProduct->current_price}}/=</p>
                                        <a href="{{route('front.product', $recentProduct->slug)}}" class="btn btn-sm btn-Secondary" style="background-color: #ffffff;" >Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row" style="text-align: left;font-weight: bold;" >
                                <a style="text-decoration: none;font-size:20px;"  href="#" style="margin-bottom: 15px;" >
                                {{$recentProduct->name}}
                                </a>
                            </div>
                            <del>
                            <span style="margin-right:20px;">@if ($recentProduct->previous_price != null) {{$recentProduct->previous_price}}/= @endif   </span>
                            </del>
                            &nbsp; &nbsp;
                            <ins><span style="font-size: 20px; font-weight: bold;color: green;margin-left: -37px;" >{{$recentProduct->current_price}}/=</span></ins>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{route('front.product', $recentProduct->slug)}}" style="text-decoration: none;" ><span style="font-size: 10px;" ><i class="fa fa-check-circle" style="font-size: 10px;"></i> &nbsp; Select options</span></a>
                                </div>
                                <div class="col-6" style="text-align: right;" >
                                    <a href="{{route('front.product', $recentProduct->slug)}}" style="text-decoration: none;" ><span style="font-size: 10px;" > <i class="fa fa-eye" style="font-size: 10px;" ></i>&nbsp; Quick View </span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

				@endforeach
            </div>
        </div>
    </div>
</div>
<!------Main Containt-->
<!------responsive containt-->
<div class="responsive-98">
    <div class="row" style="margin: 0px;">
        <div class="col-" style="text-align: center;">
            <hr>
            <h2 style="font-size: 12px;">Men Collection</h2>
            <hr>
        </div>
    </div>
    <div class="row" style="text-align: center;">
        <div class="col- fastpart">
			@foreach ($menProducts as $men)
			
            <a href="{{route('front.product', $men->slug)}}"><img src="{{asset($men->cover)}}" style="width: 100px;height: 100px; border-radius: 25px 0px 25px 0px; box-shadow: 5px 5px 20px lightslategray; " alt=""> </a>
			@endforeach
        </div>
    </div>
    <br>
    <div class="row" style="margin: 0px;">
        <div class="col-" style="text-align: center;">
            <hr>
            <h2 style="font-size: 12px;">Women Collection</h2>
            <hr>
        </div>
    </div>
    <div class="row" style="text-align: center;">
        <div class="col- fastpart">
            @foreach ($womenProducts as $women)
            <a href="{{route('front.product', $women->slug)}}"><img src="{{asset($women->cover)}}" style="width: 100px;height: 100px; border-radius: 25px 0px 25px 0px; box-shadow: 5px 5px 20px lightslategray; " alt=""> </a>
			@endforeach
        </div>
    </div>
    <br>
    <div class="row" style="margin: 0px;">
        <div class="col-" style="text-align: center;">
            <hr>
            <h2 style="font-size: 12px;">Kid Collection</h2>
            <hr>
        </div>
    </div>
    <div class="row" style="text-align: center;">
        <div class="col- fastpart">
            @foreach ($kidProducts as $kid)
            <a href="{{route('front.product', $kid->slug)}}"><img src="{{asset($kid->cover)}}" style="width: 100px;height: 100px; border-radius: 25px 0px 25px 0px; box-shadow: 5px 5px 20px lightslategray; " alt=""> </a>
			@endforeach
        </div>
    </div>
    <br>
    <div class="row" style="margin: 0px;">
        <div class="col-" style="text-align: center;">
            <hr>
            <h2 style="font-size: 12px;">Mobile Cover Collection</h2>
            <hr>
        </div>
    </div>
    <div class="row" style="text-align: center;">
        <div class="col- fastpart">
             @foreach ($mobileCoverProducts as $mobileCover)
            <a href="{{route('front.product', $mobileCover->slug)}}"><img src="{{asset($mobileCover->cover)}}" style="width: 100px;height: 100px; border-radius: 25px 0px 25px 0px; box-shadow: 5px 5px 20px lightslategray; " alt=""> </a>
			@endforeach
        </div>
    </div>
	<br>
	<div class="row" style="margin: 0px;">
        <div class="col-" style="text-align: center;">
            <hr>
            <h2 style="font-size: 12px;">Mug Collection</h2>
            <hr>
        </div>
    </div>
    <div class="row" style="text-align: center;">
        <div class="col- fastpart">
            @foreach ($mugProducts as $mug)
            <a href="{{route('front.product', $mug->slug)}}"><img src="{{asset($mug->cover)}}" style="width: 100px;height: 100px; border-radius: 25px 0px 25px 0px; box-shadow: 5px 5px 20px lightslategray; " alt=""> </a>
			@endforeach
        </div>
    </div>
	<br>
</div>
<!------responsive containt-->
@endsection

