

@extends('backend.layouts.app')
@section('title', 'Slider')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Dashboard
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('sliders.index')}}"><i class="fa fa-group"></i> Slider</a></li>
        </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Content Header (user header) -->
                <div class="box box-teal box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Slider</h3>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" id="box-body">
                        @include('includes.error')
                        @if (isset($slider))
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{route('sliders.update', $slider->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')

                                    <div class="col-md-9">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="">{{__('Intro')}} ({{__('Under 20 Letter')}})</label>
                                                    <input type="text" class="form-control" name="intro"  placeholder="{{__('Intro')}}" value="{{$slider->intro}}" required="" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="">{{__('Product Name')}} ({{__('Under 20 Letter')}})</label>
                                                    <input type="text" class="form-control" name="product_name"  placeholder="{{__('Product Name')}}" value="{{$slider->product_name}}" required="" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="">{{__('Product Link')}}</label>
                                                    <input type="text" class="form-control" name="link"  placeholder="{{__('Product Link')}}" value="{{$slider->link}}" required="" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="">{{__('Coupon')}} ({{__('Under 10 Letter')}})</label>
                                                    <input type="text" class="form-control" name="coupon"  placeholder="{{__('Coupon')}}" value="{{$slider->coupon}}" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="">{{__('Short Description')}} ({{__('Under 50 Letter')}})</label>
                                                    <textarea name="short_description" id="" rows="3" class="form-control" name="short_description"  placeholder="{{__('Short Description')}}" autocomplete="off">{{$slider->short_description}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="box box-teal box-solid">
                                            <div class="box-header with-border">
                                                <h3 class="box-title"> {{__('Slider Photo')}} </h3>
                                            </div>
                                            <div class="box-body box-profile">
                                                <img class="profile-user-img img-responsive img-circle" src="{{asset($slider->photo)}}" alt="Product picture" id="slider-photo">
                                                <input type="file" name="photo" onchange="readPicture(this)">
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <div class="box box-teal box-solid">
                                            <div class="box-header with-border">
                                                <h3 class="box-title"> {{__('Background Photo')}} </h3>
                                            </div>
                                            <div class="box-body box-profile">
                                                <img class="profile-user-img img-responsive img-circle" src="{{asset($slider->background)}}" alt="Product picture" id="background-photo">
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
                                <form action="{{route('sliders.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-9">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="">{{__('Intro')}} ({{__('Under 20 Letter')}})</label>
                                                    <input type="text" class="form-control" name="intro"  placeholder="{{__('Intro')}}" value="{{old('intro')}}" required="" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="">{{__('Product Name')}} ({{__('Under 20 Letter')}})</label>
                                                    <input type="text" class="form-control" name="product_name"  placeholder="{{__('Product Name')}}" value="{{old('product_name')}}" required="" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="">{{__('Product Link')}}</label>
                                                    <input type="text" class="form-control" name="link"  placeholder="{{__('Product Link')}}" value="{{old('link')}}" required="" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="">{{__('Coupon')}} ({{__('Under 10 Letter')}})</label>
                                                    <input type="text" class="form-control" name="coupon"  placeholder="{{__('Coupon')}}" value="{{old('coupon')}}" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="">{{__('Short Description')}} ({{__('Under 50 Letter')}})</label>
                                                    <textarea name="short_description" id="" rows="3" class="form-control" name="short_description"  placeholder="{{__('Short Description')}}" autocomplete="off">{{old('short_description')}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="box box-teal box-solid">
                                            <div class="box-header with-border">
                                                <h3 class="box-title"> {{__('Slider Photo')}} </h3>
                                            </div>
                                            <div class="box-body box-profile">
                                                <img class="profile-user-img img-responsive img-circle" src="//placehold.it/200x200" alt="Product picture" id="slider-photo">
                                                <input type="file" name="photo" onchange="readPicture(this)" required="">
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <div class="box box-teal box-solid">
                                            <div class="box-header with-border">
                                                <h3 class="box-title"> {{__('Background Photo')}} </h3>
                                            </div>
                                            <div class="box-body box-profile">
                                                <img class="profile-user-img img-responsive img-circle" src="//placehold.it/200x200" alt="Product picture" id="background-photo">
                                                <input type="file" name="background" onchange="readBackgroundPicture(this)" required="">
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
                                            <th style="width: 25%">Intro</th>
                                            <th style="width: 25%">Product</th>
                                            <th style="width: 15%">Coupon</th>
                                            <th style="width: 10%">Photo</th>
                                            <th style="width: 10%">Background</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sliders as $key => $slider)
                                        <tr>
                                            <td>{{$loop->index + 1}}</td>
                                            <td>{{$slider->intro}} </td>
                                            <td>{{$slider->product_name}} </td>
                                            <td>{{$slider->coupon}} </td>
                                            <td>
                                                <img src="{{asset($slider->photo)}}" alt="" style="width: 50px; height:50px;">  
                                            </td>
                                            <td>
                                                <img src="{{asset($slider->background)}}" alt="" style="width: 50px; height:50px;">  
                                            </td>
                                            <td>
                                                <a class="btn btn-sm bg-teal" href="{{route('sliders.edit', $slider->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
                                                <form action="{{route('sliders.destroy',$slider->id)}}" method="post" style="display: none;" id="delete-form-{{ $slider->id}}">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                                </form>
                                                <a class="btn btn-sm bg-red" href="" onclick="if(confirm('Are You Sure To Delete?')){
                                                    event.preventDefault();
                                                    getElementById('delete-form-{{ $slider->id}}').submit();
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
                $('#slider-photo')
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
</script>
@endsection

