

@extends('layouts.app')
@section('title', 'Log In')
@section('content')
<!---MAIN CONTENT-->
    <div class="container-fluid" style="margin-bottom: 20px ;">
      <div class="dtl-2nd-nav">
        <div class="row" style="background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209));">
          <div class="container">
            <div class="row" style="text-align: center; padding-top: 10px; padding-bottom: 10px;margin: auto; ">
              <div class="col-12">
                <a href="#" style="text-decoration: none;color: black;">Home</a> /
                <a href="#" style="text-decoration: none;color: black;">Sing Up </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('includes.error')
    <div id="logsign" class="form">
        
      <input id="noaccount" name="radioaccount" type="radio" class="radio radio--invisible" />
      <input id="account" name="radioaccount" type="radio" class="radio radio--invisible" checked/>
      <div class="form_background">
        <form action="{{route('login')}}" method="POST">
            @csrf
          <div class="form-group form-group--account">
            <h3 class="form-group_title">Log in</h3>
            <input name="email" required=""class="form-group_input" type="email" placeholder="Email" />
            <input name="password" required="" class="form-group_input" type="password" placeholder="Password" />
            <button class="button button--form">Log in</button>
          </div>
        </form>
        <form action="{{route('register')}}" method="POST">
            @csrf
          <div class="form-group form-group--noaccount">
            <h3 class="form-group_title">Sign up</h3>

            <input name="name" required="" class="form-group_input" type="text" placeholder="Full Name" value="{{old('name')}}"/>
            <input name="phone" class="form-group_input" type="mobail" placeholder="Mobile Number" value="{{old('phone')}}" />
            <input name="email" required="" class="form-group_input" type="email" placeholder="Email" value="{{old('email')}}"/>

            <input name="password" required="" class="form-group_input" type="password" placeholder="Password" />
            <input name="password_confirmation" required="" class="form-group_input" type="password" placeholder="Confirm Password" />
            <button class="button button--form">Sign up</button>
          </div>
        </form>
      </div>
      <fieldset class="fieldset">
        <h2>Don't have an account ?</h2>
        <p>Banjo tote bag bicycle rights, High Life sartorial cray craft beer whatever street art fap.</p>
        <div class="form_content form_content--noaccount">
        </div>
        <label for="noaccount" class="button">Signup</label>
      </fieldset>
      <fieldset class="fieldset">
        <h2>Have an account ?</h2>
        <p>Banjo tote bag bicycle rights, High Life sartorial cray craft beer whatever street art fap.</p>
        <div class="form_content form_content--noaccount">
        </div>
        <label for="account" class="button">login</label>
      </fieldset>
    </div>
    
    
    
    
    <div id="moblog" class="container bg-dark" style="color: black;padding-top:20px;padding-bottom:30px;">
      <h2>Login</h2>
      <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required="">
        </div>
        <div class="form-group form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <hr>
      <div class="row" style="margin: auto; text-align: center; " >
          <div class="col-12" style="margin: auto; text-align: center;color: #f9f9f9;font-size: 25px;" >
                Or
          </div>
      </div>
      <hr>
      <h2>SignUp</h2>
      <form action="{{route('register')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="name">name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required="" value="{{old('name')}}">
        </div>
        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone" required="" value="{{old('phone')}}">
        </div>
        <div class="form-group">
          <label for="email">E-mail:</label>
          <input type="text" class="form-control" id="email" placeholder="Enter E-mail" name="email" required="" value="{{old('email')}}">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required="">
        </div>
        <div class="form-group">
          <label for="pwd">Re-Password:</label>
          <input type="password" class="form-control" id="pwd2" placeholder="Enter password" name="password_confirmation" required="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <!---MAIN CONTENT-->
@endsection

