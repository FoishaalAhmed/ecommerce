

@extends('layouts.app')
@section('title', 'Carts')
@section('content')
<!---MAIN CONTENT-->
    <!------------------------------------------------------------------------>
    <div class="container-fluid" style="margin-bottom: 20px ;">
      <div class="dtl-2nd-nav">
        <div class="row" style="background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209));">
          <div class="container">
            <div class="row" style="text-align: center; padding-top: 10px; padding-bottom: 10px;margin: auto; ">
              <div class="col-12">
                <a href="{{URL::to('/')}}" style="text-decoration: none;color: black;">Home</a> /
                <a style="text-decoration: none;color: black;">Shopping Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="Cart-wrapper my-5">
      <div class="nav-container-fluid container-fluid">
        <div class="row" style="border-top: 1px solid black; border-bottom: 1px solid black;margin: 0px; ">
          <div class="col-md-9 col-xm3" style="padding-top: 10px; padding-bottom: 10px; ">
            <p style="margin-bottom: 0px;">
              <span><i class="fa fa-home"></i></span> You Have {{Cart::content()->count()}} Item In Your Cart
            </p>
          </div>
          <div class="col-md-3 col-xm3" style="padding-top: 10px; padding-bottom: 10px; text-align: right; ">
            <a href="{{URL::to('/')}}" style="text-decoration: none;">
              <span><i class="fa fa-home"></i></span> &nbsp; Continue shopping
            </a>
          </div>
        </div>
        <div class="row">
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
                                <th style="text-align: center; width:10%" > Action </th>
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
                                <p> <?php echo ($item->options->has('size') ? 'Size: ' . $item->options->size : ''); ?>, <?php echo ($item->options->has('color') ? 'Color: ' . $item->options->color : ''); ?></p>
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
                            <td class="cart-deleted">
                              <a href="#" class="btn btn-sm btn-danger" onclick="removeCart('{{$item->rowId}}')"><i class="far fa-trash-alt"></i></a>
                            </td>
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
                        <div class="card-summary-item-btn my-2 text-center mt-3">
                          <a href="{{route('checkout')}}" style="text-decoration: none; color: whitesmoke; background-color: orange;padding: 5px 10px; ">PROCEED
                            TO CHECKOUT</a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!------------------------------------------------------------------------>
    <hr>
    <!---MAIN CONTENT-->


@endsection

@section('footer')
    <script>

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

