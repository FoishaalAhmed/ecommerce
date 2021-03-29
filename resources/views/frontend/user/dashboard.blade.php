@extends('layouts.app')

@section('content')
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">{{__('Sign out')}}</a>
                                
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
@endsection