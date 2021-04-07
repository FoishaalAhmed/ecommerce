

@extends('layouts.app')
@section('title', 'Carts')
@section('content')
<br><br>
<div class="container-fluid" style="margin-bottom: 20px ;" >
    <div class="dtl-2nd-nav">
        <div class="row" style="background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209));">
            <div class="container">
                <div class="row" style="text-align: center; padding-top: 10px; padding-bottom: 10px; " >
                    <div class="col-">
                        <a style="text-decoration: none;" >Orders</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-----Cart item----->
<div class="container cart">
    <div class="row" style="border: 1px solid rgb(158, 154, 154);" >
        <div class="col-12">
            <h2 style="font-weight: 800;" >
                You Have order {{sizeof($orders)}} Item
            </h2>
        </div>
        <hr style="width: 98%;" >
        <div class="col-12">
            <table class="table" >
                <tr>
                    <th style=" width:30%"> Product</th>
                    <th style="text-align: center; width:10%" > Quantity </th>
                    <th style="text-align: center; width:10%" > Price </th>
                    <th style="text-align: center; width:10%" > Total </th>

                    <th style="text-align: center; width:20%" > Delivered </th>
                    <th style="text-align: center; width:10%" > Status </th>
                </tr>
                @foreach ($orders as $key => $item)
                    
                
                <tr>
                    <td>
                        <a href="#" style="text-decoration: none;" >
                            <img src="{{asset($item->cover)}}" style="height: 120px; float: left;padding-right: 20px; " alt="">
                            {{$item->name}} 

                                @if ($item->size != null)
                                    <br>
                                    Size: {{$item->size}} 
                                @endif

                                @if ($item->color != null)
                                    <br>
                                    Color: {{$item->color}} 
                                @endif
                        </a>
                    </td>
                    <td style="text-align: center;" >
                        <p style="margin-top: 50px;">{{$item->quantity}}</p>
                    </td>
                    <td style="text-align: center;" >
                        <p style="margin-top: 50px;">{{$item->price}}</p>
                    </td>
                    <td style="text-align: center;" >
                        <p style="margin-top: 50px;"><span>{{$item->total}}</span></p>
                    </td>
                    <td style="text-align: center;" >
                        <p style="margin-top: 50px;"><span>{{date('d M, Y h:i A', strtotime($item->delivered_date_time))}}</span></p>
                    </td>
                    <td style="text-align: center;" >
                        <p style="margin-top: 50px;">
                            <span>
                                @if ($item->status == 0) {{'Pending'}}
                                                
                                @elseif($item->status == 1) {{'Delivered'}}

                                @else
                                    {{'Canceled'}}
                                @endif
                            </span>
                        </p>
                    </td>
                </tr>

                @endforeach
            </table>
        </div>
        <hr style="width: 98%;" >
    </div>
</div>
<div class="responsive-cart">
    <section class="Cart-wrapper my-5"  >
        <div class="nav-container-fluid container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card cart-area my-1">
                                <div class="card-body custom-card table-responsive">
                                    <form action="#" method="post">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Total</th>
                                                    <th scope="col">Delivered</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $item)
                                                <tr>
                                                    <td scope="row" style="width: 20%;">
                                                        <img src="{{asset($item->cover)}}" style="height: 120px; float: left;padding-right: 20px; " alt="">
                                                        {{$item->name}} 

                                                        @if ($item->size != null)
                                                            <br>
                                                            Size: {{$item->size}} 
                                                        @endif

                                                        @if ($item->color != null)
                                                            <br>
                                                            Color: {{$item->color}} 
                                                        @endif
                                                    </td>
                                                    <td class="font-18" style="width: 100%;">
                                                        <h6 class="font-14 mb-0">{{$item->quantity}}</h6>
                                                        
                                                    </td>
                                                    <td>
                                                        <p class="card-text font-18">Tk.{{$item->price}}
                                                        </p>
                                                    </td>
                                                    <td class="font-18">
                                                        Tk. {{$item->total}}
                                                    </td>
                                                    
                                                    <td class="font-18">{{date('d M, Y h:i A', strtotime($item->delivered_date_time))}}</td>

                                                    <td class="cart-deleted">
                                                        @if ($item->status == 0) {{'Pending'}}
                                                
                                                        @elseif($item->status == 1) {{'Delivered'}}

                                                        @else
                                                            {{'Canceled'}}
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection

