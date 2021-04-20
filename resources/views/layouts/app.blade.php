

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Banglabesh | @yield('title') </title>
        <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
            integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid" style="border-top: 2px solid red;">
            <!-------Header Section------->
            <div class="container-fluid" style="width: 75%;">
                <div class="header">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="col-md-2  nav-logo">
                            <a class="navbar-brand" href="#"><img src="{{asset('public/frontend/img/logo.png')}}" alt=""></a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <div class="col-md-1"></div>
                            <div class="col-md-7">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">
                                            <div class="btn-group">
                                                <button style="background-color: transparent;" type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Kids
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                        </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <div class="btn-group">
                                                <button type="button" style="margin-top: -8px;background-color: transparent;"
                                                    class="btn  dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Men
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="dropdown-item" type="button">Action</button>
                                                    <button class="dropdown-item" type="button">Another action</button>
                                                    <button class="dropdown-item" type="button">Something else here</button>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="color: black;" class="nav-link " href="#">Mobile Cover</a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="color: black;" class="nav-link " href="#">Mugs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="#">
                                            <div class="btn-group">
                                                <button type="button" style="margin-top: -8px;background-color: transparent;"
                                                    class="btn  dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Women
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="dropdown-item" type="button">Action</button>
                                                    <button class="dropdown-item" type="button">Another action</button>
                                                    <button class="dropdown-item" type="button">Something else here</button>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3" style="text-align: right;margin-top: -8px;">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link " href="#">
                                        <i style="color: black;" class="fa fa-cart-arrow-down" aria-hidden="true">
                                        <span style="font-weight: bold; color: red;padding-left: 5px;">5</span></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" style="text-decoration:none ; color: whitesmoke; ">
                                            <div class="" style="text-align: center; margin: auto;padding-top: 10px;padding-bottom: 10px;">
                                                <div><i
                                                    style="color: black;padding-left: 10px; padding-right: 10px;padding-top: 0px; padding-bottom: 0px;"
                                                    data-toggle="modal" data-target="#exampleModal" class="fas fa-search"></i></div>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel" style="width: 100%;">
                                                                    <form class="form-inline md-form mr-auto">
                                                                        <input style="width: 85%;" class="form-control mr-sm-2" type="text"
                                                                            placeholder="Search" aria-label="Search">
                                                                        <button class="btn btn-unique btn-rounded btn-sm my-0 waves-effect waves-light"
                                                                            style="padding-top: 8px;padding-bottom: 8px;" type="submit"><i
                                                                            class="fas fa-search"></i></button>
                                                                    </form>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" style="text-decoration: none; color: black;" href="#">
                                        Login
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="header-responsive" style="width: 360px;margin-left: -74px;">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="#">Home</a>
                        <a href="#">Mobile Cover</a>
                        <a href="#">Mugs</a>
                        <a href="#">
                            <button class="btn btn dropdown-toggle " onclick="myFunction1()">kids</button>
                            <div id="kids" class="dfdf">
                        <a href="#">Shirt</a>
                        <a href="#">Shirt</a>
                        <a href="#">Shirt</a>
                        </div>
                        <script>
                            function myFunction1() {
                              var x = document.getElementById("kids");
                              if (x.style.display == "block") {
                                x.style.display = "none";
                              } else {
                                x.style.display = "block";
                              }
                            }
                        </script>
                        </a>
                        <a href="#">
                            <button class="btn btn dropdown-toggle " onclick="myFunction()">Men</button>
                            <div id="myDIV" class="dfdf">
                        <a href="#">pant</a>
                        <a href="#">pant</a>
                        <a href="#">pant</a>
                        </div>
                        <script>
                            function myFunction() {
                              var x = document.getElementById("myDIV");
                              if (x.style.display == "block") {
                                x.style.display = "none";
                              } else {
                                x.style.display = "block";
                              }
                            }
                        </script>
                        </a>
                        <a href="#">
                            <button class="btn btn dropdown-toggle " onclick="myFunction3()">Women</button>
                            <div id="women" class="dfdf">
                        <a href="#">Clock</a>
                        <a href="#">Clock</a>
                        <a href="#">Clock</a>
                        </div>
                        <script>
                            function myFunction3() {
                              var x = document.getElementById("women");
                              if (x.style.display == "block") {
                                x.style.display = "none";
                              } else {
                                x.style.display = "block";
                              }
                            }
                        </script>
                        </a>
                    </div>
                    <div id="main">
                        <div class="row">
                            <div class="col-6">
                                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
                            </div>
                            <div class="col-6">
                                <a href="#">
                                <img src="{{asset('public/frontend/img/logo.png')}}" width="100px" height="50px" style="margin-left: 52px;" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <script>
                        function openNav() {
                          document.getElementById("mySidenav").style.width = "250px";
                          document.getElementById("main").style.marginLeft = "250px";
                          document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
                        }
                        
                        function closeNav() {
                          document.getElementById("mySidenav").style.width = "0";
                          document.getElementById("main").style.marginLeft = "0";
                          document.body.style.backgroundColor = "white";
                        }
                    </script>
                </div>
            </div>
            <!---Fixed Nav Footer For mobile ----->
            <div class="container-fluid fixedfooter " style="background-color: black;color: whitesmoke;left: 0;width: 360px;">
                <div class="row" style="text-align: center;margin: auto;">
                    <div class="" style="margin-right: 55px;">
                        <a href="#" style="text-decoration:none ; color: whitesmoke; ">
                            <div class="" style="text-align: center; margin: auto;padding-top: 10px;padding-bottom: 10px;">
                                <div><i class="fas fa-home"></i></div>
                                <div class="m-footer">Shop</div>
                            </div>
                        </a>
                    </div>
                    <div class="" style="margin-right: 55px;">
                        <a href="#" style="text-decoration:none ; color: whitesmoke; ">
                            <div class="" style="text-align: center; margin: auto;padding-top: 10px;padding-bottom: 10px;">
                                <div><i class="fa fa-user" aria-hidden="true"></i>
                                </div>
                                <div class="m-footer">My Account</div>
                            </div>
                        </a>
                    </div>
                    <div class="" style="margin-right: 55px;">
                        <a href="#" style="text-decoration:none ; color: whitesmoke; ">
                            <div class="" style="text-align: center; margin: auto;padding-top: 10px;padding-bottom: 10px;">
                                <div data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-search"></i></div>
                                <div class="m-footer" data-toggle="modal" data-target="#exampleModalCenter"> Search </div>
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content" style="bottom: -235px; left: -8px;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">
                                                    <form class="form-inline md-form mr-auto">
                                                        <input style="width: 85%;" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                                                        <button class="btn btn-unique btn-rounded btn-sm my-0 waves-effect waves-light" style="padding-top: 8px;padding-bottom: 8px;" type="submit"><i class="fas fa-search"></i></button>
                                                    </form>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="">
                        <a href="#" style="text-decoration:none ; color: whitesmoke; ">
                            <div class="" style="text-align: center; margin: auto;padding-top: 10px;padding-bottom: 10px;">
                                <div><i class="fas fa-heart"></i></div>
                                <div class="m-footer">Wishlist</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @section('content')
            @show
        </div>
        <br><br>
        <!-----Footer desktop---->
        <div class="container-fluid footer-desktop" style="background-color: #2b2f32; margin-top: 20px; ">
            <div class="row">
                <img style="padding: 0px; width: 100% !important;" src="{{asset('public/frontend/img/footerbg-1.jpg')}}" alt="">
            </div>
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="">
                            <img src="{{asset('public/frontend/img/logo.png')}}" alt="">
                        </div>
                        <br><br><br>
                        <div class="" style="color: white;">
                            <p style="margin: 0px; color: white;">{!!$contact->address!!}</p>
                            <p style="margin: 0px; color: white;">Phone: {{$contact->phone}}</p>
                            <p style="margin: 0px; color: white;">Email: {{$contact->email}}</p>
                        </div>
                        <br>
                        <div class="footer-icon">
                            <div class="row">
                                <div class="col-2">
                                    <span>
                                        <a href="{{$contact->facebook}}" style="text-decoration: none; color: white;" title="facebook">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                                class="bi bi-facebook" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                            </svg>
                                        </a>
                                    </span>
                                </div>
                                <div class="col-2">
                                    <span>
                                        <a href="{{$contact->instagram}}" style="text-decoration: none; color: white;" title="instagram">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                                class="bi bi-instagram" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                            </svg>
                                        </a>
                                    </span>
                                </div>
                                <div class="col-2">
                                    <span>
                                        <a href="{{$contact->twitter}}" style="text-decoration: none; color: white;" title="twitter">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                                class="bi bi-twitter" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                            </svg>
                                        </a>
                                    </span>
                                </div>
                                {{-- <div class="col-1">
                                    <span>
                                        <a href="#" style="text-decoration: none; color: white;" title="whatsapp">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                                class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                <path
                                                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                            </svg>
                                        </a>
                                    </span>
                                </div> --}}
                            </div>
                        </div>
                        <br><br>
                    </div>
                    <div class="col-3">
                        <div class="">
                            <span style="color: white;">Quick Links</span>
                        </div>
                        <br>
                        <br>
                        <div class="footer-mdmd">
                            <span style="font-weight: 800; color: whitesmoke; ">></span> <a style="text-decoration: none;color: whitesmoke;" href="{{route('about')}}"> <span class="mdmd2">About Us</span> </a>
                            <hr style="margin-top: 10px; margin-bottom: 10px;color: aliceblue;border-top: 1px solid whitesmoke; ">
                            <span style="font-weight: 800; color: whitesmoke; ">></span> <a style="text-decoration: none;color: whitesmoke;" href="{{route('front.contact')}}"> <span class="mdmd2">Contact Us</span> </a>
                            <hr style="margin-top: 10px; margin-bottom: 10px;color: aliceblue;border-top: 1px solid whitesmoke; ">
                            <span style="font-weight: 800; color: whitesmoke; ">></span> <a style="text-decoration: none;color: whitesmoke;" href="{{route('pages', 'return-shipment')}}"> <span class="mdmd2">Return & Shipment</span> </a>
                            <hr style="margin-top: 10px; margin-bottom: 10px;color: aliceblue;border-top: 1px solid whitesmoke; ">
                            <span style="font-weight: 800; color: whitesmoke; ">></span> <a style="text-decoration: none;color: whitesmoke;" href="{{route('pages', 'terms-conditions')}}"> <span class="mdmd2">Terms & Conditions</span> </a>
                            <hr style="margin-top: 10px; margin-bottom: 10px;color: aliceblue;border-top: 1px solid whitesmoke; ">
                            <span style="font-weight: 800; color: whitesmoke; ">></span> <a style="text-decoration: none;color: whitesmoke;" href="{{route('pages', 'privacy-policy')}}"> <span class="mdmd2">Privacy Policy</span> </a>
                            <hr style="margin-top: 10px; margin-bottom: 10px;color: aliceblue;border-top: 1px solid whitesmoke; ">
                            <span style="font-weight: 800; color: whitesmoke; ">></span> <a style="text-decoration: none;color: whitesmoke;" href="{{route('faq')}}"> <span class="mdmd2">FAQ</span> </a>
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <!------tag------>
                    <div class="col-4">
                        <div class="row">
                            <h2 style="color: white;">Product categories</h2>
                            <hr>
                        </div>
                        <ul class="cloud" role="navigation" aria-label="Webdev word cloud">
							@php
							use App\Model\Category;
							$parents = Category::where('parent_id', 0)->orderBy('name', 'asc')->get();
							@endphp
                            @foreach ($parents as $key => $item)
                            <li><a href="{{route('front.products', [$item->id, strtolower(str_replace(' ', '-', $item->name))])}}" data-weight="{{++$key}}">{{$item->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6" style="color: whitesmoke;">© Copyright 2021 HJBRL.COM | All Rights Reserved</div>
                <div class="col-6" style="text-align: right;color: whitesmoke;">Developed by <a href="#"
                    style="text-decoration: none; color: wheat;">ICT Bangla BD</a></div>
            </div>
        </div>
        <!-----Footer responsive-->
        <div class="container-fluid footer-responsive" style="background-color: #2b2f32; margin-top: 20px; ">
            <div class="row">
                <img style="padding: 0px;width: 360px;" src="{{asset('public/frontend/img/footerbg-1.jpg')}}" alt="">
            </div>
            <br><br>
            <div class="row">
                <div class="col-4">
                    <div class="">
                        <img src="{{asset('public/frontend/img/logo.png')}}" width="80%" alt="">
                    </div>
                    <br>
                    <div class="" style="color: white;">
                        <p style="margin: 0px; color: white;font-size: 12px;">{!!$contact->address!!}</p>
                        <p style="margin: 0px; color: white;font-size: 12px;">Phone: {{$contact->phone}}</p>
                        <p style="margin: 0px; color: white;font-size: 12px;">Email: {{$contact->email}}</p>
                    </div>
                    <div class="footer-icon">
                        <div class="row">
                            <div class="col-2">
                                <span>
                                    <a href="{{$contact->facebook}}" style="text-decoration: none; color: white;" title="facebook">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                                            class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg>
                                    </a>
                                </span>
                            </div>
                            <div class="col-2">
                                <span>
                                    <a href="{{$contact->instagram}}" style="text-decoration: none; color: white;" title="instagram">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                                            class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                        </svg>
                                    </a>
                                </span>
                            </div>
                            <div class="col-2">
                                <span>
                                    <a href="{{$contact->twitter}}" style="text-decoration: none; color: white;" title="twitter">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                                            class="bi bi-twitter" viewBox="0 0 16 16">
                                            <path
                                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                        </svg>
                                    </a>
                                </span>
                            </div>
                            {{-- <div class="col-1">
                                <span>
                                    <a href="#" style="text-decoration: none; color: white;" title="whatsapp">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path
                                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                        </svg>
                                    </a>
                                </span>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="">
                        <span style="color: white;">Quick Links</span>
                        <hr style="margin-top: 2px; margin-bottom: 1px;border-top: 2px  solid whitesmoke;">
                    </div>
                    <br>
                    <div class="footer-mdmd">
                        <span style="font-weight: 800; color: whitesmoke; ">></span> <a style="text-decoration: none;color: whitesmoke;" href="{{route('about')}}"> <span class="mdmd2">About Us</span> </a>
                            <hr style="margin-top: 10px; margin-bottom: 10px;color: aliceblue;border-top: 1px solid whitesmoke; ">
                            <span style="font-weight: 800; color: whitesmoke; ">></span> <a style="text-decoration: none;color: whitesmoke;" href="{{route('front.contact')}}"> <span class="mdmd2">Contact Us</span> </a>
                            <hr style="margin-top: 10px; margin-bottom: 10px;color: aliceblue;border-top: 1px solid whitesmoke; ">
                            <span style="font-weight: 800; color: whitesmoke; ">></span> <a style="text-decoration: none;color: whitesmoke;" href="{{route('pages', 'return-shipment')}}"> <span class="mdmd2">Return & Shipment</span> </a>
                            <hr style="margin-top: 10px; margin-bottom: 10px;color: aliceblue;border-top: 1px solid whitesmoke; ">
                            <span style="font-weight: 800; color: whitesmoke; ">></span> <a style="text-decoration: none;color: whitesmoke;" href="{{route('pages', 'terms-conditions')}}"> <span class="mdmd2">Terms & Conditions</span> </a>
                            <hr style="margin-top: 10px; margin-bottom: 10px;color: aliceblue;border-top: 1px solid whitesmoke; ">
                            <span style="font-weight: 800; color: whitesmoke; ">></span> <a style="text-decoration: none;color: whitesmoke;" href="{{route('pages', 'privacy-policy')}}"> <span class="mdmd2">Privacy Policy</span> </a>
                            <hr style="margin-top: 10px; margin-bottom: 10px;color: aliceblue;border-top: 1px solid whitesmoke; ">
                            <span style="font-weight: 800; color: whitesmoke; ">></span> <a style="text-decoration: none;color: whitesmoke;" href="{{route('faq')}}"> <span class="mdmd2">FAQ</span> </a>
                    </div>
                </div>
                <div class="col-4">
                    <h2 style="color: white;font-size: 15px;margin-top: -7px;">Product categories</h2>
                    <hr>
                    <ul style="margin-top: -7px;" class="cloud" role="navigation" aria-label="Webdev word cloud">
                        @foreach ($parents as $key => $item)
						<li><a href="{{route('front.products', [$item->id, strtolower(str_replace(' ', '-', $item->name))])}}" data-weight="{{++$key}}">{{$item->name}}</a></li>
						@endforeach
                </div>
            </div>
            <div class="row" style="background-color: rgb(29, 28, 28);padding-top: 5px;padding-bottom: 20px;">
                <div class="col-6" style="color: whitesmoke;font-size: 10px;">© Copyright 2021 BanglaBesh| All Rights Reserved
                </div>
                <div class="col-6" style="text-align: right; color: whitesmoke;font-size: 10px; ">Developed by <a href="ictbanglabd.com/contact" style="text-decoration: none; color: wheat;">ICT Bangla BD</a></div>
            </div>
            <br><br>
        </div>
        <!----Banner Slider----->
        <script></script>
        <script src="{{asset('public/frontend/js/jQuery.js')}}"></script>
        <script src="{{asset('public/frontend/js/properjs.js')}}"></script>
        <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
        @section('footer')
        @show
    </body>
</html>

