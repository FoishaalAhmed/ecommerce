

@extends('layouts.app')
@section('title', 'Checkout')
@section('content')
<br><br>
<div class="container-fluid" style="margin-bottom: 20px ;">
    <div class="dtl-2nd-nav">
        <div class="row" style="background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209));">
            <div class="container">
                <div class="row" style="text-align: center; padding-top: 10px; padding-bottom: 10px; ">
                    <div class="col-">
                        <a href="{{URL::to('/')}}" style="text-decoration: none;">Home</a> /
                        <a style="text-decoration: none;">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-----main containt-->
<div class="container checkout" style="margin-top: 20px;font-size: 18px;  ">
    <div class="row" style="text-align: center;">
        <hr style="margin-bottom: 0px;">
        <div class="col-2" style="border-right: 1px solid black; padding: 10px; text-align: left; width: 20%; ">
            <span> <i style="font-size: 14px;" class="fa fa-home"></i></span> &nbsp;Hello <span
                style="font-size: 14px; font-weight: bold; ">jmahmud385</span>
            <div class="" style="font-size: 12px;">
                (not jmahmud385? <a href="#">Sign Out</a> )
            </div>
        </div>
        <div class="col-4" style="border-right: 1px solid black; padding: 10px; width: 33%; font-size: 14px; ">
            <span>
                <p style="padding-bottom: 0px; padding-top: 15px;margin-bottom: 0px; ">Need help? Call us: +91
                    98300-09940
                </p>
            </span>
        </div>
        <div class="col-3" style="padding: 10px;width: 33%; font-size: 14px;text-align: left;">
            <p style="padding-bottom: 0px; padding-top: 15px;margin-bottom: 0px; "> E-mail us at help@hjbrl.com </p>
        </div>
        <div class="col-3" style="border-left: 1px solid black; padding: 10px; width: 12%; font-size: 15px; ">
            <a style="text-decoration: none;" href="#">
                <p style="margin-bottom: 0px; margin-top: 10px; "><i class="fa fa-home"></i> View Cart</p>
            </a>
        </div>
        <hr>
    </div>
    <div class="row" style="border: 1px solid black; margin-right: -37px;  ">
        <div class="col-6">
            <h2 style="font-weight: 800;">
                Have A Promotional Code?
            </h2>
        </div>
        <div class="col-6">
            <form action="" style="margin-bottom: 0px;margin-right: -12px;">
                <div class="input-group" style="margin-bottom: 0px;margin-top: 10px; margin-right: -12px;">
                    <input id="email" type="text" class="form-control" name="email" placeholder="COUPON CODE">
                    <span class="btn input-group-addon" style="border: 1px solid green;background-color: #82d682;">
                    APPLY COUPON </span>
                </div>
            </form>
        </div>
    </div>
    <br><br>
    <div class="row check-out">
        <div class="container cart">
            <div class="row" style="border: 1px solid rgb(158, 154, 154);" >
                <div class="col-12">
                    <h2 style="font-weight: 800;" >
                        You Have {{Cart::content()->count()}} Item In Your Cart
                    </h2>
                </div>
                <hr style="width: 98%;" >
                <div class="col-12">
                    <table class="table" >
                        <tr>
                            <th style=" width:60%"> Product</th>
                            <th style="text-align: center; width:10%" > Price </th>
                            <th style="text-align: center; width:20%" > Quantity </th>
                            <th style="text-align: center; width:10%" > Subtotal </th>
                        </tr>
                        @php
                        $i = 1;
                        @endphp
                        @foreach (Cart::content() as $key => $item)
                        <tr>
                            <td>
                                <a href="#" style="text-decoration: none;" >
                                    <img src="{{asset($item->options->image)}}" style="height: 120px; float: left;padding-right: 20px; " alt="">
                                    <p style="margin-top: 30px;" >  {{$item->name}} |</p>
                                    <p> <?php echo ($item->options->has('size') ? $item->options->size : ''); ?>, <?php echo ($item->options->has('color') ? $item->options->color : ''); ?></p>
                                </a>
                            </td>
                            <td style="text-align: center;" >
                                <p style="margin-top: 50px;"><span  ><?php echo $item->price; ?></span></p>
                            </td>
                            <td style="text-align: center;" >
                                <div class="col-8 " class="input-group" style="margin-top: 40px;text-align: center;margin: auto;padding-top: 43px ;" >
                                    <input class="form-control" style="width: 35px;height: 40px; float: left; padding-left: 5px; padding-right: 5px;" value="<?php echo $item->qty; ?>" type="text" id="qty{{$item->rowId}}"  min="1" readonly>
                                </div>
                            </td>
                            <td style="text-align: center;" >
                                <p style="margin-top: 50px;"><span  ><?php echo $item->total; ?></span></p>
                            </td>
                        </tr>
                        @php
                        $i++;
                        @endphp
                        @endforeach
                    </table>
                </div>
                <hr style="width: 98%;" >
            </div>
        </div>
        <div class="container cart">
            <div class="row" style="margin-top:20px;" >
                <div class="col-md-6" style="padding-left:0px;" >
                <div class="col-75" style="padding-left:0px;">
                <div class=" check-out" style="padding-left:15px;">
                    @include('includes.error')
                    <form action="{{route('place.order')}}" method="POST" style="width:80%;width: 80%;border: 1px solid;border-right-color:currentcolor;border-right-style: solid;border-right-width: 1px;padding: 10px;border-right: none;">
                        @csrf
                        <div class="row">
                            <div class="col-50">
                                <h3>Shipping Address</h3>
                                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                <input type="text" id="fname" name="name" placeholder="John M. Doe" value="{{auth()->user()->name}}" required>
                                <label for="phone"><i class="fas fa-phone-volume"></i> Phone</label>
                                <input type="text" id="phone" name="phone" placeholder="+88 01919 61 31 52" value="{{auth()->user()->phone}}" required>
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="text" id="email" name="email" placeholder="ictbanglabd@gmail.com" value="{{auth()->user()->email}}" required>
                                <label for="adr"><i class="fas fa-id-badge"></i> Address</label>
                                <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" value="{{auth()->user()->address}}" required>
                            </div>
                            {{-- <div class="col-50">
                                <h3>Payment</h3>
                                <label for="fname">Accepted Cards</label>
                                <div class="icon-container">
                                    <i class="fab fa-cc-visa" style="color:navy;"></i>
                                    <i class="fab fa-cc-amex" style="color:blue;"></i>
                                    <i class="fab fa-cc-mastercard" style="color:red;"></i>
                                    <i class="fab fa-cc-discover" style="color:orange;"></i>
                                </div>
                                <label for="cname">Name on Card</label>
                                <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                                <label for="ccnum">Credit card number</label>
                                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                                <label for="expmonth">Exp Month</label>
                                <input type="text" id="expmonth" name="expmonth" placeholder="September">
                                <div class="row">
                                    <div class="col-50">
                                        <label for="expyear">Exp Year</label>
                                        <input type="text" id="expyear" name="expyear" placeholder="2018">
                                    </div>
                                    <div class="col-50">
                                        <label for="cvv">CVV</label>
                                        <input type="text" id="cvv" name="cvv" placeholder="352">
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <label>
                        <input type="checkbox" checked="checked" name="sameadr"> I accept all <a href="{{route('pages', 'terms-conditions')}}"> Terms & Conditions</a>
                        </label>
                        <input type="submit" style="background-color: darkgreen;" value="Place Order" class="btn">
                    </form>
                </div>
            </div>
                </div>
                <div class="col-md-6" style="border: 1px solid black;" >
                    <h2 style="font-weight: 800;" >
                        Cart totals
                    </h2>
                    <hr>
                    <table class="table" >
                        <tr>
                            <th>
                                <p style="margin-bottom: 0px;">Subtotal</p>
                            </th>
                            <th style="text-align: right;" >
                                <p style="margin-bottom: 0px;color: rgb(112, 116, 116);">৳ <?php echo Cart::subtotal(); ?></p>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <p style="margin-bottom: 0px;">Shipping</p>
                            </th>
                            <th style="text-align: right;" >
                                <p style="margin-bottom: 0px;color: rgb(112, 116, 116);">Flat rate: ৳ @if ($shippingCharge != null) {{$shippingCharge->value}} @else {{'0'}}  @endif</p>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <p style="margin-bottom: 0px;">Total</p>
                            </th>
                            <th style="text-align: right;" >
                                <p style="margin-bottom: 0px;"> <span style="color: #f71008;" > ৳ 
                                                    <?php if($shippingCharge != null) $shipping = (int)$shippingCharge->value; else $shipping = 0; echo $shipping + (int)str_replace(',', '',Cart::total()); ?> </span> </p>
                                {{-- <small>(includes <span style="color: #f71008;" >₹26.26</span> Tax)</small> --}}
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- <div class="row" style="margin-top:50px;" >
            <div class="col-75">
                <div class="container check-out22">
                    @include('includes.error')
                    <form action="{{route('place.order')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-50">
                                <h3>Shipping Address</h3>
                                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                <input type="text" id="fname" name="name" placeholder="John M. Doe" value="{{auth()->user()->name}}" required>
                                <label for="phone"><i class="fas fa-phone-volume"></i> Phone</label>
                                <input type="text" id="phone" name="phone" placeholder="+88 01919 61 31 52" value="{{auth()->user()->phone}}" required>
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="text" id="email" name="email" placeholder="ictbanglabd@gmail.com" value="{{auth()->user()->email}}" required>
                                <label for="adr"><i class="fas fa-id-badge"></i> Address</label>
                                <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" value="{{auth()->user()->address}}" required>
                            </div>
                            {{-- <div class="col-50">
                                <h3>Payment</h3>
                                <label for="fname">Accepted Cards</label>
                                <div class="icon-container">
                                    <i class="fab fa-cc-visa" style="color:navy;"></i>
                                    <i class="fab fa-cc-amex" style="color:blue;"></i>
                                    <i class="fab fa-cc-mastercard" style="color:red;"></i>
                                    <i class="fab fa-cc-discover" style="color:orange;"></i>
                                </div>
                                <label for="cname">Name on Card</label>
                                <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                                <label for="ccnum">Credit card number</label>
                                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                                <label for="expmonth">Exp Month</label>
                                <input type="text" id="expmonth" name="expmonth" placeholder="September">
                                <div class="row">
                                    <div class="col-50">
                                        <label for="expyear">Exp Year</label>
                                        <input type="text" id="expyear" name="expyear" placeholder="2018">
                                    </div>
                                    <div class="col-50">
                                        <label for="cvv">CVV</label>
                                        <input type="text" id="cvv" name="cvv" placeholder="352">
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <label>
                        <input type="checkbox" checked="checked" name="sameadr"> I accept all <a href="{{route('pages', 'terms-conditions')}}"> Terms & Conditions</a>
                        </label>
                        <input type="submit" style="background-color: darkgreen;" value="Place Order" class="btn">
                    </form>
                </div>
            </div>
        </div> -->
    </div>
</div>
<!-----responsive check_out_page-->
<div class="wrapper">
    <div class=" check-out responsivecheckout" style="margin-top:130px;">
        <!-- sitebar -->
        <div class="col-md-3 col-sm-12 col-xl-3" style="margin-bottom: 20px;">
            <div class="sitebar">
                <div class="card">
                    <div class="card-header bg-darkk" style="text-align: center;">
                        <span class="card-header-shippingAddress"></span>Shipping Address
                    </div>
                    <div class="card-body">
                        @include('includes.error')
                        <form action="{{route('place.order')}}" method="POST">
                        @csrf
                            <div class="form-group">
                                <label for="inputEmail4">Name</label>
                                <input type="text" class="form-control" placeholder="Name" value="{{auth()->user()->name}}" required name="name">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{auth()->user()->email}}" required name="email">
                            </div>
                            <div class="form-group">
                                <label for="inputNumber">Mobile</label>
                                <input type="number" class="form-control" id="inputNumber" value="{{auth()->user()->phone}}" required name="phone">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlAddress">Address</label>
                                <textarea class="form-control" id="exampleFormControlAddress" rows="2" required name="address">{{auth()->user()->address}}</textarea>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- main-contant -->
        <div class="col-md-9  col-sm-12 col-xl-9">
            <div class="row">
                <!-- leftheadercard -->
                <div class="col-md-6">
                    {{-- <div class="card leftheadercard">
                        <!-- card-header -->
                        <div class="card-header bg-darkk " style="text-align: center;">
                            <span class="card-header-leftdelivery"></span>Delivery Method
                        </div>
                        <!-- card-body -->
                        <div class="card-body leftcardbory mt-4" id="hidefelltcardbody">
                            <div class="custom-control custom-radio cardcheckradioimg">
                                <input type="radio" id="pickupRadio1" name="customRadio"
                                    class="custom-control-input">
                                <label style="margin-top: -25px;" class="custom-control-label" for="pickupRadio1">
                                &nbsp; &nbsp; &nbsp; Pickup from office</label>
                            </div>
                            <div class="custom-control custom-radio cardcheckradioimg">
                                <input type="radio" id="shippingRadio2" name="customRadio"
                                    class="custom-control-input">
                                <label style="margin-top: -25px;" class="custom-control-label" for="shippingRadio2">
                                &nbsp; &nbsp; &nbsp; Shipping charge 1$</label>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!-- righttheadercard -->
                <div class="col-md-6">
                    {{-- <div class="card righttheadercard">
                        <!-- card-header  -->
                        <div class="card-header bg-darkk  ">
                            <span class="card-header-rightdelivery"></span>Payment Method
                        </div>
                        <!-- card-body -->
                        <div class="card-body m-1 mt-4">
                            <div class="custom-control custom-radio cardcheckradioimg">
                                <input type="radio" id="customRadio3" name="customRadio"
                                    class="custom-control-input">
                                <label style="margin-top: -30px;" class="custom-control-label" for="customRadio3">
                                &nbsp; &nbsp; &nbsp; <img src="img/bank_gateway.png" alt="images">
                                </label>
                            </div>
                            <div class="custom-control custom-radio cardcheckradioimg">
                                <input type="radio" id="customRadio4" name="customRadio"
                                    class="custom-control-input">
                                <label style="margin-top: -30px;" class="custom-control-label" for="customRadio4">
                                &nbsp; &nbsp; &nbsp; <img src="img/cc.png" alt="images">
                                </label>
                            </div>
                            <div class="custom-control custom-radio cardcheckradioimg">
                                <input type="radio" id="customRadio5" name="customRadio"
                                    class="custom-control-input">
                                <label style="margin-top: -30px;" class="custom-control-label" for="customRadio5">
                                &nbsp; &nbsp; &nbsp; <img src="img/mobile-payment.png" alt="images">
                                </label>
                            </div>
                            <div class="custom-control custom-radio cardcheckradioimg">
                                <input type="radio" id="deliveryRadio6" name="customRadio"
                                    class="custom-control-input">
                                <label style="margin-top: -25px;" class="custom-control-label" for="deliveryRadio6">
                                &nbsp; &nbsp; &nbsp; Cash on delivery</label>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!-- ordercard -->
            <div class="row pt-2">
                <div class="col-md-12">
                    <div class="card ordercard">
                        <div class="card-header bg-darkk  ">
                            <span class="card-header-orderdelivery"></span>
                            <p style="margin: 0px; font-weight: 800; ">Order Review</p>
                        </div>
                        <div class="card-body table-responsive ">
                            <table class="table table-hover bordertable">
                                <thead>
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Cart::content() as $item)
                                    <tr>
                                        <td scope="row" style="width: 20%;">
                                            <img
                                                src="{{asset($item->options->image)}}" alt="images"
                                                width="100%" height="auto">
                                        </td>
                                        <td class="font-18" style="width: 100%;">
                                            <h6 class="font-14 mb-0">{{$item->name}}</h6>
                                            <span style="font-size: 12px;">Size: <?php echo ($item->options->has('size') ? $item->options->size : ''); ?>, Color: <?php echo ($item->options->has('color') ? $item->options->color : ''); ?></span>
                                        </td>
                                        <td>
                                            <p class="card-text font-18">Tk.<?php echo $item->price; ?>
                                            </p>
                                        </td>
                                        <td class="font-18">
                                            <div class="row my-4">
                                                <div class="col-md-12">
                                                    <div class="cartview-product-Quantity">
                                                        <span class="font-16">
                                                        <span class="price-inputt">
                                                        <input type="number" class="text-center" name="qty" min="1"  value="<?php echo $item->qty; ?>" />
                                                        </spanv>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="font-18">Tk.<?php echo $item->total; ?></td>
                                    </tr>
                                    @endforeach
                                    <tr>
											<th scope="row"></th>
											<td></td>
											<td></td>
											<td></td>
											<td>Net Total-</td>
											<td>৳ <?php echo Cart::subtotal(); ?></td>
										</tr>
										<tr id="shipping_charge1">
											<th scope="row"></th>
											<td></td>
											<td></td>
											<td></td>
											<td>Shipping charge-</td>
											<td>৳ @if ($shippingCharge != null) {{$shippingCharge->value}} @else {{'0'}}  @endif</td>
										</tr>
										<tr id="grand_total">
											<th scope="row"></th>
											<td></td>
											<td></td>
											<td></td>
											<td>Grand Total-</td>
											<td>৳  <?php if($shippingCharge != null) $shipping = (int)$shippingCharge->value; else $shipping = 0; echo $shipping + (int)str_replace(',', '',Cart::total()); ?></td>
										</tr>
                                </tbody>
                            </table>
                            <div class="order-btn float-right">
                                <button type="submit" class="btn btn-primary"> Place order </button>
                                </form>
                            </div>
                            <br>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-----main containt-->
@endsection

