<div class="row" style="margin-left: 0px; margin-right: 0px;">
                    
                    
                    @foreach ($products as $product)
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="conta12">
                                    <img src="{{asset($product->cover)}}" style="height: 250px; width: 100%; " alt="Avatar" class="image12">
                                    <div class="overlay12">
                                        <div class="text12">
                                            <h6 style="font-weight: bold;" >{{$product->name}}</h6>
                                            <p>{{$product->current_price}}/=</p>
                                            <a href="{{route('front.product', $product->slug)}}" class="btn btn-sm btn-Secondary" style="background-color: #ffffff;" >Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row" style="text-align: left;font-weight: bold;">
                                    <a href="{{route('front.product', $product->slug)}}" style="text-decoration: none;" href="#" style="margin-bottom: 15px;">
                                    {{$product->name}}
                                    </a>
                                </div>
                                <del>
                                <span> @if ($product->previous_price != null) {{$product->previous_price}}/= @endif  </span>
                                </del>
                                &nbsp; &nbsp;
                                <ins><span style="font-size: 20px; font-weight: bold;color: green;margin-left: -17px;text-decoration: none;">{{$product->current_price}}/=</span></ins>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="{{route('front.product', $product->slug)}}" style="text-decoration: none;"><span style="font-size: 10px;"><i class="fa fa-check-circle" style="font-size: 10px;"></i> &nbsp; Buy Now </span></a>
                                    </div>
                                    <div class="col-6" style="text-align: right;">
                                        <a href="{{route('front.product', $product->slug)}}" style="text-decoration: none;"><span style="font-size: 10px;"> <i class="fa fa-eye" style="font-size: 10px;"></i>&nbsp; Quick View </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    </div>