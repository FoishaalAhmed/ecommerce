@extends('backend.layouts.app')
@section('title', 'Coupon')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Dashboard
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('coupons.index')}}"><i class="fa fa-group"></i> Coupon</a></li>
        </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Content Header (user header) -->
                <div class="box box-teal box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Coupon</h3>
                        <div class="box-tools pull-right">
                        	
                        </div>		
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" id="box-body">
                    	@include('includes.error')
                        @if (isset($coupon))
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{route('coupons.update', $coupon->id)}}" method="post" class="form-horizontal">
                                        @csrf
                                        @method('PUT')
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="">{{__('Coupon')}}</label>
                                                    <input type="text" class="form-control" name="number"  placeholder="{{__('Coupon')}}" value="{{$coupon->number}}" required="" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="">{{__('Expire')}}</label>
                                                    <input type="text" class="form-control" name="expire"  placeholder="{{__('Expire')}}" value="{{$coupon->expire}}" required="" autocomplete="off" id="expire">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="">{{__('Amount')}}</label>
                                                    <input type="text" class="form-control" name="amount"  placeholder="{{__('Amount')}}" value="{{$coupon->amount}}" required="" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <label for=""><br/></label>
                                            <button type="submit" class="btn btn-sm bg-teal form-control">{{__('Update')}}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @else
                           <div class="row">
                                <div class="col-md-12">
                                    <form action="{{route('coupons.store')}}" method="post" class="form-horizontal">
                                        @csrf
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="">{{__('Coupon')}}</label>
                                                    <input type="text" class="form-control" name="number"  placeholder="{{__('Coupon')}}" value="{{old('number')}}" required="" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="">{{__('Expire')}}</label>
                                                    <input type="text" class="form-control" name="expire"  placeholder="{{__('Expire')}}" value="{{old('expire')}}" required="" autocomplete="off" id="expire">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="">{{__('Amount')}}</label>
                                                    <input type="text" class="form-control" name="amount"  placeholder="{{__('Amount')}}" value="{{old('amount')}}" required="" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <label for=""><br/></label>
                                            <button type="submit" class="btn btn-sm bg-teal form-control">{{__('Save')}}</button>
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
                                            <th style="width: 40%">Coupon</th>
                                            <th style="width: 30%">Expire</th>
                                            <th style="width: 15%">Amount</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($coupons as $key => $coupon)
                                        <tr>
                                            <td>{{$loop->index + 1}}</td>
                                            <td>{{$coupon->number}} </td>
                                            <td>{{date('d M, Y', strtotime($coupon->expire))}}</td>
                                            <td>{{$coupon->amount}}</td>
                                            <td>   
                                                
                                                <a class="btn btn-sm bg-teal" href="{{route('coupons.edit', $coupon->id)}}"><span class="glyphicon glyphicon-edit"></span></a>

                                                <form action="{{route('coupons.destroy',$coupon->id)}}" method="post" style="display: none;" id="delete-form-{{ $coupon->id}}">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                                </form>
                                                <a class="btn btn-sm bg-red" href="" onclick="if(confirm('Are You Sure To Delete?')){
                                                    event.preventDefault();
                                                    getElementById('delete-form-{{ $coupon->id}}').submit();
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

    $(function () {
        $('#expire').datepicker({
            autoclose:   true,
            changeYear:  true,
            changeMonth: true,
            dateFormat:  "dd-mm-yy",
            yearRange:   "-0:+10"
        });
    });
    </script>
@endsection