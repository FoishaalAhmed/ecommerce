@extends('layouts.app')
@section('title', 'Register')
@section('content')
<div class="container-fluid" >
  <div class="dtl-2nd-nav">
    <div class="row" style="background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209));">
      <div class="container">
        <div class="row" style="text-align: center; padding-top: 10px; padding-bottom: 10px; " >
          <div class="col-">
            <a href="#" style="text-decoration: none;" >Home</a> /
            <a href="#" style="text-decoration: none;" >SingUP</a> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!----MainConteint-->
<div class="container-fluid" style="background-image: linear-gradient( rgb(152, 158, 152),rgb(255, 255, 255));padding-top: 20px;">
  <div class="row check-out"  >

 


    <div class="row">
      <div class="col-75">
        <div class=" check-out22"  >
          <div class="row">
            <div class="col-2"></div>
  
            <form action="{{route('register')}}" method="POST" >
                @csrf
              <div class="row">
                <div class="col-50">
                  <h3>SingUp</h3>
                  @include('includes.error')
                  <label for="fname"><i class="fa fa-user"></i> Name</label>
                  <input type="text" id="name" name="name" placeholder="John M. Doe" value="{{old('name')}}">

                  <label for="email"><i class="fa fa-envelope"></i> Email</label>
                  <input type="text" id="email" name="email" placeholder="ictbanglabd@gmail.com" value="{{old('email')}}">

                  <label for="phone"><i class="fas fa-phone-volume"></i> Phone</label>
                  <input type="text" id="phone" name="phone" placeholder="+88 01919 61 31 52" value="{{old('phone')}}">

                  <label for="password"><i class="fas fa-key"></i> Password</label>
                  <input type="password" id="password" name="password" placeholder="********" style="width: 100%">

                  <label for="confirm-password"><i class="fas fa-key"></i>Confirm Password</label>
                  <input type="password" id="confirm-password" name="password_confirmation" placeholder="********" style="width: 100%">

                  <label for="adr"><i class="fas fa-id-badge"></i> Address</label>
                  <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" value="{{old('address')}}">

                </div>
              </div>
              <label>
                <input type="checkbox" checked="checked" name="sameadr" readonly> 	I have read and agree to the website terms and conditions *
              </label>
              <input type="submit" style="background-color: darkgreen; width: 100%; color: white; " value="Submit" class="btn">
            </form>
          </div>
        </div>
      </div>
  
      
  
  
    </div>
    
  </div>
</div>
<!----MainConteint-->
@endsection
