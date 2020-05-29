<div class="row padding-15px-tb">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="swiper-full-screen swiper-container white-move">
                    <div class="swiper-wrapper">
                        @if($product->image1)
                            <div class="swiper-slide"><a href="#"><img src="{{ asset($product->image1)}} " style="width: 100%;"></a></div>
                        @endif           
                        @if($product->image2)      
                            <div class="swiper-slide"><a href="#"><img src="{{ asset($product->image2) }}" style="width: 100%;"></a></div>                 
                        @endif           
                        @if($product->image3)
                            <div class="swiper-slide"><a href="#"><img src="{{ asset($product->image3) }}" style="width: 100%;"></a></div>                 
                        @endif           
                        @if($product->image4)
                            <div class="swiper-slide"><a href="#"><img src="{{ asset($product->image4) }}" style="width: 100%;"></a></div>                 
                        @endif           
                        @if($product->image5)
                            <div class="swiper-slide"><a href="#"><img src="{{ asset($product->image5) }}" style="width: 100%;"></a></div>                 
                        @endif
                    </div>  
                    <div class="swiper-button-next swiper-button-black-highlight"></div>
                    <div class="swiper-button-prev swiper-button-black-highlight"></div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div>
                    <div>
                        <h1 class="alt-font text-black font-weight-600 text-uppercase" style="font-size: 20px; line-height: 35px;">{{ $product->title }}</h1>
                        <?php
                            $user_data = DB::table('users')->where('id', $product->vendor_id)->first(); 
                        ?>
                        <div> 
                            <img  style="width:70px; height:60px; border-radius:40px; float:left;" src="{{ asset($user_data->image) }}" alt="image"><p style="padding-left:80px; padding-top:10px;">{{ $user_data->name }}</p>
                        </div>   
                        <span style="display: block;">Price: ₹{{ $product->price }}</span>
                        <ul class="p-0 list-style-3 m-2">
                            @foreach(explode(',', $product->categories) as $r)
                                <li style="margin-bottom: 0px; font-size: 12px;">{{ $r }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <a href="{{ url('place-order/'.$product->id) }}" class="btn btn-deep-pink bg-blue btn-sm width-50">Buy Now</a><br> <br>
                    <div style="width: 15%;  border-radius: 6px;  font-size: 13px; background-color:#bd9431; height: 27px; display: inline-block; zoom: 1; color: white; padding-top: 3px !important; text-align: center; /* line-height: 23;">
                        Rating:{{ $product->rating }}
                    </div>  
                    <p style="width: 100%; font-size:16px; color:#000033;">Ratings:</p>
                    <form action="{{ url('shop-rating') }}" method="post" style="margin-top:-10px;">
                       @csrf 
                       <fieldset class="rating"> 
                            <input type="hidden" name="id" value="{{$product->id}}">

                            <input type="submit" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label> 
                            <input type="submit" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label> 
                            <input type="submit" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label> 
                            <input type="submit" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label> 
                            <input type="submit" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label> 
                        </fieldset> 
                    </form>
                </div>
            </div>
            
            <div class="col-12 padding-20px-all text-black">
                <h6 class="alt-font text-black font-weight-600 text-uppercase" style="font-size: 18px; line-height: 35px;">Description</h6>
               <span style="text-align:justify;">{!! $product->description !!}</span>
            </div>

            <style>
                table {
                  font-family: arial, sans-serif;
                  border-collapse:;
                  width: 100%;
                }

                td, th {
                  font-family: calibri, sans-serif; 
                  border: 1px solid #dddddd;
                  text-align: left;
                  padding: 8px;
                } 
            </style>
            <div class="col-12 col-lg-12 blog-text p-0">
                <div class="padding-20px-all content margin-20px-bottom md-no-padding-left  "> 
                    <table style="width:100%; font-size: 14px; border:2px solid #dddddd;">
                    
                    @if(is_null($product->product_name) && is_null($product->product_style_no) && is_null($product->product_width) && is_null($product->product_height)&& is_null($product->product_length))
                    @else
                    <tr>
                        <th colspan="2" style="color:#000033; font-size:13px;">Product Details:</th> 
                    </tr>
                    @endif
                    
                    @if(is_null($product->product_name)) 
                    @else 
                        <tr> 
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Product Name</th>
                            <td style="width:45%; color:#000033; font-size:13px;">{{$product->product_name }}</td>
                        </tr>
                    @endif 

                    @if(is_null($product->product_style_no))  
                    @else 
                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Product Style no.</th>
                            <td style="width:45%; color:#000033; font-size:13px;">{{$product->product_style_no }}</td>
                        </tr> 
                    @endif 

                    @if(is_null($product->product_width))  
                    @else 
                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Product Width</th>
                            <td style="width:45%; color:#000033; font-size:13px;"> {{$product->product_width }} </td>
                        </tr> 
                    @endif 

                    @if(is_null($product->product_height))  
                    @else 
                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Product height</th>
                            <td style="width:45%; color:#000033; font-size:13px;">{{$product->product_height }}</td>
                        </tr> 
                    @endif 

                    @if(is_null($product->product_length))  
                    @else 
                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Product Length</th>
                            <td style="width:45%; color:#000033; font-size:13px;">{{$product->product_length }} </td>
                        </tr> 
                    @endif 

                    @if(is_null($product->metal_name) && is_null($product->metal_purity) && is_null($product->metal_weight))
                    @else

                        <tr>
                            <th colspan="2" style="color:#000033; font-size:13px;">Metals Details:</th>
                        </tr>
                    @endif

                    @if(is_null($product->metal_name))  
                    @else  
                        <tr> 
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Metals</th>
                            <td style="width:45%; color:#000033; font-size:13px;">{{$product->metal_name }}</td>
                        </tr>
                    @endif

                    @if(is_null($product->metal_purity)) 
                    @else  
                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Metals Purity</th>
                            <td style="width:45%; color:#000033; font-size:13px;">{{$product->metal_purity }}</td>
                        </tr>
                    @endif

                    @if(is_null($product->metal_weight)) 
                    @else 
                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Metals Wt. approx</th>
                            <td style="width:45%; color:#000033; font-size:13px;"> {{$product->metal_weight }} </td>
                        </tr>   
                    @endif

                    @if(is_null($product->diamond_total_no) && is_null($product->diamond_total_wt) && is_null($product->diamond_clarity) && is_null($product->diamond_color) && is_null($product->diamond_shape) && is_null($product->diamond_setting))
                    @else

                        <tr>
                            <th colspan="2" style="color:#000033; font-size:13px;">Diamond Details:</th>
                        </tr> 
                    @endif

                    @if(is_null($product->diamond_total_no))  
                    @else  
                        <tr> 
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Total no. of Diamonds</th>
                            <td style="width:45%; color:#000033; font-size:13px;">{{$product->diamond_total_no}}</td>
                        </tr> 
                    @endif

                    @if(is_null($product->diamond_total_wt))  
                    @else 

                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Total wt. approx</th>
                            <td style="width:45%; color:#000033; font-size:13px;">{{$product->diamond_total_wt }}</td>
                        </tr>
                    @endif

                    @if(is_null($product->diamond_clarity)) 
                    @else 
                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Clarity</th>
                            <td style="width:45%; color:#000033; font-size:13px;"> {{$product->diamond_clarity }} </td>
                        </tr>
                    @endif  

                    @if(is_null($product->diamond_color))  
                    @else  
                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Colour</th>
                            <td style="width:45%; color:#000033; font-size:13px;">{{$product->diamond_color }} </td>
                        </tr>
                    @endif  

                    @if(is_null($product->diamond_shape))  
                    @else 
                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Shapes</th>
                            <td style="width:45%; color:#000033; font-size:13px;">{{$product->diamond_shape }} </td>
                        </tr>
                    @endif 

                    @if(is_null($product->diamond_setting)) 
                    @else 
                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Settings</th>
                            <td style="width:45%; color:#000033; font-size:13px;">{{$product->diamond_setting }} </td>
                        </tr>
                    @endif 

                    @if(is_null($product->gemstone_total_no) && is_null($product->gemstone_type) && is_null($product->gemstone_color) && is_null($product->gemstone_shape) && is_null($product->gemstone_weight) && is_null($product->gemstone_setting))
                    @else

                        <tr>
                           <th colspan="2" style="color:#000033; font-size:13px;">Gemstone Details:</th>
                        </tr>
                    @endif

                    @if(is_null($product->gemstone_total_no))  
                    @else  
                        <tr> 
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Total no. of Gemstone</th>
                            <td style="width:45%; color:#000033; font-size:13px;">{{$product->gemstone_total_no }}</td>
                        </tr>
                    @endif  

                    @if(is_null($product->gemstone_type)) 
                    @else 
                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Gemstone Type</th>
                            <td style="width:45%; color:#000033; font-size:13px;">{{$product->gemstone_type }}</td>
                        </tr>
                    @endif

                    @if(is_null($product->gemstone_color)) 
                    @else 
                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Colour</th>
                           <td style="width:45%; color:#000033; font-size:13px;">{{$product->gemstone_color }}</td>
                        </tr>
                    @endif 

                    @if(is_null($product->gemstone_shape))  
                    @else  
                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Shapes</th>
                            <td style="width:45%; color:#000033; font-size:13px;">{{$product->gemstone_shape }}</td>
                        </tr>
                    @endif 

                    @if(is_null($product->gemstone_weight))  
                    @else  
                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Weights</th>
                           <td style="width:45%; color:#000033; font-size:13px;">{{$product->gemstone_weight  }}</td>
                        </tr> 
                    @endif 

                    @if(is_null($product->gemstone_setting))  
                    @else  
                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Settings Type</th>
                           <td style="width:45%; color:#000033; font-size:13px;">{{$product->gemstone_setting  }}</td>
                        </tr> 
                    @endif 


                    @if(is_null($product->price_breakup_metal) && is_null($product->price_breakup_diamond) && is_null($product->price_breakup_gemstone) && is_null($product->price_breakup_making) && is_null($product->price_breakup_gst) && is_null($product->price_breakup_discount)&& is_null($product->price_breakup_total)&& is_null($product->price_breakup_scheme))
                    @else 

                        <tr>
                            <th colspan="2" style="color:#000033; font-size:13px;">Price Breakup Details:</th>
                        </tr>
                    @endif

                    @if(is_null($product->price_breakup_metal))  
                    @else  
                        <tr> 
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Metal</th>
                            <td style="width:45%; color:#000033; font-size:13px;">{{$product->price_breakup_metal  }}</td>
                        </tr>
                    @endif  

                    @if(is_null($product->price_breakup_diamond))  
                    @else  
                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Diamond</th>
                            <td style="width:45%; color:#000033; font-size:14px;">{{$product->price_breakup_diamond}}</td>
                        </tr>
                    @endif

                    @if(is_null($product->price_breakup_gemstone)) 
                    @else 
                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Gemstone</th>
                            <td style="width:45%; color:#000033; font-size:14px;"> {{$product->price_breakup_gemstone }} </td>
                        </tr>
                    @endif   

                    @if(is_null($product->price_breakup_making))  
                    @else  
                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Making</th>
                             <td style="width:45%; color:#000033; font-size:14px;"> {{$product->price_breakup_making }} </td>
                        </tr>
                    @endif  

                    @if(is_null($product->price_breakup_gst))  
                    @else  
                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">GST</th>
                            <td style="width:45%; color:#000033; font-size:14px;"> {{$product->price_breakup_gst}} </td>
                        </tr> 
                    @endif 

                    @if(is_null($product->price_breakup_discount))  
                    @else  
                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Discount</th>
                            <td style="width:45%; color:#000033; font-size:14px;"> {{$product->price_breakup_discount }} </td>
                        </tr> 
                    @endif   


                    @if(is_null($product->price_breakup_scheme))  
                    @else 
 
                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Scheme</th>
                            <td style="width:45%; color:#000033; font-size:14px;">{{$product->price_breakup_scheme}}</td>
                        </tr> 
                    @endif  

                    @if(is_null($product->price_breakup_total))  
                    @else  
                        <tr>
                            <th style="width: 45%; font-size:12px; color: #bd9431;">Total</th>
                            <td style="width:45%; color:#000033; font-size:14px;">{{$product->price_breakup_total }}</td>
                        </tr>  
                    @endif
                    
                    </table> 
                </div>
            </div> 


        </div>
    </div>
</div>