@extends('layouts.app')
@section('title', 'Checkout')
@section('content')
    <!---MAIN CONTENT-->


    <div class="container">
        <div class="py-5 ">

            <div class="row">
                
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                        <span class="badge badge-secondary badge-pill">{{Cart::content()->count()}}</span>
                    </h4>
                    <ul class="list-group mb-3">
						@foreach (Cart::content() as $key => $item)
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">{{$item->name}}</h6>
                                <small class="text-muted">Quantity: <?php echo $item->qty; ?></small>
                            </div>
                            <span class="text-muted">৳<?php echo $item->total; ?></span>
                        </li>
						@endforeach

						<li class="list-group-item d-flex justify-content-between">
                            <span>Shipping Charge</span>
                            <strong>৳ <span id="charge">@if ($shippingCharge != null) {{$shippingCharge->value}} @else {{'0'}}  @endif</span></strong>
                        </li>
						
                        <li class="list-group-item d-flex justify-content-between bg-light" id="coupon_section">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>#afhi-2211</small>
                            </div>
                            <span class="text-success" id="coupon_amount"> ৳ 0</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (BDT)</span>
                            <strong>৳ <span id="total"><?php if($shippingCharge != null) $shipping = (int)$shippingCharge->value; else $shipping = 0; echo $shipping + (int) str_replace(',', '',Cart::total()); ?> </span></strong>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code" id="coupon">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-secondary" onclick="getCouponInfo()">Redeem</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-8 order-md-1">
                    @include('includes.error')
                    <h4 class="mb-3">Shipping address</h4>
                    <form class="needs-validation" novalidate action="{{route('place.order')}}" method="POST">
						@csrf

                        <div class="mb-3">
                            <label for="username">Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="username" placeholder="Name" required name="name" value="{{auth()->user()->name}}">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email" value="{{auth()->user()->email}}" required>
                            
                        </div>
                        <div class="mb-3">
                            <label for="mobile">Mobile</label>
                            <input type="text" class="form-control" id="mobile" placeholder="+88 01712 111 222" name="phone" value="{{auth()->user()->phone}}" required>
                            
                        </div>

                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="" name="address" value="{{auth()->user()->address}}">
                        </div>
                        <hr class="mb-4">

                        <h4 class="mb-3" style="text-align: left;">Delivery</h4>

                        <div class="d-block my-3" style="height: auto; width: auto; text-align: left;">
                            <div class="custom-control custom-radio">
                                <input id="debit" name="delivery_option" type="radio" class="custom-control-input"
                                    required value="Courier" checked onclick="changeShippingAmount()">
                                <label class="custom-control-label" for="debit">Courier</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="paypal" name="delivery_option" type="radio" class="custom-control-input" required value="By Hand" onclick="changeShippingAmount()">
                                <label class="custom-control-label" for="paypal">By Hand</label>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <h4 class="mb-3" style="text-align: left;">Payment</h4>

                        <div class="d-block my-3" style="height: auto; width: auto; text-align: left;">
                            <div class="custom-control custom-radio">
                                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input"
                                    required>
                                <label class="custom-control-label" for="debit">Online Payment</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required checked>
                                <label class="custom-control-label" for="paypal">Cash in Delivery</label>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                    </form>
                </div>
            </div>
        </div>

        <!---MAIN CONTENT-->

    </div>
@endsection

@section('footer')

    <script>
        function getCouponInfo() {

            event.preventDefault();

            $.ajaxSetup({

                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}'
                }

            });

            var coupon = $('#coupon').val();

            var url = '{{ route('get.coupon') }}';

            $.ajax({

                url: url,
                method: 'POST',
                data: {
                    'coupon': coupon
                },

                success: function(data2) {

                    var data = JSON.parse(data2);

                    if (data == null) {
                        Swal.fire({

                            position: 'top-end',
                            icon: 'error',
                            title: 'Coupon Expired!',
                            showConfirmButton: false,
                            timer: 2000
                        });

                    } else {
                        //alert(data.amount);
                        $('#coupon_amount').text('৳' + data.amount);
                        var total = $('#total').text();
                        var netTotal = parseFloat(total) - parseFloat(data.amount);
                        $('#total').text(netTotal);
                        $('#coupon_section').show();

                        Swal.fire({

                            position: 'top-end',
                            icon: 'success',
                            title: 'Coupon Amount Added Successfully!',
                            showConfirmButton: false,
                            timer: 2000
                        });

                    }
                    // location.reload(); 

                },

                error: function(error) {

                    console.log(error);
                }


            });
        }

        function changeShippingAmount() {

            let delivery = $("input[name=delivery_option]:checked").val();

            if (delivery == 'Courier') {
                var charge = '<?php if($shippingCharge != null) echo (int)$shippingCharge->value; else echo 0; ?>';
                var total = '<?php if($shippingCharge != null) $shipping = (int)$shippingCharge->value; else $shipping = 0; echo $shipping + (int) str_replace(',', '',Cart::total()); ?>';
                $('#charge').text(charge);
                $('#total').text(total);
            } else {
                var total = '<?php $shipping = 0; echo $shipping + (int) str_replace(',', '',Cart::total()); ?>';
                $('#charge').text(0);
                $('#total').text(total);
            }
        }

    </script>

@endsection
