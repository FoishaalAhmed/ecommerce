

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
                        <a href="#" style="text-decoration: none;" >Home</a> /
                        <a href="#" style="text-decoration: none;" >Shopping Cart</a>
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
                You Have {{Cart::content()->count()}} Item In Your Cart
            </h2>
        </div>
        <hr style="width: 98%;" >
        <div class="col-12">
            <table class="table" >
                <tr>
                    <th style=" width:50%"> Product</th>
                    <th style="text-align: center; width:10%" > Price </th>
                    <th style="text-align: center; width:20%" > Quantity </th>
                    <th style="text-align: center; width:10%" > Subtotal </th>
                    <th style="text-align: center; width:10%" > Action </th>
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
                            <button  class="form-control" style="width: 35px;height: 40px; float: left;" onclick="qtyMinus('{{$item->rowId}}')" >-</button>
                            <input class="form-control" style="width: 35px;height: 40px; float: left; padding-left: 5px; padding-right: 5px;" value="<?php echo $item->qty; ?>" type="text" id="qty{{$item->rowId}}" onchange="updateCart('{{$item->rowId}}')" min="1">
                            <button class="form-control" style="width: 35px;height: 40px; " onclick="qtyPlus('{{$item->rowId}}')" >+</button>
                        </div>
                    </td>
                    <td style="text-align: center;" >
                        <p style="margin-top: 50px;"><span  ><?php echo $item->total; ?></span></p>
                    </td>

                    <td>
                        <a style="margin-top: 50px;" href="#" onclick="removeCart('{{$item->rowId}}')" class="btn btn-sm btn-danger" ><i class="fa fa-trash"></i></a>
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
<div class="responsive-cart">
    <section class="Cart-wrapper my-5"  >
        <div class="nav-container-fluid container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card my-1">
                                <div class="card-body">
                                    <div class="card-summary-heading">
                                        <h3 class="font-18">Order Summary</h3>
                                    </div>
                                    <div class="card-summary-content my-2 mt-4">
                                        <form action="#" method="post">
                                            <div class="card-summary-item my-2">
                                                <span>Subtotal ({{Cart::content()->count()}} items)</span>
                                                <span class="float-right font-15" style="color: #000;">৳ <?php echo Cart::subtotal(); ?></span>
                                            </div>
                                            {{-- <div class="card-summary-item my-2">
                                                <span>Shipping Fee</span>
                                                <span class="float-right font-15" style="color: #000;">৳ 65</span>
                                            </div> --}}
                                            <div class="card-summary-item my-2">
                                                <span>Shipping Fee</span>
                                                <span class="float-right font-15" style="color: #000;">৳ @if ($shippingCharge != null) {{$shippingCharge->value}} @else {{'0'}}  @endif</span>
                                            </div>
                                            <div class="input-group my-3">
                                                <input type="text" class="form-control font-12"
                                                    placeholder="Enter Voucher Code" aria-label="Recipient's username"
                                                    aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-md btn-outline-success m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon2">Apply</button>
                                                </div>
                                            </div>
                                            <div class="card-summary-item my-2">
                                                <span>Total</span>
                                                <span class="float-right font-16" style="color: #f57224;">৳ 
                                                    <?php if($shippingCharge != null) $shipping = (int)$shippingCharge->value; else $shipping = 0; echo $shipping + (int)str_replace(',', '',Cart::total()); ?>
                                                </span>
                                            </div>
                                            <div class="card-summary-item-btn btn-success my-2 text-center mt-3" style="padding: 10px;" >
                                                <a href="{{route('checkout')}}"> <span style=" color: #f1f1f1; " >PROCEED TO CHECKOUT</span> </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card cart-area my-1">
                                <div class="card-body custom-card table-responsive">
                                    <form action="#" method="post">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Subtotal</th>
                                                    <th scope="col"></th>
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
                                                                    <input onchange="updateCart('{{$item->rowId}}')" type="number" class="text-center" name="qty" min="1"  value="<?php echo $item->qty; ?>" />
                                                                    </spanv>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    
                                                    <td class="font-18">Tk.<?php echo $item->total; ?></td>

                                                    <td class="cart-deleted">
                                                        <a href="#" onclick="removeCart('{{$item->rowId}}')" class="btn btn-sm btn-danger" ><i class="fa fa-trash"></i></a>
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
<br><br>
<!---------->
<div class="container cart">
    <div class="row">
        <div class="col-5" style="border: 1px solid black; width: 48%; height: 140px; " >
            <h2 style="font-weight: 800;" >
                Have A Promotional Code?
            </h2>
            <hr>
            <form action="" style="margin-bottom: 20px;" >
                <div class="input-group">
                    <input id="email" type="text" class="form-control" name="email" placeholder="COUPON CODE">
                    <span class="btn input-group-addon" style="border: 1px solid green;background-color: #82d682;" > APPLY COUPON </span>
                </div>
            </form>
        </div>
        <div class="col-2" style="width: 4%;" ></div>
        <div class="col-5" style="border: 1px solid black; width: 48%; " >
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
                        <p style="margin-bottom: 0px;color: rgb(112, 116, 116);">Flat rate:৳ @if ($shippingCharge != null) {{$shippingCharge->value}} @else {{'0'}}  @endif</p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <p style="margin-bottom: 0px;">Total</p>
                    </th>
                    <th style="text-align: right;" >
                        <p style="margin-bottom: 0px;"> <span style="color: #f71008;" > ৳ <?php if($shippingCharge != null) $shipping = (int)$shippingCharge->value; else $shipping = 0; echo $shipping + (int) str_replace(',', '',Cart::total()); ?>  </span> </p> 
                        {{-- <small>(includes <span style="color: #f71008;" >₹26.26</span> Tax)</small> --}}
                    </th>
                </tr>
            </table>
            
            <div class="row" style="text-align: right;margin-bottom: 10px;" >
                <div class="col-6"></div>
                <div class="col-6" style="float: right;">
                    <a href="{{route('checkout')}}" class="btn btn-success" style="border-radius: 50px 0px 0px 50px;" >Proceed to checkout</a>
                    

                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('footer')
    <script>
		function qtyMinus(id) {

			let qty = $("#qty" + id).val();

            let newQty = qty - 1;
        
            if (newQty <= 1) {

                $("#qty" + id).val(1);

            } else {
        
                $("#qty" + id).val(newQty);
            }

            $.ajaxSetup({
    
                headers: {'X-CSRF-Token' : '{{csrf_token()}}'}
        
            });

            var sendqty = $("#qty" + id).val();

            var url = '{{route("carts.update")}}';

            $.ajax({

                url: url,
                method: 'POST',
                data: {'row_id': id, 'qty': sendqty},

                success: function(data2){

                        Swal.fire({

                            position: 'top-end',
                            icon: 'success',
                            title: 'Cart Updated Successfully!',
                            showConfirmButton: false,
                            timer: 1500
                        });

                        location.reload(); 
                    
                },

                error: function(error) {

                    console.log(error);
                }


            });


		}

		function qtyPlus(id) {

			let qty = $("#qty" + id).val();

            let newQty = parseInt(qty) + 1;
        
            $("#qty" + id).val(newQty);

            $.ajaxSetup({
    
                headers: {'X-CSRF-Token' : '{{csrf_token()}}'}
        
            });

            var url = '{{route("carts.update")}}';

            $.ajax({

                url: url,
                method: 'POST',
                data: {'row_id': id, 'qty': newQty},

                success: function(data2){

                        Swal.fire({

                            position: 'top-end',
                            icon: 'success',
                            title: 'Cart Updated Successfully!',
                            showConfirmButton: false,
                            timer: 1500
                        });

                        location.reload(); 
                    
                },

                error: function(error) {

                    console.log(error);
                }


            });
            
		}

        function updateCart(rowId) {

            event.preventDefault();

            $.ajaxSetup({
    
                headers: {'X-CSRF-Token' : '{{csrf_token()}}'}
        
            });

            var qty = $('#qty' + rowId).val();

            var url = '{{route("carts.update")}}';

            $.ajax({

                url: url,
                method: 'POST',
                data: {'row_id': rowId, 'qty': qty},

                success: function(data2){

                        Swal.fire({

                            position: 'top-end',
                            icon: 'success',
                            title: 'Cart Updated Successfully!',
                            showConfirmButton: false,
                            timer: 1500
                        });

                        location.reload(); 
                    
                },

                error: function(error) {

                    console.log(error);
                }


            });
        }

        function removeCart(rowId) {

            event.preventDefault();

            $.ajaxSetup({
    
                headers: {'X-CSRF-Token' : '{{csrf_token()}}'}
        
            });

            var url = '{{route("carts.delete")}}';

            $.ajax({

                url: url,
                method: 'POST',
                data: {'row_id': rowId,},

                success: function(data2){

                        Swal.fire({

                            position: 'top-end',
                            icon: 'success',
                            title: 'Cart Removed Successfully!',
                            showConfirmButton: false,
                            timer: 1500
                        });

                        location.reload(); 
                    
                },

                error: function(error) {

                    console.log(error);
                }


            });
        }

	</script>
@endsection

