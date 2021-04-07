<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BanglaBesh | @yield('title')</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
	<!--main Style-->
	<link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
	<!---Font Asowm-->
	<link rel="stylesheet" href="{{asset('public/frontend/css/all.min.css')}}">
	<!-----responsive-->
	<link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css')}}">
	<!---slider-->
	<link rel="stylesheet" href="{{asset('public/frontend/css/slider.css')}}">
	<!----animation-->
	<link rel="stylesheet" href="{{asset('public/frontend/css/animation.css')}}">
	<!-----Test Slider----->
	<link rel="stylesheet" href="{{asset('public/frontend/css/slickslider/slick.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/slickslider/slick-theme.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/afnan css.css')}}">
	<!---Font Awesome-->
	<link rel="stylesheet" href="{{asset('public/frontend/css/font/css/brands.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/font/css/brands.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/font/css/fontawesome.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/font/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/font/css/svg-with-js.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="{{asset('public/frontend/css/font/js/brands.js')}}"></script>
	<script src="{{asset('public/frontend/css/font/js/brands.min.js')}}"></script>
	<script src="{{asset('public/frontend/css/font/js/fontawesome.js')}}"></script>
	<script src="{{asset('public/frontend/css/font/js/fontawesome.min.js')}}"></script>
	<script src="{{asset('public/frontend/css/font/js/all.js')}}"></script>

	@section('header')
		
	@show
</head>

<body style="background: #ffffff;background-image: linear-gradient(aliceblue, #ffffff);">
	<div class="container-fluid" style="padding: 0px; background-image: linear-gradient(rgb(250, 252, 255), rgb(170, 170, 168), rgb(197, 204, 235));">
		<div class="container-fluid desktop-head">
			<div class="" style="height: 2px;background-color: red;margin-left: -12px;margin-right: -12px;"></div>
			<div class="">
				<div class="row" style="border-bottom:1px solid darkgray;height: 30px;">
					<div class="col-7" style="height: 30px;"></div>
					<div class="col-2" style="border-right: 1px solid darkgray;text-align: right;height: 30px;">
						<p><a href="{{route('pages', 'return-shipment')}}" style="text-decoration: none; color: darkgray;  ">Return & Shipment</a></p>
					</div>
					<div class="col-2" style="margin-left: px; margin-top: -21px;height: 30px;">
						<p>
							<a href="#">
								<div class="dropdown">
									<button class="dropbtn" style="background: none;">My Account <i
											class="fa fa-caret-down"></i> </button>
									<div class="dropdown-content" style="padding: 15px; ">
										<form class="form-inline" action="{{route('login')}}" method="POST">
                                            @csrf
                                            <br>
											<input type="email" id="email" placeholder="Enter email" name="email"> <br>
											<br>
											<input type="password" id="pwd" placeholder="Enter password" name="password">
											<label>
												<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} > Remember me
											</label> <br> <br>
											<button class="btn btn-success" style="border-radius: 10px; padding: 2px; padding-left: 5px; padding-right: 5px; " type="submit">Login</button>
                                            <button style="float: right;" type="button">
                                                <a href="{{route('register')}}">Register</a>
                                            </button> 
										</form>
									</div>
								</div>
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid responsive-head ">
			<div class="" style="height: 2px;background-color: red;margin-left: -20px;margin-right: -10px;"></div>
			<div class="">
				<div class="row" style="border-bottom:1px solid darkgray;height: 30px;">
					<div class="col-6" style="border-right: 1px solid darkgray;text-align: right;height: 30px;">
						<p><a href="#" style="text-decoration: none; color: darkgray;">Return & Shipment</a></p>
					</div>
					<div class="col-6" style="margin-left: px; margin-top: -21px;height: 30px;">
						<p style="margin-top: -23px;">
							<a href="#">
								<div class="dropdown">
									<button class="dropbtn" style="background: none;">My Account <i
											class="fa fa-caret-down"></i> </button>
									<div class="dropdown-content" style="padding: 15px;">
										<form class="form-inline" action="/action_page.php"> <br>
											<input type="email" id="email" placeholder="Enter email" name="email"> <br>
											<br>
											<input type="password" id="pwd" placeholder="Enter password" name="pswd">
											<label>
												<input type="checkbox" name="remember"> Remember me
											</label> <br> <br>
											<button class="btn btn-success" style="border-radius: 10px; padding: 2px; padding-left: 5px; padding-right: 5px; " type="submit">Login</button> 
                                            <button style="float: right;" type="button"><a href="{{route('register')}}">Register</a></button>
										</form>
									</div>
								</div>
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!----Nav bar-->
		<div class="container" style="margin-top: -8px;margin-bottom: 10px;">
			<div class="row desktop-nav" style=" border-radius: 20px;">
				<div class="col-2">
					<a href="{{URL::to('/')}}"><img src="{{asset('public/frontend/img/logo.png')}}" style="margin-top: 20px;" alt=""></a>
				</div>
				<div class="col-1"></div>
				<div class="col-9 desktop-nav">
					<nav class="navbar navbar-expand-lg navbar-light " style="font-size: 15px; margin-top: -2px">
						<div class="container-fluid">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="{{URL::to('/')}}">Home</a>
								</li>
								@php
									use App\Model\Category;

									$parents = Category::where('parent_id', 0)->orderBy('name', 'asc')->get();
								@endphp

								@foreach ($parents as  $parent)

								@php
									$childs = Category::where('parent_id', $parent->id)->orderBy('name', 'asc')->get();
								@endphp

								@if ($childs->isEmpty())

									<li class="nav-item">
										<a class="nav-link" href="{{route('front.products', [$parent->id, strtolower(str_replace(' ', '-', $parent->name))])}}">{{$parent->name}}</a>
									</li>
									
								@else
								
									<li class="nav-item">
										<div class="dropdown">
											<button class="dropbtn" style="background: none;color: black;font-size: 15px; margin-top: 23px;"> {{$parent->name}} <i class="fa fa-caret-down"></i> </button>

											<div class="dropdown-content" style="padding: 15px;border-top: 3px solid red;">
												@foreach ($childs as $child)
												@php
													$grandchilds = Category::where('parent_id', $child->id)->orderBy('name', 'asc')->get();
												@endphp

												@if ($grandchilds->isEmpty())
													
													<a href="{{route('front.products', [$child->id, strtolower(str_replace(' ', '-', $child->name))])}}"> {{$child->name}} </a>

												@else

												<div class="dropdown2">
													<button class="dropbtn2" style="background: none;"> <a href="#"> {{$child->name}} <i class="fa fa-caret-down"></i> </a> </button>
													<div class="dropdown-content2">
														@foreach ($grandchilds as $grand)
															<a href="{{route('front.products', [$grand->id, strtolower(str_replace(' ', '-', $grand->name))])}}">{{$grand->name}}</a>
														@endforeach
													</div>
												</div>
													
												@endif
												
												@endforeach
											</div>

										</div>
									</li>

								@endif
								@endforeach
								<li class="nav-item">
									<a class="nav-link" aria-current="page" href="#"><i
											class="fas fa-cart-plus"></i><span style="color: rgb(222, 247, 3);padding:5px;font-weight:bold;" id="cart-count">{{Cart::count()}}</span></a>
								</li>
								<!-----Search Bar----->
								<li class="nav-item" style="padding-right: 0px;">
									<a class="nav-link" aria-current="page" href="#">
										<div id="myOverlay9" class="overlay9">
											<span class="closebtn9" onclick="closeSearch()"
												title="Close Overlay9">×</span>
											<div class="overlay-content9">
												<form action="{{route('search')}}" method="GET">
													@csrf
													<input type="text" placeholder="Search.." name="search">
													<button type="submit"><i class="fa fa-search"></i></button>
												</form>
											</div>
										</div>
										<button class="openBtn9" onclick="openSearch()"><i
												class="fas fa-search"></i></button>
									</a>
								</li>

								@auth
								<li class="nav-item">
									<div class="dropdown">
										<button class="dropbtn" style="background: none;color: black;font-size: 15px; margin-top: 23px;"> My Accounts <i class="fa fa-caret-down"></i> </button>
										<div class="dropdown-content" style="padding: 15px;border-top: 3px solid red;">
											<a href="{{route('user.dashboard')}}"> Orders </a>
											<a href="{{route('user.profile')}}"> Profile </a>
											<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('Sign out')}}</a>
                                
                                			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
										</div>
									</div>
								</li>
								@endauth
							</ul>
						</div>
				</div>
				</nav>
			</div>
			<!-----responsive Nav------->
			<div class="nav mobile-responsive">
				<div class="">
					<span>
						<span><a href="{{URL::to('/')}}"> <img src="{{asset('public/frontend/img/logo.png')}}" style="height: 50px; width: 50px; " alt=""></a></span>

						@foreach ($parents as  $parent)

						@php
							$childs = Category::where('parent_id', $parent->id)->orderBy('name', 'asc')->get();
						@endphp

						@if ($childs->isEmpty())
						
							<span><a href="{{route('front.products', [$parent->id, strtolower(str_replace(' ', '-', $parent->name))])}}"> {{$parent->name}} </a></span>

						@endif

						@endforeach

						<span>
							<div class="dropdown">
								<button class="dropbtn" style="background: none;color: black;font-size: 15px; margin-top: 23px;"> More <i class="fa fa-caret-down"></i> </button>
								<div class="dropdown-content" style="padding: 15px;border-top: 3px solid red;">
									<div class="dropdown2">
										@foreach ($parents as  $parent)

											@php
												$reschilds = Category::where('parent_id', $parent->id)->orderBy('name', 'asc')->get();
											@endphp

										@if ($reschilds->isNotEmpty())
											<button class="dropbtn2" style="background: none;"> {{$parent->name}} <i class="fa fa-caret-down"></i> </button> <br>
										@endif
										<div class="dropdown-content2">

											@foreach ($reschilds as $reschild)

											@php
												$resgrandchilds = Category::where('parent_id', $reschild->id)->orderBy('name', 'asc')->get();
											@endphp

											@if ($resgrandchilds->isEmpty())
												<a href="{{route('front.products', [$reschild->id, strtolower(str_replace(' ', '-', $reschild->name))])}}">{{$reschild->name}}</a>
											@else

											<div class="dropdown2">
												<button class="dropbtn2" style="background: none;"> {{$reschild->name}}<i class="fa fa-caret-down"></i> </button>
												<div class="dropdown-content2">
													@foreach ($resgrandchilds as $resgrandchild)
														<a href="{{route('front.products', [$resgrandchild->id, strtolower(str_replace(' ', '-', $resgrandchild->name))])}}">{{$resgrandchild->name}}</a>
														
													@endforeach

												</div>
											</div>
												
											@endif
												
											@endforeach

											
											
										</div>
										@endforeach
									</div>
								</div>
							</div>
						</span>
						<span>
							<a href="#"><i class="fas fa-cart-plus"></i> <span style="color: rgb(222, 247, 3);padding:5px;font-weight:bold;" id="cart-count">{{Cart::count()}}</span></a>
						</span>
						<span>
							<a href="#">
								<div id="myOverlay11" class="overlay11">
									<span class="closebtn11" onclick="closeSearch()" title="Close Overlay11">×</span>
									<div class="overlay-content11">
										<form action="{{route('search')}}" method="GET">
												@csrf
											<input type="text" placeholder="Search.." name="search">
											<button type="submit"><i class="fa fa-search"></i></button>
										</form>
									</div>
								</div>
								<button class="openBtn11" onclick="openSearch()"><i class="fas fa-search"></i></button>
								<script>
									function openSearch() {
										document.getElementById("myOverlay11").style.display = "block";
									}

									function closeSearch() {
										document.getElementById("myOverlay11").style.display = "none";
									}
								</script>
							</a>
						</span>
					</span>
				</div>
			</div>
		</div>
	</div>
	<hr style="margin-top: 0px;margin-bottom: 0px;">

    @section('content')
        
    @show

    <!-----Footer----->
	<div class="container-fluid " style="background-color: #2b2f32;">
		<div class="row footerlogoicon">
			<img style="padding: 0px;" src="{{asset('public/frontend/img/footerbg-1.jpg')}}" alt="">
		</div>
		<br><br>
		<div class="container">
			<div class="row ">
				<div class="col-4">
					<div class="footerlogoicon">
						<img src="{{asset('public/frontend/img/logo.png')}}" alt="">
					</div>
					<br>
					<div class="footerlogoicon" style="color: white">
						<p style="margin: 0px; color: white;">{!!$contact->address!!}</p>
						<br>
						<p style="margin: 0px; color: white;">Phone: {{$contact->phone}}</p>
						<p style="margin: 0px; color: white;">Email: {{$contact->email}}</p>
					</div>
					<br>
					<div class="footer-icon footerlogoicon">
						<div class="row">
							<div class="col-1">
								<span>
									<a href="{{$contact->facebook}}" title="facebook"><i class="fab fa-facebook-f"></i></a>
								</span>
							</div>
							<div class="col-1">
								<span>
									<a href="{{$contact->instagram}}" title="instagram"><i class="fab fa-instagram"></i></a>
								</span>
							</div>
							<div class="col-1">
								<span>
									<a href="{{$contact->twitter}}" title="twitter"><i class="fab fa-twitter"></i></a>
								</span>
							</div>
						</div>
					</div>
					<br><br>
				</div>
				<div class="col-3 quicklink">
					<div class="">
						<span style="color: white;">Quick Links</span>
					</div>
					<br>
					<br>
					<div class="footer-mdmd">
						<span> <span style="font-weight: 800;"></span> <span><a href="{{route('about')}}"> <span class="mdmd2">About Us</span> </a></span> </span>
						<hr style="margin-top: 10px; margin-bottom: 10px; ">

						<span> <span style="font-weight: 800;"></span> <span><a href="{{route('front.contact')}}"> <span class="mdmd2">Contact Us</span> </a></span> </span>
						<hr style="margin-top: 10px; margin-bottom: 10px; ">

						<span> <span style="font-weight: 800;"></span> <span><a href="{{route('pages', 'return-shipment')}}"> <span class="mdmd2">Return & Shipment</span> </a></span> </span>
						<hr style="margin-top: 10px; margin-bottom: 10px; ">

						<span> <span style="font-weight: 800;"></span> <span><a href="{{route('pages', 'terms-conditions')}}"> <span class="mdmd2">Terms & Conditions</span> </a></span> </span>
						<hr style="margin-top: 10px; margin-bottom: 10px; ">

						<span> <span style="font-weight: 800;"></span> <span><a href="{{route('pages', 'privacy-policy')}}"> <span class="mdmd2">Privacy Policy</span> </a></span> </span>
						<hr style="margin-top: 10px; margin-bottom: 10px; ">
					</div>
				</div>
				<div class="col-1"></div>
				<!------ tag ------>
				<div class="col-4 quicklinkrs">
					<div class="row tag" style="text-align: center;">
						<h2 style="color: white;">Quick Link</h2>
						<hr>
					</div>
					<ul class="cloud" role="navigation" aria-label="Webdev word cloud">
						<li><a href="{{route('about')}}" data-weight="6" style="color: whitesmoke; font-size: 18px; ">About Us</a></li>
						<li><a href="{{route('front.contact')}}" data-weight="6" style="color: whitesmoke; font-size: 18px; ">Contact Us</a></li>
						<li><a href="{{route('pages', 'return-shipment')}}" data-weight="6" style="color: whitesmoke; font-size: 18px; ">Return & Shipment</a></li>
						<li><a href="{{route('pages', 'terms-conditions')}}" data-weight="6" style="color: whitesmoke; font-size: 18px; ">Terms & Conditions</a></li>
						<li><a href="{{route('pages', 'privacy-policy')}}" data-weight="6" style="color: whitesmoke; font-size: 18px; ">Privacy Policy</a></li>
					</ul>
				</div>
				<div class="col-4">
					<div class="row tag" style="text-align: center;">
						<h2 style="color: white;">Product categories</h2>
						<hr>
					</div>
					<ul class="cloud" role="navigation" aria-label="Webdev word cloud">
						@foreach ($parents as $key => $item)
							
						
						<li><a href="{{route('front.products', [$item->id, strtolower(str_replace(' ', '-', $item->name))])}}" data-weight="{{++$key}}">{{$item->name}}</a></li>

						@endforeach
					</ul>
				</div>
			</div>
			<!-----Responsive Footer ----->
			<div class="footerhid">
				<div class="row">
					<ul class="cloud" role="navigation" aria-label="Webdev word cloud">
						<li><a href="#" data-weight="4"><img style="padding: 0px;" src="{{asset('public/frontend/img/logo.png')}}" alt=""> </a></li>
						<li><a href="{{$contact->facebook}}" data-weight="5"><i class="fab fa-facebook-f"></i> </a></li>
						<li><a href="{{$contact->instagram}}" data-weight="5"><i class="fab fa-instagram"></i> </a></li>
						<li><a href="{{$contact->twitter}}" data-weight="5"><i class="fab fa-twitter"></i> </a></li>
						{{-- <li><a href="#" data-weight="5"><i class="fab fa-whatsapp"></i> </a></li> --}}
					</ul>
				</div>
				<div class="row" style="text-align: center; width: 48%; color: white;">
					<p style="margin: 0px; color: white;">{!!$contact->address!!}</p>
					<!-- <p style="margin: 0px; color: white;">Kolkata 700102</p> -->
					<p style="margin: 0px; color: white;">Phone: {{$contact->phone}} <span>Email: {{$contact->email}}</span> </p>
					<!-- <p style="margin: 0px; color: white;">Email: help@hjbrl.com</p> -->
				</div>
				<div class="row " style="margin-top: 30px;width: 48%;">
					<div class="col-" style="color: #ffffff;text-align: center;">Developed by <a href="https://ictbanglabd.com/contact" style="text-decoration: none; color: wheat;">ICT Bangla BD</a></div>
					<div class="col-" style="color: whitesmoke;"> © Copyright 2021 BanglaBesh | All Rights Reserved
					</div>
				</div>
			</div>
		</div>
		<!-----Responsive Footer ----->
	</div>
	<div class="row footerdown">
		<div class="col-6"> © Copyright 2021 BanglaBesh | All Rights Reserved </div>
		<div class="col-6" style="text-align: right;">Developed by <a href="https://ictbanglabd.com/contact" style="text-decoration: none; color: wheat;">ICT Bangla BD</a></div>
	</div>
	</div>
	<!--  Bootstrap JS -->
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/all.min.js')}}"></script>
	<!--- slider -->
	<script src="{{asset('public/frontend/js/slider.js')}}"></script>
	<!-- slick slided js -->
	<script src="{{asset('public/frontend/css/slickslider/slick.min.js')}}"></script>
	<script src="{{asset('public/frontend/css/slickslider/slick.js')}}"></script>
	<script src="{{asset('public/frontend/css/slickslider/custom-slider.js')}}"></script>
	<script src="{{asset('public/frontend/js/slidre-2.js')}}"></script>
	<!-- jQuery 3 -->
	<script src="{{asset('public/backend/bower_components/jquery/dist/jquery.min.js')}}"></script>
	{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

	

    <script>
        function openSearch() {
            document.getElementById("myOverlay9").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("myOverlay9").style.display = "none";
        }

		
    </script>

	@section('footer')
		
	@show
</body>

</html>