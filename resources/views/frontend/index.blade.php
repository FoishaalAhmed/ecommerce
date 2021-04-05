@extends('layouts.app')

@section('title', 'Home')

@section('content')
<br><br>
<!------1st slider---->
	<div class="w3-content w3-display-container-fluid">
		<div class="w3-display-container mySlides w3-container w3-center w3-animate-opacity ">
			<img src="{{asset('public/frontend/img/black wall.webp')}}" style="width:100%;">
			<div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
				<div class="row">
					<div class="col-6 w3-container w3-center w3-animate-bottom ">
						<a href="#">
							<img id="mdig" src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="box-shadow: 10px 10px whitesmoke;"
								alt=""></a>
					</div>
					<div class="col-6 w3-container w3-center w3-animate-top">
						<a class="fstsliderwrite" href="#">
							<h2 style="font-weight: 800;color: white;"><img src="{{asset('public/frontend/img/coming gift-2.webp')}}" alt=""></h2>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="w3-display-container mySlides w3-container w3-center w3-animate-opacity ">
			<img src="{{asset('public/frontend/img/1920x1080-red-solid-color-background.jpg')}}" style="width:100%;">
			<div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
				<div class="row">
					<div class="col-6 w3-container w3-center w3-animate-left ">
						<a href="#"><img id="mdig" src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}"
								style="box-shadow: 10px 10px rgb(214, 30, 30);" alt=""></a>
					</div>
					<div class="col-6 w3-container w3-center w3-animate-right ">
						<a class="fstsliderwrite" href="#">
							<h2 style="font-weight: 800;color: white;"><img src="" alt=""> </h2>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="w3-display-container mySlides w3-container w3-center w3-animate-opacity ">
			<img src="{{asset('public/frontend/img/1920x1080-red-solid-color-background.jpg')}}" style="width:100%;">
			<div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
				<div class="row">
					<div class="col-6 w3-container w3-center w3-animate-zoom ">
						<a href="#"><img id="mdig" src="{{asset('public/frontend/img/logo.png')}}" style="box-shadow: 10px 10px whitesmoke;"
								alt=""></a>
					</div>
					<div class="col-6 w3-container w3-center w3-animate-zoom ">
						<a class="fstsliderwrite" href="#">
							<h2 style="font-weight: 800;color: white;">Lorem ipsum dolor sit amet consectetur
								adipisicing elit. Nihil, sunt?</h2>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="w3-display-container mySlides w3-container w3-center w3-animate-opacity ">
			<img src="{{asset('public/frontend/img/1920x1080-red-solid-color-background.jpg')}}" style="width:100%;">
			<div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
				<div class="row">
					<div class="col-6">
						<a href="#"><img id="mdig" src="{{asset('public/frontend/img/sajek-veally-1.webp')}}"
								style="box-shadow: 10px 10px whitesmoke;" alt=""></a>
					</div>
					<div class="col-6">
						<a class="fstsliderwrite" href="#">
							<h2 style="font-weight: 800;color: white;">Lorem ipsum dolor sit amet consectetur
								adipisicing elit. Nihil, sunt?</h2>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="w3-display-container mySlides w3-container w3-center w3-animate-opacity ">
			<img src="{{asset('public/frontend/img/1920x1080-red-solid-color-background.jpg')}}" style="width:100%;">
			<div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
				Mountains!
			</div>
		</div>
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
						{{-- <p>Lorem ipsum dolor sit amet.</p> --}}
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
										<div class="text"><img src="{{asset($MenProducts->photo)}}" style="width: 300px;"
												alt=""></div>
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
										<div class="text"><img src="{{asset($MenProductsItem->photo)}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						@endforeach

						{{-- <div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/Sundarbans-National-Park-1.jpg')}}"
										alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/Sundarbans-National-Park-1.jpg')}}"
										alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/sajek-veally-1.webp')}}" alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/sajek-veally-1.webp')}}" alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/Sundarbans-National-Park-1.jpg')}}"
										alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div> --}}
					</div>
					<!--/.Second slide-->
				</div>
				<!--/.Slides-->
				<!--Controls-->
				<div class="controls-top">
					<div class="container">
						<div class="row"
							style="padding: 0px;;border-radius: 0px 0px 50px 50px;border-bottom: 1px solid black;">
							<div class="col-md-2" style="text-align: center;">
								<a class="black-text" href="#multi-item-example" data-slide="prev"><i
										class="fas fa-angle-left fa-3x pr-3"></i></a>
							</div>
							<div class="col-3"></div>
							<div class="col-2" style="    text-align: center;margin-top: 10px;"><a href="#"><button
										type="button" style="border-radius: 50px;"
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
						<h2 style="margin: 0px;">Lorem ipsum amet.</h2>
						<p>Lorem ipsum dolor sit amet.</p>
					</div>
					<div class="col-4"
						style="margin-top: 25px;border-top: 2px solid black;border-radius: 0px 50px 0px 0px;">
					</div>
				</div>
			</div>
			<div class="row" style="text-align: center; margin: auto;">
				<div class="col-2">
					<div class="flip-card" style="height: 300px;">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="{{asset('public/frontend/img/mugs-shapes-mugs-3_2000x.webp')}}" alt="Avatar"
									style="width:100%;height:100%;">
							</div>
							<div class="flip-card-back">
								<h1>John Doe</h1>
								<p>Architect & Engineer</p>
								<p>We love that guy</p>
								<button type="button" class="btn btn-info">BUY NOW</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-2">
					<div class="flip-card" style="height: 300px;">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="{{asset('public/frontend/img/hjbrl-mug-design007-Mockup003.jpg')}}" alt="Avatar"
									style="width:100%;height:100%;">
							</div>
							<div class="flip-card-back">
								<h1>John Doe</h1>
								<p>Architect & Engineer</p>
								<p>We love that guy</p>
								<button type="button" class="btn btn-info">BUY NOW</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-2">
					<div class="flip-card" style="height: 300px;">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="{{asset('public/frontend/img/hjbrl-mug-design007-Mockup003.jpg')}}" alt="Avatar"
									style="width:100%;height:100%;">
							</div>
							<div class="flip-card-back">
								<h1>John Doe</h1>
								<p>Architect & Engineer</p>
								<p>We love that guy</p>
								<button type="button" class="btn btn-info">BUY NOW</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-2">
					<div class="flip-card" style="height: 300px;">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="{{asset('public/frontend/img/hjbrl-mug-design007-Mockup003.jpg')}}" alt="Avatar"
									style="width:100%;height:100%;">
							</div>
							<div class="flip-card-back">
								<h1>John Doe</h1>
								<p>Architect & Engineer</p>
								<p>We love that guy</p>
								<button type="button" class="btn btn-info">BUY NOW</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-2">
					<div class="flip-card" style="height: 300px;">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="{{asset('public/frontend/img/images.png')}}" alt="Avatar" style="width:100%;height:100%;">
							</div>
							<div class="flip-card-back">
								<h1>John Doe</h1>
								<p>Architect & Engineer</p>
								<p>We love that guy</p>
								<button type="button" class="btn btn-info">BUY NOW</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-2">
					<div class="flip-card" style="height: 300px;">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="{{asset('public/frontend/img/mugs-shapes-mugs-3_2000x.webp')}}" alt="Avatar"
									style="width:100%;height:100%;">
							</div>
							<div class="flip-card-back">
								<h1>John Doe</h1>
								<p>Architect & Engineer</p>
								<p>We love that guy</p>
								<button type="button" class="btn btn-info">BUY NOW</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row" style="padding: 0px;border-bottom: 1px solid black;border-radius: 0px 0px 50px 50px; ">
					<div class="col-md-2" style="text-align: center;">
						<!-- <a class="black-text" href="#multi-item-example3" data-slide="prev"><i class="fas fa-angle-left fa-3x pr-3"></i></a> -->
					</div>
					<div class="col-3"></div>
					<div class="col-2" style="    text-align: center;margin-top: 10px;"><a href="#"><button
								type="button" style="border-radius: 50px;" class="btn btn-info">more</button></a></div>
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
						<h2 style="margin: 0px;">Lorem ipsum amet.</h2>
						<p>Lorem ipsum dolor sit amet.</p>
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
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/sajek-veally-1.webp')}}" alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid"
										src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(19).jpg"
										alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/sajek-veally-1.webp')}}" alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid"
										src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(19).jpg"
										alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/sajek-veally-1.webp')}}" alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid"
										src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(19).jpg"
										alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/.First slide-->
					<!--Second slide-->
					<div class="carousel-item">
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/sajek-veally-1.webp')}}" alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid"
										src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(19).jpg"
										alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/sajek-veally-1.webp')}}" alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid"
										src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(19).jpg"
										alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/sajek-veally-1.webp')}}" alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid"
										src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(19).jpg'"
										alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/.Second slide-->
					<!--Third slide-->
					<div class="carousel-item">
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/sajek-veally-1.webp')}}" alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid"
										src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(19).jpg"
										alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/sajek-veally-1.webp')}}" alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid"
										src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(19).jpg"
										alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/sajek-veally-1.webp')}}" alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid"
										src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(19).jpg"
										alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/.Third slide-->
				</div>
				<!--/.Slides-->
				<!--Controls-->
				<div class="controls-top">
					<div class="container">
						<div class="row"
							style="padding: 0px; background-image: linear-gradient(rgb(250, 252, 255), rgb(170, 170, 168), rgb(197, 204, 235));border-radius: 0px 0px 50px 50px;">
							<div class="col-md-2" style="text-align: center;">
								<a class="black-text" href="#multi-item-example2" data-slide="prev"><i
										class="fas fa-angle-left fa-3x pr-3"></i></a>
							</div>
							<div class="col-3"></div>
							<div class="col-2" style="    text-align: center;margin-top: 10px;"><a href="#"><button
										type="button" style="border-radius: 50px;"
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
						<h2 style="margin: 0px;">Lorem ipsum amet.</h2>
						<p>Lorem ipsum dolor sit amet.</p>
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
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/sajek-veally-1.webp')}}" alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/Sundarbans-National-Park-1.jpg')}}"
										alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/sajek-veally-1.webp')}}" alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/Sundarbans-National-Park-1.jpg')}}"
										alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/sajek-veally-1.webp')}}" alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/Sundarbans-National-Park-1.jpg')}}"
										alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/.First slide-->
					<!--Second slide-->
					<div class="carousel-item">
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/sajek-veally-1.webp')}}" alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/Sundarbans-National-Park-1.jpg')}}"
										alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/sajek-veally-1.webp')}}" alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/Sundarbans-National-Park-1.jpg')}}"
										alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/sajek-veally-1.webp')}}" alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/Sundarbans-National-Park-1.jpg')}}"
										alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/.Second slide-->
					<!--Third slide-->
					<div class="carousel-item">
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/sajek-veally-1.webp')}}" alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/Sundarbans-National-Park-1.jpg')}}"
										alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/sajek-veally-1.webp')}}" alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/Sundarbans-National-Park-1.jpg')}}"
										alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/sajek-veally-1.webp')}}" alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-left: 0px; padding-right: 0px; ">
							<div class="card">
								<div class="container22">
									<img class="img-fluid" src="{{asset('public/frontend/img/Sundarbans-National-Park-1.jpg')}}"
										alt="Card image cap">
									<div class="overlay">
										<div class="text"><img src="{{asset('public/frontend/img/Hoodies-Banner-Images.png')}}" style="width: 300px;"
												alt=""></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/.Third slide-->
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
							<div class="col-2" style="    text-align: center;margin-top: 10px;"><a href="#"><button
										type="button" style="border-radius: 50px;"
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
						<h2 style="margin: 0px;">Lorem ipsum amet.</h2>
						<p>Lorem ipsum dolor sit amet.</p>
					</div>
					<div class="col-4"
						style="margin-top: 25px;border-top: 2px solid black;border-radius: 0px 50px 0px 0px;">
					</div>
				</div>
			</div>
			<div class="row" style="text-align: center; margin: auto;">
				<div class="col-3">
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="{{asset('public/frontend/img/mugs-shapes-mugs-3_2000x.webp')}}" alt="Avatar"
									style="width:100%;height:100%;">
							</div>
							<div class="flip-card-back">
								<h1>John Doe</h1>
								<p>Architect & Engineer</p>
								<p>We love that guy</p>
								<button type="button" class="btn btn-info">BUY NOW</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-3">
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="{{asset('public/frontend/img/hjbrl-mug-design007-Mockup003.jpg')}}" alt="Avatar"
									style="width:100%;height:100%;">
							</div>
							<div class="flip-card-back">
								<h1>John Doe</h1>
								<p>Architect & Engineer</p>
								<p>We love that guy</p>
								<button type="button" class="btn btn-info">BUY NOW</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-3">
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="{{asset('public/frontend/img/images.png')}}" alt="Avatar" style="width:100%;height:100%;">
							</div>
							<div class="flip-card-back">
								<h1>John Doe</h1>
								<p>Architect & Engineer</p>
								<p>We love that guy</p>
								<button type="button" class="btn btn-info">BUY NOW</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-3">
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="{{asset('public/frontend/img/mugs-shapes-mugs-3_2000x.webp')}}" alt="Avatar"
									style="width:100%;height:100%;">
							</div>
							<div class="flip-card-back">
								<h1>John Doe</h1>
								<p>Architect & Engineer</p>
								<p>We love that guy</p>
								<button type="button" class="btn btn-info">BUY NOW</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row"
					style="padding: 0px; background-image: linear-gradient(rgb(250, 252, 255), rgb(170, 170, 168), rgb(197, 204, 235));border-radius: 0px 0px 50px 50px; ">
					<div class="col-md-2" style="text-align: center;">
						<!-- <a class="black-text" href="#multi-item-example3" data-slide="prev"><i class="fas fa-angle-left fa-3x pr-3"></i></a> -->
					</div>
					<div class="col-3"></div>
					<div class="col-2" style="    text-align: center;margin-top: 10px;"><a href="#"><button
								type="button" style="border-radius: 50px;" class="btn btn-info">more</button></a></div>
					<div class="col-3"></div>
					<div class="col-md-2" style="text-align: center;">
						<!-- <a class="black-text" href="#multi-item-example3" data-slide="next"><i class="fas fa-angle-right fa-3x pl-3"></i></a> -->
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row" style="text-align: center;">
			<div class="col-5">
				<hr style="margin-top: 50px;">
			</div>
			<div class="col-2">
				<h2>Recently Uploaded</h2>
				<p>Lorem ipsum dolor sit amet.</p>
			</div>
			<div class="col-5">
				<hr style="margin-top: 50px;">
			</div>
		</div>
		<!---fada---->
		<div class="row" style="margin: 0px;">
			<div class="col-3">
				<div class="card">
					<div class="card-body">
						<div class="conta12">
							<img src="{{asset('public/frontend/img/mockup1-27.jpg')}}" style="height: 550px; width: 100%; " alt="Avatar"
								class="image12">
							<div class="overlay12">
								<div class="text12"><img src="{{asset('public/frontend/img/mockup1-2.jpg')}}" style="height: 100%;" alt=""></div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="row"
							style="text-align: left;font-weight: bold;padding-top: 20px; padding-bottom: 20px; ">
							<a style="text-decoration: none;" href="#">
								Personalised Travel Pouch
							</a>
						</div>
						<del>
							<span>2,500/= </span>
						</del>
						&nbsp; &nbsp;
						<ins><span style="font-size: 15px; font-weight: bold;color: green;">2,000/=</span></ins>
					</div>
					<div class="card-footer">
						<div class="row" style="padding-top: 15px; padding-bottom: 15px;">
							<div class="col-6">
								<a href="#" style="text-decoration: none;"><span><i class="fa fa-check-circle"></i>
										&nbsp; Select options</span></a>
							</div>
							<div class="col-6" style="text-align: right;">
								<a href="#" style="text-decoration: none;"><span> <i class="fa fa-eye"></i>&nbsp; Quick
										View </span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card">
					<div class="card-body">
						<div class="conta12">
							<img src="{{asset('public/frontend/img/mockup1-27.jpg')}}" style="height: 550px; width: 100%; " alt="Avatar"
								class="image12">
							<div class="overlay12">
								<div class="text12"><img src="{{asset('public/frontend/img/mockup1-2.jpg')}}" style="height: 100%;" alt=""></div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="row"
							style="text-align: left;font-weight: bold;padding-top: 20px; padding-bottom: 20px; ">
							<a style="text-decoration: none;" href="#">
								Personalised Travel Pouch
							</a>
						</div>
						<del>
							<span>2,500/= </span>
						</del>
						&nbsp; &nbsp;
						<ins><span style="font-size: 15px; font-weight: bold;color: green;">2,000/=</span></ins>
					</div>
					<div class="card-footer">
						<div class="row" style="padding-top: 15px; padding-bottom: 15px;">
							<div class="col-6">
								<a href="#" style="text-decoration: none;"><span><i class="fa fa-check-circle"></i>
										&nbsp; Select options</span></a>
							</div>
							<div class="col-6" style="text-align: right;">
								<a href="#" style="text-decoration: none;"><span> <i class="fa fa-eye"></i>&nbsp; Quick
										View </span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card">
					<div class="card-body">
						<div class="conta12">
							<img src="{{asset('public/frontend/img/mockup1-27.jpg')}}" style="height: 550px; width: 100%; " alt="Avatar"
								class="image12">
							<div class="overlay12">
								<div class="text12"><img src="{{asset('public/frontend/img/mockup1-2.jpg')}}" style="height: 100%;" alt=""></div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="row"
							style="text-align: left;font-weight: bold;padding-top: 20px; padding-bottom: 20px; ">
							<a style="text-decoration: none;" href="#">
								Personalised Travel Pouch
							</a>
						</div>
						<del>
							<span>2,500/= </span>
						</del>
						&nbsp; &nbsp;
						<ins><span style="font-size: 15px; font-weight: bold;color: green;">2,000/=</span></ins>
					</div>
					<div class="card-footer">
						<div class="row" style="padding-top: 15px; padding-bottom: 15px;">
							<div class="col-6">
								<a href="#" style="text-decoration: none;"><span><i class="fa fa-check-circle"></i>
										&nbsp; Select options</span></a>
							</div>
							<div class="col-6" style="text-align: right;">
								<a href="#" style="text-decoration: none;"><span> <i class="fa fa-eye"></i>&nbsp; Quick
										View </span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card">
					<div class="card-body">
						<div class="conta12">
							<img src="{{asset('public/frontend/img/mockup1-27.jpg')}}" style="height: 550px; width: 100%; " alt="Avatar"
								class="image12">
							<div class="overlay12">
								<div class="text12"><img src="{{asset('public/frontend/img/mockup1-2.jpg')}}" style="height: 100%;" alt=""></div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="row"
							style="text-align: left;font-weight: bold;padding-top: 20px; padding-bottom: 20px; ">
							<a style="text-decoration: none;" href="#">
								Personalised Travel Pouch
							</a>
						</div>
						<del>
							<span>2,500/= </span>
						</del>
						&nbsp; &nbsp;
						<ins><span style="font-size: 15px; font-weight: bold;color: green;">2,000/=</span></ins>
					</div>
					<div class="card-footer">
						<div class="row" style="padding-top: 15px; padding-bottom: 15px;">
							<div class="col-6">
								<a href="#" style="text-decoration: none;"><span><i class="fa fa-check-circle"></i>
										&nbsp; Select options</span></a>
							</div>
							<div class="col-6" style="text-align: right;">
								<a href="#" style="text-decoration: none;"><span> <i class="fa fa-eye"></i>&nbsp; Quick
										View </span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row" style="margin: 0px;">
			<div class="col-3">
				<div class="card">
					<div class="card-body">
						<div class="conta12">
							<img src="{{asset('public/frontend/img/d1.jpg')}}" style="height: 400px; width: 100%; " alt="Avatar" class="image12">
							<div class="overlay12">
								<div class="text12"><img src="{{asset('public/frontend/img/dd1.jpg')}}" style="height: 400px;width: 100%;" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="row"
							style="text-align: left;font-weight: bold;padding-top: 20px; padding-bottom: 20px; ">
							<a style="text-decoration: none;" href="#">
								Personalised Travel Pouch
							</a>
						</div>
						<del>
							<span>2,500/= </span>
						</del>
						&nbsp; &nbsp;
						<ins><span style="font-size: 15px; font-weight: bold;color: green;">2,000/=</span></ins>
					</div>
					<div class="card-footer">
						<div class="row" style="padding-top: 15px; padding-bottom: 15px;">
							<div class="col-6">
								<a href="#" style="text-decoration: none;"><span><i class="fa fa-check-circle"></i>
										&nbsp; Select options</span></a>
							</div>
							<div class="col-6" style="text-align: right;">
								<a href="#" style="text-decoration: none;"><span> <i class="fa fa-eye"></i>&nbsp; Quick
										View </span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card">
					<div class="card-body">
						<div class="conta12">
							<img src="{{asset('public/frontend/img/d2.jpg')}}" style="height: 400px; width: 100%; " alt="Avatar" class="image12">
							<div class="overlay12">
								<div class="text12"><img src="{{asset('public/frontend/img/dd2.jpg')}}" style="height: 100%;width: 100%;" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="row"
							style="text-align: left;font-weight: bold;padding-top: 20px; padding-bottom: 20px; ">
							<a style="text-decoration: none;" href="#">
								Personalised Travel Pouch
							</a>
						</div>
						<del>
							<span>2,500/= </span>
						</del>
						&nbsp; &nbsp;
						<ins><span style="font-size: 15px; font-weight: bold;color: green;">2,000/=</span></ins>
					</div>
					<div class="card-footer">
						<div class="row" style="padding-top: 15px; padding-bottom: 15px;">
							<div class="col-6">
								<a href="#" style="text-decoration: none;"><span><i class="fa fa-check-circle"></i>
										&nbsp; Select options</span></a>
							</div>
							<div class="col-6" style="text-align: right;">
								<a href="#" style="text-decoration: none;"><span> <i class="fa fa-eye"></i>&nbsp; Quick
										View </span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card">
					<div class="card-body">
						<div class="conta12">
							<img src="{{asset('public/frontend/img/d3.jpg')}}" style="height: 400px; width: 100%; " alt="Avatar" class="image12">
							<div class="overlay12">
								<div class="text12"><img src="{{asset('public/frontend/img/dd3.jpg')}}" style="height: 100%;width: 100%;" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="row"
							style="text-align: left;font-weight: bold;padding-top: 20px; padding-bottom: 20px; ">
							<a style="text-decoration: none;" href="#">
								Personalised Travel Pouch
							</a>
						</div>
						<del>
							<span>2,500/= </span>
						</del>
						&nbsp; &nbsp;
						<ins><span style="font-size: 15px; font-weight: bold;color: green;">2,000/=</span></ins>
					</div>
					<div class="card-footer">
						<div class="row" style="padding-top: 15px; padding-bottom: 15px;">
							<div class="col-6">
								<a href="#" style="text-decoration: none;"><span><i class="fa fa-check-circle"></i>
										&nbsp; Select options</span></a>
							</div>
							<div class="col-6" style="text-align: right;">
								<a href="#" style="text-decoration: none;"><span> <i class="fa fa-eye"></i>&nbsp; Quick
										View </span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card">
					<div class="card-body">
						<div class="conta12">
							<img src="{{asset('public/frontend/img/d1.jpg')}}" style="height: 400px; width: 100%; " alt="Avatar" class="image12">
							<div class="overlay12">
								<div class="text12"><img src="{{asset('public/frontend/img/dd1.jpg')}}" style="height: 100%;width: 100%;" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="row"
							style="text-align: left;font-weight: bold;padding-top: 20px; padding-bottom: 20px; ">
							<a style="text-decoration: none;" href="#">
								Personalised Travel Pouch
							</a>
						</div>
						<del>
							<span>2,500/= </span>
						</del>
						&nbsp; &nbsp;
						<ins><span style="font-size: 15px; font-weight: bold;color: green;">2,000/=</span></ins>
					</div>
					<div class="card-footer">
						<div class="row" style="padding-top: 15px; padding-bottom: 15px;">
							<div class="col-6">
								<a href="#" style="text-decoration: none;"><span><i class="fa fa-check-circle"></i>
										&nbsp; Select options</span></a>
							</div>
							<div class="col-6" style="text-align: right;">
								<a href="#" style="text-decoration: none;"><span> <i class="fa fa-eye"></i>&nbsp; Quick
										View </span></a>
							</div>
						</div>
					</div>
				</div>
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
				<h2 style="font-size: 12px;">Lorem ipsum inventore?</h2>
				<hr>
			</div>
		</div>
		<div class="row" style="text-align: center;">
			<div class="col- fastpart">
				<a href="#"><img src="{{asset('public/frontend/img/mockup1-27.jpg')}}"
						style="width: 100px;height: 100px; border-radius: 25px 0px 25px 0px; box-shadow: 5px 5px 20px lightslategray; "
						alt=""> </a>
				<a href="#"><img src="{{asset('public/frontend/img/mockup1-27.jpg')}}"
						style="width: 100px;height: 100px; border-radius: 25px 0px 25px 0px; box-shadow: 5px 5px 20px lightslategray; "
						alt=""> </a>
				<a href="#"><img src="{{asset('public/frontend/img/mockup1-27.jpg')}}"
						style="width: 100px;height: 100px; border-radius: 25px 0px 25px 0px; box-shadow: 5px 5px 20px lightslategray; "
						alt=""> </a> <br>
				<a href="#"><img src="{{asset('public/frontend/img/mockup1-27.jpg')}}"
						style="width: 100px;height: 100px; border-radius: 25px 0px 25px 0px; box-shadow: 5px 5px 20px lightslategray;  margin-top: 10px;"
						alt=""> </a>
				<a href="#"><img src="{{asset('public/frontend/img/mockup1-27.jpg')}}"
						style="width: 100px;height: 100px; border-radius: 25px 0px 25px 0px; box-shadow: 5px 5px 20px lightslategray;  margin-top: 10px;"
						alt=""> </a>
			</div>
		</div>
		<div class="row" style="text-align: center;margin-top: 5px;">
			<div class="col-"><button class="btn btn-primary" style="padding: 2px;"> SEE MORE </button></div>
		</div>
		<br>
		<div class="row" style="margin: 0px;">
			<div class="col-" style="text-align: center;">
				<hr>
				<h2 style="font-size: 12px;">Lorem ipsum inventore?</h2>
				<hr>
			</div>
		</div>
		<div class="row" style="text-align: center;">
			<div class="col- fastpart">
				<a href="#"><img src="{{asset('public/frontend/img/mockup1-2.jpg')}}" style="width: 100px;height: 150px;" alt=""> </a>
				<a href="#"><img src="{{asset('public/frontend/img/mockup1-2.jpg')}}" style="width: 100px;height: 150px;" alt=""> </a>
				<a href="#"><img src="{{asset('public/frontend/img/mockup1-2.jpg')}}" style="width: 100px;height: 150px;" alt=""> </a> <br>
				<a href="#"><img src="{{asset('public/frontend/img/mockup1-2.jpg')}}" style="width: 100px;height: 150px; margin-top: 10px;" alt="">
				</a>
				<a href="#"><img src="{{asset('public/frontend/img/mockup1-2.jpg')}}" style="width: 100px;height: 150px; margin-top: 10px;" alt="">
				</a>
			</div>
		</div>
		<!-- <div class="row" style="text-align: center;margin-top: -30px; margin-bottom: 15px;" >
                <p class="pdtl" style="margin: 0px; color: #ffffff; " ><span><a href="#" style="text-decoration: none;color: #ffffff;" >Jubair</a>  &nbsp;  &nbsp; &nbsp;
                  &nbsp; &nbsp;
                  &nbsp; &nbsp;  &nbsp; &nbsp; </span> <span><a href="#" style="text-decoration: none;color: #ffffff;" > Jubair</a> &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; </span> <span><a href="#" style="text-decoration: none;color: #ffffff;" > Jubair</a> &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; </span> </p>
                </div> -->
		<div class="row" style="text-align: center;margin-top: 5px;">
			<div class="col-"><button class="btn btn-primary" style="padding: 2px;"> SEE MORE </button></div>
		</div>
		<br>
		<div class="row" style="margin: 0px;">
			<div class="col-" style="text-align: center;">
				<hr>
				<h2 style="font-size: 12px;">Lorem ipsum inventore?</h2>
				<hr>
			</div>
		</div>
		<div class="row" style="text-align: center;">
			<div class="col- fastpart">
				<a href="#"><img src="{{asset('public/frontend/img/product-1.jpg')}}"
						style="width: 100px;height: 100px; border-radius: 50%; box-shadow: 5px 5px 20px lightslategray; "
						alt=""> </a>
				<a href="#"><img src="{{asset('public/frontend/img/product-1.jpg')}}"
						style="width: 100px;height: 100px; border-radius: 50%; box-shadow: 5px 5px 20px lightslategray; "
						alt=""> </a>
				<a href="#"><img src="{{asset('public/frontend/img/product-1.jpg')}}"
						style="width: 100px;height: 100px; border-radius: 50%; box-shadow: 5px 5px 20px lightslategray; "
						alt=""> </a> <br>
				<a href="#"><img src="{{asset('public/frontend/img/product-1.jpg')}}"
						style="width: 100px;height: 100px; border-radius: 50%; box-shadow: 5px 5px 20px lightslategray;  margin-top: 10px;"
						alt=""> </a>
				<a href="#"><img src="{{asset('public/frontend/img/product-1.jpg')}}"
						style="width: 100px;height: 100px; border-radius: 50%; box-shadow: 5px 5px 20px lightslategray;  margin-top: 10px;"
						alt=""> </a>
			</div>
		</div>
		<div class="row" style="text-align: center;margin-top: 5px;">
			<div class="col-"><button class="btn btn-primary" style="padding: 2px;"> SEE MORE </button></div>
		</div>
		<br>
		<div class="row" style="margin: 0px;">
			<div class="col-" style="text-align: center;">
				<hr>
				<h2 style="font-size: 12px;">Lorem ipsum inventore?</h2>
				<hr>
			</div>
		</div>
		<div class="row" style="text-align: center;">
			<div class="col- fastpart">
				<a href="#"><img src="{{asset('public/frontend/img/mockup1-27.jpg')}}"
						style="width: 100px;height: 100px; border-radius: 25px 0px 25px 0px; box-shadow: 5px 5px 20px lightslategray; "
						alt=""> </a>
				<a href="#"><img src="{{asset('public/frontend/img/mockup1-27.jpg')}}"
						style="width: 100px;height: 100px; border-radius: 25px 0px 25px 0px; box-shadow: 5px 5px 20px lightslategray; "
						alt=""> </a>
				<a href="#"><img src="{{asset('public/frontend/img/mockup1-27.jpg')}}"
						style="width: 100px;height: 100px; border-radius: 25px 0px 25px 0px; box-shadow: 5px 5px 20px lightslategray; "
						alt=""> </a> <br>
				<a href="#"><img src="{{asset('public/frontend/img/mockup1-27.jpg')}}"
						style="width: 100px;height: 100px; border-radius: 25px 0px 25px 0px; box-shadow: 5px 5px 20px lightslategray;  margin-top: 10px;"
						alt=""> </a>
				<a href="#"><img src="{{asset('public/frontend/img/mockup1-27.jpg')}}"
						style="width: 100px;height: 100px; border-radius: 25px 0px 25px 0px; box-shadow: 5px 5px 20px lightslategray;  margin-top: 10px;"
						alt=""> </a>
			</div>
		</div>
		<div class="row" style="text-align: center;margin-top: 5px;">
			<div class="col-"><button class="btn btn-primary" style="padding: 2px;"> SEE MORE </button></div>
		</div>
	</div>
	<!------responsive containt-->
@endsection