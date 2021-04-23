

@extends('backend.layouts.app')
@section('title', 'Category Shows')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Dashboard
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('categoryShows.index')}}"><i class="fa fa-group"></i> Category Shows</a></li>
        </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Content Header (user header) -->
                <div class="box box-teal box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Category Shows</h3>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" id="box-body">
                        @include('includes.error')
                        @if (isset($categoryShow))
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{route('categoryShows.update', $categoryShow->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label for="">{{__('Title')}}</label>
                                                <input type="text" class="form-control" name="title"  placeholder="{{__('Title')}}" value="{{$categoryShow->title}}" required="" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label for="">{{__('Category')}}</label>
                                                <select name="category_id" style="width: 100%" class="form-control select2" id="category_id" required="">
                                                    <option value="">{{__('Select Category')}}</option>
                                                    @foreach ($categories as $category)

                                                    <option value="{{$category->id}}" @if ($categoryShow->category_id == $category->id) {{'selected'}}
                                                        
                                                    @endif>{{$category->name}} @if ($category->parent_name != null) ({{$category->parent_name}})
                                                        
                                                    @endif</option>
                                                        
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label for="">{{__('Type')}}</label>
                                                <select name="type" style="width: 100%" class="form-control select2" id="type" required="" onchange="showBackgroundPhoto()">

                                                    <option value="1" @if ($categoryShow->type == 1) {{'selected'}} @endif>{{__('First Four')}} </option>

                                                    <option value="2" @if ($categoryShow->type == 2) {{'selected'}} @endif>{{__('Last One')}} </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="box box-teal box-solid">
                                            <div class="box-header with-border">
                                                <h3 class="box-title"> {{__('Category Shows Photo')}} </h3>
                                            </div>
                                            <div class="box-body box-profile">
                                                <img class="profile-user-img img-responsive img-circle" src="{{asset($categoryShow->photo)}}" alt="Product picture" id="photo">
                                                <input type="file" name="photo" onchange="readPicture(this)">
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="display : @if($categoryShow->background == Null) {{'none'}} @endif" id="background">
                                        <div class="box box-teal box-solid">
                                            <div class="box-header with-border">
                                                <h3 class="box-title"> {{__('Background Photo')}} </h3>
                                            </div>
                                            <div class="box-body box-profile">
                                                <img class="profile-user-img img-responsive img-circle" src="{{asset($categoryShow->background)}}" alt="Product picture" id="background-photo">
                                                <input type="file" name="background" onchange="readBackgroundPicture(this)">
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <center>
                                            <button type="submit" class="btn btn-sm bg-red">{{__('Reset')}}</button>
                                            <button type="submit" class="btn btn-sm bg-teal">{{__('Update')}}</button>
                                        </center>
                                    </div>

                                </form>
                            </div>
                        </div>
                        @else
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{route('categoryShows.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label for="">{{__('Title')}}</label>
                                                <input type="text" class="form-control" name="title"  placeholder="{{__('Title')}}" value="{{old('title')}}" required="" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label for="">{{__('Category')}}</label>
                                                <select name="category_id" style="width: 100%" class="form-control select2" id="category_id" required="">
                                                    <option value="">{{__('Select Category')}}</option>
                                                    @foreach ($categories as $category)

                                                    <option value="{{$category->id}}" @if (old('category_id') == $category->id) {{'selected'}}
                                                        
                                                    @endif>{{$category->name}} @if ($category->parent_name != null) ({{$category->parent_name}})
                                                        
                                                    @endif</option>
                                                        
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label for="">{{__('Type')}}</label>
                                                <select name="type" style="width: 100%" class="form-control select2" id="type" required="" onchange="showBackgroundPhoto()">

                                                    <option value="1" @if (old('type') == 1) {{'selected'}} @endif>{{__('First Four')}} </option>

                                                    <option value="2" @if (old('type') == 2) {{'selected'}} @endif>{{__('Last One')}} </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="box box-teal box-solid">
                                            <div class="box-header with-border">
                                                <h3 class="box-title"> {{__('Category Shows Photo')}} </h3>
                                            </div>
                                            <div class="box-body box-profile">
                                                <img class="profile-user-img img-responsive img-circle" src="//placehold.it/200x200" alt="Product picture" id="photo">
                                                <input type="file" name="photo" onchange="readPicture(this)" required="">
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                    </div>
                                    <div class="col-md-3" style="display : @if(old('type') != 2) {{'none'}} @endif" id="background">
                                        <div class="box box-teal box-solid">
                                            <div class="box-header with-border">
                                                <h3 class="box-title"> {{__('Background Photo')}} </h3>
                                            </div>
                                            <div class="box-body box-profile">
                                                <img class="profile-user-img img-responsive img-circle" src="//placehold.it/200x200" alt="Product picture" id="background-photo">
                                                <input type="file" name="background" onchange="readBackgroundPicture(this)">
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <center>
                                            <button type="submit" class="btn btn-sm bg-red">{{__('Reset')}}</button>
                                            <button type="submit" class="btn btn-sm bg-teal">{{__('Save')}}</button>
                                        </center>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%">Sl.</th>
                                            <th style="width: 20%">Category</th>
                                            <th style="width: 35%">Title</th>
                                            <th style="width: 20%">Type</th>
                                            <th style="width: 10%">Photo</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categoryShows as $key => $categoryShow)
                                        <tr>
                                            <td>{{$loop->index + 1}}</td>
                                            <td>{{$categoryShow->name}} </td>
                                            <td>{{$categoryShow->title}} </td>
                                            <td>@if ($categoryShow->type == 1)
                                                {{'First Four'}}
                                            @else
                                                {{'Last One'}}
                                            @endif </td>
                                            <td>
                                                <img src="{{asset($categoryShow->photo)}}" alt="" style="width: 50px; height:50px;">  
                                            </td>
                                            <td>
                                                <a class="btn btn-sm bg-teal" href="{{route('categoryShows.edit', $categoryShow->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
                                                <form action="{{route('categoryShows.destroy',$categoryShow->id)}}" method="post" style="display: none;" id="delete-form-{{ $categoryShow->id}}">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                                </form>
                                                <a class="btn btn-sm bg-red" href="" onclick="if(confirm('Are You Sure To Delete?')){
                                                    event.preventDefault();
                                                    getElementById('delete-form-{{ $categoryShow->id}}').submit();
                                                    }else{
                                                    event.preventDefault();
                                                    }"><span class="glyphicon glyphicon-trash"></span></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
<script>
    function readPicture(input) {
    
        if (input.files && input.files[0]) {
    
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('#photo')
                .attr('src', e.target.result)
                .width(200)
                .height(200);
            };
    
            reader.readAsDataURL(input.files[0]);
        }
    }

    function readBackgroundPicture(input) {
    
        if (input.files && input.files[0]) {
    
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('#background-photo')
                .attr('src', e.target.result)
                .width(200)
                .height(200);
            };
    
            reader.readAsDataURL(input.files[0]);
        }
    }

    function showBackgroundPhoto() {
        let type = $('#type').val();

        if (type == 1) {

            $('#background').hide();
            
        } else {

            $('#background').show();
        }
    }
</script>
@endsection

