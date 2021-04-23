

@extends('layouts.app')
@section('title', 'Profile')
@section('content')
<!---MAIN CONTENT-->
<div class="container">
    <div class="col-md-12" style="padding-left: 40px;">
        <div class="row" style="padding-right: 15px;">
            <div class="col-md-12">
                <p style="margin: 0px; font-size: 25px; font-weight: bold; ">Hello User</p>
                {{-- <p style="margin: 0px;">Last logged in on Jan 5, 2021, 11:54 AM (EST)</p> --}}
            </div>
        </div>
        <hr style="border-top: 4px solid black; margin-bottom: 5px;">
        <div class="row" style="padding-right: 15px;">
            <div class="col-md-12">
                <p style="margin: 0px; font-size: 18px; font-weight: bold; ">Personal Info</p>
            </div>
        </div>
        <hr style="border-top: 2px solid black; margin-bottom: 5px; margin-top: 5px;">
        <div class="row">
            <div class="col-md-2">
                <img src="{{asset(auth()->user()->photo)}}" height="150px" width="150px" style="border-radius: 50%;" alt="">
            </div>
            <div class="col-md-10" style="text-align: center;">
                <!-- <hr style="border-top: 2px solid black; margin-bottom: 5px; margin-top: 5px;" >  -->
                <div class="row" style="margin-top: 20px;">
                    <div class="col-md-3" style="text-align: left;">
                        Account
                    </div>
                    <div class="col-md-5" style="text-align: left;">
                        <span>:</span> &nbsp; <span> {{auth()->user()->created_at->toFormattedDateString()}}( {{ auth()->user()->created_at->diffForHumans()}})</span>
                    </div>
                    <!-- <div class="col-md-4">
                        <button type="button" class="btn btn-2 btn-sm" style="padding-left: 10px; padding-right: 10px;padding-top: 0px; padding-bottom: 0px; float: right; background-color: black; color: white; " > Edit </button>
                        </div> -->
                </div>
                <hr style="border-top: 2px solid black; margin-bottom: 5px; margin-top: 5px;">
                <div class="row">
                    <div class="col-md-3" style="text-align: left;">
                        Name
                    </div>
                    <div class="col-md-5" style="text-align: left;">
                        <span>:</span> &nbsp; <span> {{auth()->user()->name}}</span>
                    </div>
                </div>
                <hr style="border-top: 2px solid black; margin-bottom: 5px; margin-top: 5px;">
                <div class="row">
                    <div class="col-md-3" style="text-align: left;">
                        Email Address
                    </div>
                    <div class="col-md-5" style="text-align: left;">
                        <span>:</span> &nbsp; <span> {{auth()->user()->email}}</span>
                    </div>
                </div>
                <hr style="border-top: 2px solid black; margin-bottom: 5px; margin-top: 5px;">
				<div class="row">
                    <div class="col-md-3" style="text-align: left;">
                        Phone Number
                    </div>
                    <div class="col-md-5" style="text-align: left;">
                        <span>:</span> &nbsp; <span> {{auth()->user()->phone}}</span>
                    </div>
                </div>
				<hr style="border-top: 2px solid black; margin-bottom: 5px; margin-top: 5px;">
				<div class="row">
                    <div class="col-md-3" style="text-align: left;">
                        Address
                    </div>
                    <div class="col-md-5" style="text-align: left;">
                        <span>:</span> &nbsp; <span> {{auth()->user()->address}}</span>
                    </div>
                </div>
				<hr style="border-top: 2px solid black; margin-bottom: 5px; margin-top: 5px;">
            </div>
        </div>
		<br>
        <div class="row" style="text-align: center; margin: auto; ">
            <div class="col-md-12">
                <a style="text-decoration: none; color: black; padding: 2px; border: 1px solid red;" href="{{route('user.profile.update')}}">Edite Profile</a>
            </div>
        </div>
    </div>
</div>
<!---MAIN CONTENT-->
@endsection

