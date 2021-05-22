

@extends('layouts.app')
@section('title', 'Orders')
@section('content')

<div class="container-fluid" style="margin-bottom: 20px ;">
      <div class="dtl-2nd-nav">
        <div class="row" style="background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209));">
          <div class="container">
            <div class="row" style="text-align: center; padding-top: 10px; padding-bottom: 10px;margin: auto; ">
              <div class="col-12">
                <a  style="text-decoration: none;color: black;">Orders</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="Cart-wrapper my-5">
      <div class="nav-container-fluid container-fluid">
        <div class="row" style="border-top: 1px solid black; border-bottom: 1px solid black;margin: 0px; ">
          <div class="col-md-12 col-xm3" style="padding-top: 10px; padding-bottom: 10px; ">
            <p style="margin-bottom: 0px;">
              <span><i class="fa fa-home"></i></span>  You Have order {{sizeof($orders)}} Item
            </p>
          </div>
        </div>
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
                                <th style=" width:15%"> Order Date</th>
                                <th style="text-align: center; width:15%" > Shipping Charge </th>
                                <th style="text-align: center; width:15%" > Coupon Discount </th>
                                <th style="text-align: center; width:15%" > Total </th>

                                <th style="text-align: center; width:20%" > Delivered </th>
                                <th style="text-align: center; width:10%" > Status </th>
                                <th style="text-align: center; width:10%" > Detail </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($orders as $key => $item)
                          <tr>
                            <td scope="row">
                                {{date('d M, Y h:i A', strtotime($item->order_date_time))}}
                            </td>
                            <td class="font-18">
                              <h6 class="font-14 mb-0">TK. {{$item->shipping_charge}}</h6>
                              
                            </td>
                            <td class="font-18">TK. {{$item->coupon_amount}}
                            </td>
                            
                            <td class="font-18">Tk.{{$item->amount}}</td>
                            <td class="font-18"> @if($item->delivered_date_time != null) {{date('d M, Y h:i A', strtotime($item->delivered_date_time))}} @endif</td>
                            <td class="font-18">@if ($item->status == 0) {{'Pending'}}
                                                
                                @elseif($item->status == 1) {{'Delivered'}}

                                @else
                                    {{'Canceled'}}
                                @endif</td>
                              <td class="font-18"><a href="{{route('order.detail', $item->id)}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a></td>
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


@endsection

