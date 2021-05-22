@extends('layouts.app')
@section('title', 'Carts')
@section('content')
    <!---MAIN CONTENT-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 offset-md-1">
                <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th class="text-xs-center">Price</th>
                            <th class="text-xs-center">Total</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach (Cart::content() as $key => $item)
                        <tr>
                            <td class="col-sm-8 col-md-6">
                                <div class="media">
                                    <a class="thumbnail float-xs-left" href="#"> <img class="media-object"
                                            src="{{asset($item->options->image)}}"
                                            style="width: 72px; height: 72px;border: 1px solid rgb(84, 84, 87);padding: 5px;">
                                    </a>
                                    <div class="media-body" style="padding-left: 15px;">
                                        <h4 class="media-heading"><a href="javascript:;">{{$item->name}}</a></h4>
                                        @if ($item->options->has('size'))
                                       
                                        <h5 class="media-heading"> Size:  <a href="javascript:;"><?php echo $item->options->size; ?></a></h5>
                                        @endif
                                        @if ($item->options->has('color'))
                                        <span>Color: </span><span class="text-success"><strong><?php echo $item->options->color; ?></strong></span>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td class="col-sm-1 col-md-1" style="text-align: center">
                                <input type="email" class="form-control" value="<?php echo $item->qty; ?>" onchange="updateCart('{{$item->rowId}}')" id="qty{{$item->rowId}}">
                            </td>
                            <td class="col-sm-1 col-md-1 text-xs-center"><strong>৳<?php echo $item->price; ?></strong></td>
                            <td class="col-sm-1 col-md-1 text-xs-center"><strong>৳<?php echo $item->total; ?></strong></td>
                            <td class="col-sm-1 col-md-1">
                                <button type="button" class="btn btn-danger" onclick="removeCart('{{$item->rowId}}')">
                                    <i class="fas fa-times"></i> Remove
                                </button>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td class="text-xs-right">
                                <h5><strong>৳ <?php echo Cart::subtotal(); ?></strong></h5>
                            </td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <h3>Total</h3>
                            </td>
                            <td class="text-xs-right">
                                <h4><strong>৳ </strong>{{ Cart::total() }}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <a type="button" class="btn btn-secondary" href="{{ URL::to('/') }}">
                                    <span> <i class="fas fa-shopping-cart"></i> </span> Continue Shopping
                                </a>
                            </td>
                            <td>
                                <a type="button" class="btn btn-success" href="{{ route('checkout') }}">
                                    Checkout <i class="fas fa-play"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!---MAIN CONTENT-->
@endsection

@section('footer')
    <script>
        function updateCart(rowId) {

            event.preventDefault();

            $.ajaxSetup({

                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}'
                }

            });

            var qty = $('#qty' + rowId).val();

            var url = '{{ route('carts.update') }}';

            $.ajax({

                url: url,
                method: 'POST',
                data: {
                    'row_id': rowId,
                    'qty': qty
                },

                success: function(data2) {

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

                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}'
                }

            });

            var url = '{{ route('carts.delete') }}';

            $.ajax({

                url: url,
                method: 'POST',
                data: {
                    'row_id': rowId,
                },

                success: function(data2) {

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
