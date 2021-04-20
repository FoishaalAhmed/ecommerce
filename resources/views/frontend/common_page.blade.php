

@extends('layouts.app')
@section('title', "{$page->name}")
@section('content')

<!---MAIN CONTENT-->
    <div class="container-fluid">
      <div class="row" style="text-align: center; padding-top: 10px; padding-bottom: 10px; margin-bottom: 20px; background-color: #252525; min-height: 115px;">
        <p style="font-weight: 800; font-size: 45px; color: #ffffff; margin: 0 auto;" alt=""> {{$page->name}} </p>
      </div>
      <div class="" style="width: 75%; text-align: center; margin: auto; ">
        <div class="row">
          <p style="text-align: justify;">
           @if ($page != null) {!! $page->text !!}
                @endif
          </p>
          <br>
        </div>
      </div>
    </div>
<!------Contient-->
@endsection

