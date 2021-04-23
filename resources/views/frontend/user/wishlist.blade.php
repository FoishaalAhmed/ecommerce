

@extends('layouts.app')
@section('title', 'Carts')
@section('content')

<div class="container-fluid" style="margin-bottom: 20px ;">
      <div class="dtl-2nd-nav">
        <div class="row" style="background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209));">
          <div class="container">
            <div class="row" style="text-align: center; padding-top: 10px; padding-bottom: 10px;margin: auto; ">
              <div class="col-12">
                <a  style="text-decoration: none;color: black;">Wishlist</a>
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
              <span><i class="fa fa-home"></i></span>  You Have {{sizeof($wishlists)}} Item's in Your Wishlist
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
                                <th style=" width:15%"> Image</th>
                                <th style=" width:55%"> Product</th>
                                <th style="text-align: center; width:15%" > Price </th>
                                <th style="text-align: center; width:15%" > Status </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                                // echo "<pre>";
                                //     print_r(Cart::content());
                                // echo "</pre>";
                            @endphp
                            @foreach ($wishlists as $key => $item)
                          <tr>
                            <td scope="row">
                                <img src="{{asset($item->cover)}}" style="height: 120px; float: left;padding-right: 20px; " alt="">
                            </td>
                            <td class="font-18">
                              <h6 class="font-14 mb-0"> {{$item->name}} </h6>
                              
                            </td>
                            <td class="font-18">TK. {{$item->current_price}}
                            </td>
                            
                            <td class="cart-deleted"> <a href="#" class="btn btn-sm btn-danger" onclick="removeWishlist({{$item->id}})"><i class="far fa-trash-alt"></i></a></td>
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

@section('footer')

    <script>
      function removeWishlist(id) {

            event.preventDefault();

            $.ajaxSetup({
    
                headers: {'X-CSRF-Token' : '{{csrf_token()}}'}
        
            });

            var url = '{{route("wishlists.delete")}}';

            $.ajax({

                url: url,
                method: 'POST',
                data: {'id': id,},

                success: function(data2){

                        Swal.fire({

                            position: 'top-end',
                            icon: 'success',
                            title: 'Wishlist Removed Successfully!',
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

