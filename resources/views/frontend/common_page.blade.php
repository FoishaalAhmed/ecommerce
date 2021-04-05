

@extends('layouts.app')
@section('title', "{$page->name}")
@section('content')
<!------Contient-->
<div class="container-fluid" >
    <div class="row" style="text-align: center; padding-top: 10px; padding-bottom: 10px; margin-bottom: 20px; background-color: #252525; min-height: 200px;" >
        <h2 style="font-weight: 800; font-size: 45px; color:#ffffff; margin: auto 0;" >{{$page->name}}</h2>
    </div>
    <div class="" style="width: 75%; text-align: center; margin: auto; " >
        <div class="row">
            <p style="text-align: justify;" >
                @if ($page != null) {!! $page->text !!}
                @endif
            </p>
        </div>
        <br><br>
    </div>
</div>
<!------Contient-->
@endsection

