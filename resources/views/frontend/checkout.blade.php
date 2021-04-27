

@extends('layouts.app')
@section('title', 'Checkout')
@section('content')
<!---MAIN CONTENT-->
    <div class="container-fluid" style="margin-bottom: 20px ;">
      <div class="dtl-2nd-nav">
        <div class="row" style="background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209));">
          <div class="container">
            <div class="row" style="text-align: center; padding-top: 10px; padding-bottom: 10px;margin: auto; ">
              <div class="col-md-12 col-12">
                <a href="{{URL::to('/')}}" style="text-decoration: none;color: black;">Home</a> /
                <a  style="text-decoration: none;color: black;">Chackout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container checkout" style="margin-top: 20px;font-size: 18px;  ">
      <div class="row" style="text-align: center;border-top: 1px solid black;">
        <div class="col-md-2 col-8"
          style="border-right: 1px solid black; padding: 10px; text-align: left; width: 20%; ">
          <span> <i style="font-size: 14px;" class="fa fa-home"></i></span> &nbsp;Hello <span
            style="font-size: 14px; font-weight: bold; ">{{auth()->user()->name}}</span>
          <div class="" style="font-size: 12px;">
            (not {{auth()->user()->name}}? <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign Out</a> )
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
          </div>
        </div>
        <div class="col-md-4 col-12 d-none d-md-block"
          style="border-right: 1px solid black; padding: 10px; width: 33%; font-size: 14px; ">
          <span>
            <p style="padding-bottom: 0px; padding-top: 15px;margin-bottom: 0px; ">Need help? Call us: {{$contact->phone}}
            </p>
          </span>
        </div>
        <div class="col-md-3 col-12 d-none d-md-block"
          style="padding: 10px;width: 33%; font-size: 14px;text-align: left;">
          <p style="padding-bottom: 0px; padding-top: 15px;margin-bottom: 0px; "> E-mail us at {{$contact->email}} </p>
        </div>
        <div class="col-md-3 col-4" style="border-left: 1px solid black; padding: 10px; width: 12%; font-size: 15px; ">
          <a style="text-decoration: none;" href="{{route('carts')}}">
            <p style="margin-bottom: 0px; margin-top: 10px; "><i class="fa fa-home"></i> View Cart</p>
          </a>
        </div>
        <hr>
      </div>
      <div class="row" style="border: 1px solid black;   ">
        <div class="col-12 col-md-6">
          <h2 style="font-weight: 800;font-size: 20px;margin-top: 10px;">
            Have A Promotional Code?
          </h2>
        </div>
        <div class="col-12 col-md-6">
          <form action="" style="margin-bottom: 0px;margin-right: -12px;">
            <div class="input-group"
              style="margin-bottom: 0px;margin-top: 4px; margin-right: -12px;margin-bottom: 5px;">
              <input id="email" type="text" class="form-control" name="email" placeholder="COUPON CODE">
              <span class="btn input-group-addon" style="border: 1px solid green;background-color: #82d682;"> APPLY
                COUPON </span>
            </div>
          </form>
        </div>
       
      </div>
       @include('includes.error')
      <br><br>
      <div class="row check-out">
        <div class="col-md-12">
            <div class="row">
              <div class="col-md-8">
                <div class="card cart-area my-1">
                  <div class="card-body custom-card table-responsive">
                    <form action="#" method="post">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                                <th style=" width:50%"> Product</th>
                                <th style="text-align: center; width:10%" > Price </th>
                                <th style="text-align: center; width:20%" > Quantity </th>
                                <th style="text-align: center; width:10%" > Subtotal </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                                // echo "<pre>";
                                //     print_r(Cart::content());
                                // echo "</pre>";
                            @endphp
                            @foreach (Cart::content() as $key => $item)
                          <tr>
                            <td scope="row" style="width: 20%;">
                                <img src="{{asset($item->options->image)}}" style="height: 120px; float: left;padding-right: 20px; " alt="">
                                <p style="margin-top: 30px;" >  {{$item->name}} |</p>
                                <p> <?php echo ($item->options->has('size') ? $item->options->size : ''); ?>, <?php echo ($item->options->has('color') ? $item->options->color : ''); ?></p>
                            </td>
                            <td class="font-18" style="width: 100%;">
                              <h6 class="font-14 mb-0">TK. <?php echo $item->price; ?></h6>
                              
                            </td>
                            <td class="font-18">
                              <div class="row my-4">
                                <div class="col-md-12">
                                  <div class="cartview-product-Quantity">
                                    <span class="font-16">
                                      <span class="price-inputt">
                                        <input type="number" class="text-center" name="qty" min="1" max="1000" value="<?php echo $item->qty; ?>" onchange="updateCart('{{$item->rowId}}')" id="qty{{$item->rowId}}"/>
                                        </spanv>
                                      </span>
                                  </div>
                                </div>
                              </div>
                            </td>
                            
                            <td class="font-18">Tk.<?php echo $item->total; ?></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card my-1">
                  <div class="card-body">
                    <div class="card-summary-heading">
                      <h3 class="font-18">Order Summary</h3>
                    </div>
                    <div class="card-summary-content my-2 mt-4">
                      <form action="#" method="post">
                        <div class="card-summary-item my-2">
                          <span>Subtotal (1 items)</span>
                          <span class="float-right font-15" style="color: #000;">৳ <?php echo Cart::subtotal(); ?></span>
                        </div>
                        <div class="card-summary-item my-2">
                          <span>Shipping Fee</span>
                          <span class="float-right font-15" style="color: #000;">৳ @if ($shippingCharge != null) {{$shippingCharge->value}} @else {{'0'}}  @endif</span>
                        </div>
                        {{-- <div class="card-summary-item my-2">
                          <span>Shipping Fee Discount</span>
                          <span class="float-right font-15" style="color: #000;">-৳ 65</span>
                        </div>
                        <div class="input-group my-3">
                          <input type="text" class="form-control font-12" placeholder="Enter Voucher Code"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-md btn-outline-default m-0 px-3 py-2 z-depth-0 waves-effect"
                              type="button" id="button-addon2">Apply</button>
                          </div>
                        </div> --}}
                        <div class="card-summary-item my-2">
                          <span>Total</span>
                          <span class="float-right font-16" style="color: #f57224;">৳ <?php if($shippingCharge != null) $shipping = (int)$shippingCharge->value; else $shipping = 0; echo $shipping + (int) str_replace(',', '',Cart::total()); ?>
                          </span>
                        </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        <div class="col-md-12" style="margin-bottom: 50px;">
          <form action="{{route('place.order')}}" method="POST">
            @csrf
            <div class="row">
              <div class="col-md-6 ">
                <h3 class="payment" style="padding-top: 5px;padding-bottom: 13px;">Billing Address</h3>
                <br>
                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                <input class="form-control" type="text" id="fname" name="name" placeholder="John M. Doe" value="{{auth()->user()->name}}" required=""> <br>

                <label for="phone"><i class="fas fa-phone-volume"></i> Phone</label>
                <input class="form-control" type="text" id="phone" name="phone" placeholder="+88 01919 61 31 52" value="{{auth()->user()->phone}}" required=""> <br>

                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input class="form-control" type="text" id="email" name="email" placeholder="ictbanglabd@gmail.com" value="{{auth()->user()->email}}" required="">

                <br>
                <label for="adr"><i class="fas fa-id-badge"></i> Address</label>
                <input class="form-control" type="text" id="adr" name="address" placeholder="542 W. 15th Street" value="{{auth()->user()->address}}" required=""> <br>

                {{-- <label for="city"><i class="fas fa-university"></i> City</label>
                <input class="form-control" type="text" id="city" name="city" placeholder="New York"> <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="state"> <i class="fas fa-map-marked-alt"></i> Town / City </label>
                    <input class="form-control" type="text" id="state" name="state" placeholder="NY"> <br>
                  </div>
                  <div class="col-md-6">
                    <label for="zip"> <i class="fas fa-map-marker-alt"></i> District </label>
                    <input class="form-control" type="text" id="zip" name="zip" placeholder="10001"> <br>
                  </div>
                </div> --}}
              </div>
              <div class="col-md-6 ">
                <h3 class="payment" style="padding-top: 5px;padding-bottom: 13px;">Payment</h3>
                <br>
                <label for="fname">Accepted Cards</label>
                <div class="icon-container">
                  <i class="fab fa-cc-visa" style="color:navy;"></i>
                  <i class="fab fa-cc-amex" style="color:blue;"></i>
                  <i class="fab fa-cc-mastercard" style="color:red;"></i>
                  <i class="fab fa-cc-discover" style="color:orange;"></i>
                </div>
                <br>
                <label for="cname">Name on Card</label>
                <input class="form-control" type="text" id="cname" name="cardname" placeholder="John More Doe"> <br>
                <label for="ccnum">Credit card number</label>
                <input class="form-control" type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                <br>
                <label for="expmonth">Exp Month</label>
                <input class="form-control" type="text" id="expmonth" name="expmonth" placeholder="September"> <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="expyear">Exp Year</label>
                    <input class="form-control" type="text" id="expyear" name="expyear" placeholder="2018"> <br>
                  </div>
                  <div class="col-md-6">
                    <label for="cvv">CVV</label>
                    <input class="form-control" type="text" id="cvv" name="cvv" placeholder="352"> <br>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <!-- <input class="form-control" type="submit" style="background-color: darkgreen;" value="Continue to checkout" class="btn"> -->
            <div class="col-md-12" style="text-align: center; margin: auto; ">
              <button type="submit" class="btn btn" style="background-color: darkgreen; color: whitesmoke; "> Continue to checkout
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection

