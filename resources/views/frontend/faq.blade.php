@extends('layouts.app')

@section('title', 'FAQS')
@section('content')
    <!---MAIN CONTENT-->
    <div class="container-fluid">
      <div class="row" style="text-align: center; padding-top: 10px; padding-bottom: 10px; margin-bottom: 20px; ">
        <img src="{{asset('public/frontend/img/cu2.jpg')}}" style="padding: 0px;width: 100%;" alt="">
      </div>
      <div class="" style="width: 75%; text-align: center; margin: auto; ">
        <div class="row" style="text-align: center;margin: auto;">
          <h2 style="font-weight: 800; font-size: 45px;text-align: center; margin: auto; ">Frequently Asked Questions
          </h2>
        </div>
        <div class="row">
            @foreach ($faqs as $faq)
                
            
          <div class="col-md-6" style="padding: 10px;">
            <div class="card" style="text-align: left; padding: 10px; background: aliceblue;">
              <details>
                <summary><span style="font-size: 20px;font-weight: bold;">{{$faq->title}}</span></summary>
                <p style="text-align: justify;border: 3px solid white; padding: 10px;border-radius: 10px;">{!!$faq->text!!}</p>
              </details>
            </div>
          </div>
          @endforeach
        </div>
        <br><br>
      </div>
    </div>
    <!---MAIN CONTENT-->
@endsection