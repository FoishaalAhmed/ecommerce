

@extends('layouts.app')
@section('title', 'Log In')
@section('content')
<div class="container-fluid"  >
    <div class="dtl-2nd-nav">
        <div class="row" style="background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209));">
            <div class="container">
                <div class="row" style="text-align: center; padding-top: 10px; padding-bottom: 10px; " >
                    <div class="col-md-">
                        <a href="#" style="text-decoration: none;" >Home</a> /
                        <a href="#" style="text-decoration: none;" >LOGIN</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-----Main Containt-->
<div class="container-fluid desktop-login" style="background-image: linear-gradient( rgb(188, 192, 188),rgb(255, 255, 255));" >
    <div class="">
        <div class="row">
            <div class="col-md-6" style="text-align: center;margin-top: 75px;margin-bottom: 75px;" >
                <button type="button" class="btn btn-primary btn-block" style="width: 50%;margin-bottom: 10px;text-align: left;" ><i  class="fab fa-facebook-f"></i>&nbsp; &nbsp; Login with Facebook</button> 
                <button type="button" class="btn btn-danger btn-block" style="width: 50%;margin-bottom: 10px;text-align: left;background-color: rgb(60, 118, 226);" ><i  class="fab fa-twitter"></i>&nbsp; &nbsp; Login with Twitter</button> 
                <button type="button" class="btn btn-primary btn-block" style="width: 50%;text-align: left;background-color: rgb(245, 91, 30);" ><i class="fab fa-google-plus-g"></i>&nbsp; &nbsp; Login with Google+</button>
            </div>
            <div class="col-md-6" style="text-align: center;margin-top: 75px;margin-bottom: 75px;" >
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input type="email" name="email" style="margin-bottom: 10px; width: 50%; border: none;border-radius: 5px;" placeholder="E-mail Address" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus> <br>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <input type="password" name="password" style="margin-bottom: 10px; width: 50%; border: none;border-radius: 5px;" placeholder="Password" class="@error('password') is-invalid @enderror" required autocomplete="current-password"> <br>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <input type="submit" style="width: 50%; height: 40px; background-color: #249f19; border: none;border-radius: 5px;" value="Login">
                </form>
            </div>
            <div class="bottom-container" style="text-align: center;background-image: linear-gradient( rgb(188, 192, 188),rgb(255, 255, 255));border-radius: 10px;">
                <div class="row">
                    <div class="col">
                        <a href="#" style="color:rgb(5, 117, 20)" class="btn">Sign up</a>
                    </div>
                    <div class="col">
                        <a href="#" style="color:rgb(7, 147, 228)" class="btn">Forgot password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="responsive-login " >
    <div class="primary-information" style="background: #f6f6f6; padding-left: 0px; padding-right: 0px; padding-top: 100px; padding-bottom: 100px;" >
        <div class="row" >
            <div class="col-md-6"  >
                <div class="" style=" padding: 10px;  "   >
                    <div class="col-md-12">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input style="width: 90%; border-radius:5px;font-size: 17px;height: 40px; padding: 5px;  border: 1px solid rgb(15, 15, 14); " type="email" placeholder="Email address" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus name="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                    <div class="col-md-12" style="margin-top: 10px;" >
                        <input style="width: 90%; border-radius: 5px; font-size: 17px;height: 40px; padding: 5px;  border: 1px solid rgb(15, 15, 14);  " type="password" placeholder="Password" class="@error('password') is-invalid @enderror" required autocomplete="current-password" name="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        
                    </div>
                    <div class="col-md-12" style="margin-top: 5px; margin-bottom: 20px; ">
                        <button type="submit" class="btn btn-primary" style="width: 90%;height: 40px;" >  Login in
                        </button>
                        </form>
                    </div>
                    <br><br>
                    {{-- 
                    <h4 style="margin: auto; text-align: center;  " >Forgotten password?</h4>
                    --}}
                    <hr style="margin-top: 2px; width: 90%;" >
                    <!-- <div class="col-md-12" style="margin-top: 5px; margin: auto; text-align: center; ">
                        <button type="submit" class="btn btn-success" style="width: 60%;height: 40px;  " >  Create New Account 
                        </button>
                        </div> -->
                    <div class="trtr">
                        <div class="col-md-12 lppl" style="margin-top: 5px; margin: auto; text-align: center;  ">
                            <!-- Trigger the modal with a button -->
                            <a href="{{route('register')}}" class="btn btn-success btn-block" style="color: cornsilk; height: 40px; ">Create New Account</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" >
                <div class="ollp" style=" padding: 10px; "  >
                    <div class="col-md-12" style="margin-top: 5px;">
                        <button type="button" class="btn btn-primary btn-block" style="width: 90%;margin-bottom: 10px;text-align: left;" ><i  class="fab fa-facebook-f"></i>&nbsp; &nbsp; Login with Facebook</button> 
                    </div>
                    <div class="col-md-12" style="margin-top: 5px;">
                        <button type="button" class="btn btn-danger btn-block" style="width: 90%;margin-bottom: 10px;text-align: left;background-color: rgb(60, 118, 226);" ><i  class="fab fa-twitter"></i>&nbsp; &nbsp; Login with Twitter</button> 
                    </div>
                    <div class="col-md-12" style="margin-top: 5px;">
                        <button type="button" class="btn btn-primary btn-block" style="width: 90%;text-align: left;background-color: rgb(245, 91, 30);" ><i class="fab fa-google-plus-g"></i>&nbsp; &nbsp; Login with Google+</button>
                    </div>
                    <br> <br>
                </div>
            </div>
        </div>
    </div>
</div>
<!-----Main Containt-->
@endsection

