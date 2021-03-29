

@extends('layouts.app')
@section('title', 'About Us')
@section('content')
<!------Contient-->
<div class="container-fluid" >
    <div class="row" style="text-align: center; padding-top: 10px; padding-bottom: 10px; margin-bottom: 20px; " >
        <img src="{{asset('public/frontend/img/cu2.jpg')}}" style="padding: 0px;" alt="">
    </div>
    <div class="" style="width: 75%; text-align: center; margin: auto; " >
        <div class="row">
            <h2 style="font-weight: 800; font-size: 45px; " >About Us</h2>
        </div>
        <div class="row">
            <p style="text-align: justify;" >
                @if ($about != null) {!! $about->text !!}
                @endif
            </p>
            <div class="col-md-5">
                <hr style="margin-top: 30px;" >
            </div>
            <div class="col-md-2">
                <h2>THE TEAM</h2>
            </div>
            <div class="col-md-5">
                <hr style="margin-top: 30px;" >
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 profile-card " >
                <div class="row">
                    @foreach ($teams as $team)
                        
                    
                    <div class="col-md-3">
                        <div class="card" style="padding: 10px; text-align: center; margin: auto; " >
                            <img src="{{asset($team->photo)}}" alt="" style="text-align: center; margin: auto;">
                            <div class="card-footer">
                                <div class="flip-card" style="height: 90px;" >
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <p style="font-size: 20px; font-weight: normal; margin-bottom: 0px; " >{{$team->name}}</p>
                                            <p style="margin-bottom: 0px;" ><i>{{$team->position}}</i></p>
                                        </div>
                                        <div class="flip-card-back" style="background-color: rgb(145, 174, 233);" >
                                            <div class="btn-group btn-group-sm" style="margin-top:20px" >
                                                <a href="https:://{{$team->facebook}}" target="_blank"> <i class="fab fa-facebook-f" style="width: 45px; height: 30px; font-size: 10px; "></i></a>
                                                <a href="https:://{{$team->twitter}}" target="_blank"> <i class="fab fa-twitter" style="width: 45px; height: 30px; font-size: 10px; "></i></a>
                                                <a href="https:://{{$team->instagram}}" target="_blank"> <i class="fab fa-instagram" style="width: 45px; height: 30px; font-size: 10px; "></i></a>
                                                <a href="https:://{{$team->linkedin}}" target="_blank"> <i class="fab fa-linkedin" style="width: 45px; height: 30px; font-size: 10px; "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
        <br><br>
    </div>
</div>
<!------Contient-->
@endsection

