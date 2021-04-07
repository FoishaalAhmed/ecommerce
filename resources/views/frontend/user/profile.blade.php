@extends('layouts.app')
@section('title', 'Profile')
@section('content')
<div class="container-fluid" >
  <div class="dtl-2nd-nav">
    <div class="row" style="background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209));">
      <div class="container">
        <div class="row" style="text-align: center; padding-top: 10px; padding-bottom: 10px; " >
          <div class="col-">
            <a href="{{URL::to('/')}}" style="text-decoration: none;" >Home</a> /
            <a href="#" style="text-decoration: none;" >Profile</a> 
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
  
            <form action="{{route('profile.update')}}" method="POST" >
                @csrf
              <div class="row">
                <div class="col-50">
                  <h3>Update Profile</h3>
                  @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>{{session('message')}}</strong>
                    </div>
                  @endif
                  @include('includes.error')
                  <label for="fname"><i class="fa fa-user"></i> Name</label>
                  <input type="text" id="name" name="name" placeholder="John M. Doe" value="{{auth()->user()->name}}">

                  <label for="email"><i class="fa fa-envelope"></i> Email</label>
                  <input type="text" id="email" name="email" placeholder="ictbanglabd@gmail.com" value="{{auth()->user()->email}}">

                  <label for="phone"><i class="fas fa-phone-volume"></i> Phone</label>
                  <input type="text" id="phone" name="phone" placeholder="+88 01919 61 31 52" value="{{auth()->user()->phone}}">

                  <label for="adr"><i class="fas fa-id-badge"></i> Address</label>
                  <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" value="{{auth()->user()->address}}">

                </div>
              </div>
              <input type="submit" style="background-color: darkgreen; width: 100%; color: white; " value="Submit" class="btn">
            </form>

            <form action="{{route('password.change')}}" method="POST" >
                @csrf
              <div class="row">
                <div class="col-50">
                  <h3>Change Password</h3>

                  <label for="password"><i class="fas fa-key"></i> Old Password</label>
                  <input type="password" id="password" name="old_password" placeholder="********" style="width: 100%">

                  <label for="confirm-password"><i class="fas fa-key"></i>New Password</label>
                  <input type="password" id="confirm-password" name="new_password" placeholder="********" style="width: 100%">

                </div>
              </div>
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
