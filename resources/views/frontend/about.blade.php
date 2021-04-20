

@extends('layouts.app')
@section('title', 'About Us')
@section('content')
<!---MAIN CONTENT-->
    <div class="container-fluid">
      <div class="row" style="text-align: center; padding-top: 10px; padding-bottom: 10px; margin-bottom: 20px; ">
        <img src="{{asset('public/frontend/img/cu2.jpg')}}" style="padding: 0px;width: 100%;" alt="">
      </div>
      <div class="" style="width: 75%; text-align: center; margin: auto; ">
        <div class="row" style="background-image: url({{asset('public/frontend/img/pagebac.jpg')}}); width: 100%;">
          <h2 style="font-weight: 800; font-size: 45px; ">About Us</h2>
        </div>
        <div class="row">
          <p style="text-align: justify;">
            @if ($about != null) {!! $about->text !!}
                @endif
          </p>
          <br>
          <div class="col-md-5">
            <hr style="margin-top: 30px;">
          </div>
          <div class="col-md-2">
            <h2>THE TEAM</h2>
          </div>
          <div class="col-md-5">
            <hr style="margin-top: 30px;">
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid them-member" style="text-align: center;">
      <div class="row">
          @foreach ($teams as $team)
        <div class="col-md-3 col-12" style="margin-top: 10px;">
          <div class="card">
            <img src="{{asset($team->photo)}}" width="100%" height="300px" alt="">
            <div class="card-footer">
              <p style="margin: 0px;">{{$team->name}}</p>
              <p style="margin: 0px;"><small>{{$team->position}}</small></p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <!---MAIN CONTENT-->
@endsection

