

@extends('layouts.app')
@section('title', 'Order Details')
@section('content')

<div class="container-fluid" style="margin-bottom: 20px ;">
      <div class="dtl-2nd-nav">
        <div class="row" style="background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209));">
          <div class="container">
            <div class="row" style="text-align: center; padding-top: 10px; padding-bottom: 10px;margin: auto; ">
              <div class="col-12">
                <a  style="text-decoration: none;color: black;">Order Details</a>
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
                                <th style=" width:30%"> Product</th>
                                <th style="text-align: center; width:10%" > Quantity </th>
                                <th style="text-align: center; width:10%" > Price </th>
                                <th style="text-align: center; width:10%" > Total </th>

                                <th style="text-align: center; width:20%" > Delivered </th>
                                <th style="text-align: center; width:10%" > Status </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                                // echo "<pre>";
                                //     print_r(Cart::content());
                                // echo "</pre>";
                            @endphp
                            @foreach ($orders as $key => $item)
                          <tr>
                            <td scope="row">
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
                            <td class="font-18">
                              <h6 class="font-14 mb-0"> {{$item->quantity}}</h6>
                              
                            </td>
                            <td class="font-18">TK. {{$item->price}}
                            </td>
                            
                            <td class="font-18">Tk.{{$item->total}}</td>
                            <td class="font-18"> @if($item->delivered_date_time != null) {{date('d M, Y h:i A', strtotime($item->delivered_date_time))}} @endif</td>
                            <td class="font-18">@if ($item->status == 0) {{'Pending'}}
                                                
                                @elseif($item->status == 1) {{'Delivered'}}

                                @else
                                    {{'Canceled'}}
                                @endif</td>
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

