<style>
    .sonam{
        position: fixed;
        bottom: 20%;
    }
    .sonam a{
        margin-left: 20px; 
    }
    
</style>
<div id="fb-root"></div> 
<script async defer crossorigin="anonymous" src="{{ asset('https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0') }}"></script> 
<!-- start row -->  
<div class="row bg-white padding-15px-all">
    <!-- start col-12 --> 
    <div class="col-12"> 
        <!-- start post item --> 
        <div class="blog-post-content d-flex align-items-center flex-wrap margin-20px-bottom padding-20px-bottom md-margin-30px-bottom md-padding-30px-bottom text-md-left" style="border-bottom: 1px solid #c4c4c4;">
            <!-- start image slider -->
             
            <div  id="about" class="col-12 col-lg-5 blog-image p-0 md-margin-30px-bottom sm-margin-20px-bottom margin-45px-right md-no-margin-right">
                <div class="swiper-full-screen swiper-container white-move">
                    <div class="swiper-wrapper">
                        @if($r->image1)
                            <div class="swiper-slide"><a href="#"><img src="{{ asset($r->image1) }}" style="width: 100%;"></a></div>
                        @endif           
                        @if($r->image2)      
                            <div class="swiper-slide"><a href="#"><img src="{{ asset($r->image2) }}" style="width: 100%;"></a></div>                 
                        @endif           
                        @if($r->image3)
                            <div class="swiper-slide"><a href="#"><img src="{{ asset($r->image3) }}" style="width: 100%;"></a></div>                 
                        @endif           
                        @if($r->image4)
                            <div class="swiper-slide"><a href="#"><img src="{{ asset($r->image4) }}" style="width: 100%;"></a></div>                 
                        @endif           
                        @if($r->image5)
                            <div class="swiper-slide"><a href="#"><img src="{{ asset($r->image5) }}" style="width: 100%;"></a></div>                 
                        @endif
                    </div>  
                    <div class="swiper-button-next swiper-button-black-highlight"></div>
                    <div class="swiper-button-prev swiper-button-black-highlight"></div>
                </div>
            </div>
            <!-- end image slider --> 
 
            <!-- start detail slider -->   
            <div  id="about" class="col-12 col-lg-6 blog-text p-0">
                <div class="content margin-20px-bottom md-no-padding-left ">
                    <p class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 d-inline-block">{{ $r->ms }}</p>
                    <p class="m-0 width-100"> 
                        <table style="width: 100%; font-size: 14px;"> 
                            <tr> 
                                <th style="width: 40%;">Full Name</th>
                                <td style="width: 60%;">{{ $r->name }}</td>
                            </tr>
                            <tr>
                                <th style="width: 40%;">M/S</th>
                                <td style="width: 60%;">{{ $r->ms }}</td>
                            </tr> 
                            <!-- <tr>
                                <th style="width: 40%;">Deals In</th>
                                <td style="width: 60%;">
                                    <div class="row">
                                        @foreach(explode(', ', $r->deals_in) as $r1)
                                            <div class="col-md-6" style="display: inline-block; padding-top:4px;"><span class="text-small text-extra-dark-gray"><span class="bg-deep-pink text-white" style="padding: 3px 5px; border-radius: 4px;">{{ substr($r1, 0, 1) }}</span> {{ $r1 }}</span></div>
                                        @endforeach
                                    </div>
                                </td>
                            </tr> -->
                            <tr>
                                <th style="width: 40%;">Type</th>
                                <td style="width: 60%;">
                                    <div class="row">
                                        @foreach(explode(', ', $r->type) as $r1)
                                            <div class="col-md-6" style="display: inline-block; padding-top:4px;"><span class="text-small text-extra-dark-gray"><span class="bg-deep-pink text-white" style="padding: 3px 5px; border-radius: 4px;">{{ substr($r1, 0, 1) }}</span> {{ $r1 }}</span></div>
                                        @endforeach
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 40%;">Deals In</th>
                                <td style="width: 60%;">{{ $r->deals_in }}</td>
                            </tr>
                            <tr>
                                <th style="width: 40%;">Store Timing</th>
                                <td style="width: 60%;">{{ $r->timing }}</td>
                            </tr>
                            <tr>
                                <th style="width: 40%;">Open Days</th>
                                <td style="width: 60%;">{{ $r->working_days }}</td>
                            </tr>
                            @if($r->website)
                                <tr>
                                    <th style="width: 40%;">Website</th>
                                    <td style="width: 60%;">{{ $r->website }}</td>
                                </tr>
                            @endif
                            <tr>
                                <th style="width: 40%;">Address</th>
                                <td style="width: 60%;">{{ $r->address }}</td>
                            </tr>
                            <tr>
                                <th style="width: 40%;">City</th>
                                <td style="width: 60%;">{{ $r->city }}</td>
                            </tr>
                            <tr>
                                <th style="width: 40%;">Speciality</th>
                                <td style="width: 60%;">
                                    <div class="row">
                                        @if($r->gold_purchase == 'Yes')
                                            <div class="col-md-6" style="display: inline-block;"><span class="text-small text-extra-dark-gray"><span class="bg-deep-pink text-white" style="padding: 3px 5px; border-radius: 4px;"><i class="fa fa-check"></i></span> Gold Purchase</span></div>
                                        @endif
                                        @if($r->buy_back == 'Yes')
                                            <div class="col-md-6" style="display: inline-block;"><span class="text-small text-extra-dark-gray"><span class="bg-deep-pink text-white" style="padding: 3px 5px; border-radius: 4px;"><i class="fa fa-check"></i></span> Buy Back</span></div>
                                        @endif
                                        @if($r->gst == 'GST')
                                            <div class="col-md-6" style="display: inline-block;"><span class="text-small text-extra-dark-gray"><span class="bg-deep-pink text-white" style="padding: 3px 5px; border-radius: 4px;"><i class="fa fa-check"></i></span> GST</span></div>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="2" style="width: 100%; padding: 10px 0px;">
                                    <div class="fb-like" data-href="http://www.sonamandi.com/directory-details/{{ $r->id }}" data-width="" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
                                    <div style="width: 15%;  border-radius: 6px;  font-size: 13px; background-color:#365899; height: 27px; display: inline-block; zoom: 1; color: white; padding-top: 3px !important; text-align: center; /* line-height: 23;">Rating:{{ $r->rating }}</div>
                                </th>

                            </tr>
                        </table>
                    </p>
                </div>
            </div>   
        
            <!-- end detail slider --> 

            <!-- start get qutation -->  
            <div id="about" class="col-12 col-lg-12 blog-text p-0">
                <div class="content margin-20px-bottom md-no-padding-left ">
                    <div class="m-0 width-100 d-flex justify-content-center"> 
                        <a href="#contact-form" class="btn btn-medium  btn-deep-pink popup-with-form">Get Quotation</a>
                        <!-- start form -->
                        <form id="contact-form" action="{{url('quotationdirectory')}}" method="post" class="white-popup-block mfp-hide col-lg-3 p-0 mx-auto">
                            {{ csrf_field() }}
                            <div class="padding-fifteen-all bg-white border-radius-6 lg-padding-seven-all">
                                <div class="text-extra-dark-gray alt-font text-large font-weight-600 margin-30px-bottom">Quotation's Form</div> 
                                <div> 
                                    <input type="text" name="name" id="name" placeholder="Name*" class="input-bg" required>
                                    <input type="text" name="phone_no" id="phone_no" placeholder="phone_no*" class="input-bg" required>
                                    <input type="hidden" name="directory_id" id="directory_id" value="{{ $r->id }}"  class="input-bg">

                                    <button   type="submit" class="btn btn-small border-radius-4 btn-black">send quotation</button>
                                </div>
                            </div>
                        </form><br>
                        <!-- end form --> 
                    </div>
                </div>
            </div> 
            <!-- end get qutation -->  

            <!-- start Catalogue slider -->  
            <div  id="catalogue" class="col-12 col-lg-12 blog-text p-0"> 
                <table style="width: 100%; font-size: 14px;">
                    <tr>
                        <th style="width: 100%; vertical-align: top;">Catalogue Image:</th>
                    </tr> 
                </table>
                <div class="swiper-slider-clients swiper-container black-move wow fadeIn">
                    <div class="swiper-wrapper">
                        @foreach($directoryslider as $r1)
                            <div class="swiper-slide padding-10px-all">
                                <div class="padding-10px-all">
                                    <a href="{{ url('catalogueimage',$r1->id) }}">
                                        <img src="{{ asset($r1->image) }}" style="width: 100%;">
                                    </a>
                                </div>
                            </div> 
                        @endforeach
                    </div>

                </div>
            </div>  
            <!-- end Catalogue slider -->   

            <!-- start description -->  
            <div id="description" class="col-12 col-lg-12 blog-text p-0" style="border-bottom: 1px solid #e9ebee;">
                <div class="content margin-20px-bottom md-no-padding-left ">
                    <div class="m-0 width-100">
                        <table style="width: 100%; font-size: 14px;">
                            <tr>
                                <th style="width: 100%; vertical-align: top;">Store Description</th>
                            </tr>
                            <tr>
                                <td style="width: 100%;">{!! $r->description !!}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>   
            <!-- end description -->  

            <!-- start rating -->   
            <div id="description" class="col-12 col-lg-12 blog-text p-0">
                <div class="content margin-20px-bottom md-no-padding-left ">
                    <div class="m-0 width-100">
                        <table style="width: 100%; font-size: 14px;">
                            <tr>
                                <th style="width: 100%; vertical-align: top;">Ratings:</th>
                            </tr> 
                        </table>  
                        <form action="{{ url('rating') }}" method="post">
                            @csrf 
                           <fieldset class="rating"> 
                                <input type="hidden" name="id" value="{{$r->id}}">
                                <input type="submit" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label> 
                                <input type="submit" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label> 
                                <input type="submit" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label> 
                                <input type="submit" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label> 
                                <input type="submit" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label> 
                            </fieldset> 
                        </form> 
                    </div>
                </div>
            </div> 
            <!-- end rating -->  

            <!-- start comment box -->  
            <div id="reviews" class="col-12 col-lg-12 blog-text p-0" id="tab4">
                <div class="content margin-20px-bottom md-no-padding-left ">
                    <div class="m-0 width-100 d-flex justify-content-center">
                        <div class="fb-comments" data-href="http://www.sonamandi.com/directory-details/{{ $r->id }}" data-width="100%" data-numposts="20"></div>
                    </div>
                </div>
            </div>  
            <!-- end comment box -->  
        </div>
        <!-- end post item -->  
        <div class="d-none d-md-block d-flex justify-content-center" style="width: 60%; margin-left:22px; position: fixed; bottom: 0px; left: 50%; transform: translateX(-50%); z-index: 9999;">
            <div style="background-color: #000033; border-radius: 10px; padding: 10px; text-align: center;">
             <a href="#about"><button class="btn btn-very-small  btn-deep-pink" style="border-radius:10px; margin-right:10px; width:110px;" >About</button></a>
             <a href="#catalogue"><button class="btn btn-very-small  btn-deep-pink" style="border-radius:10px; margin-right:10px; width:150px;"  >Catalogue</button></a>
             <a href="#description"><button class="btn btn-very-small  btn-deep-pink" style="border-radius:10px; margin-right:10px; width:150px;" >Description</button></a>
            <!--  <a href="#map"><button class="btn btn-very-small  btn-deep-pink" style="border-radius:10px; margin-right:10px; width:180px;" >Find Us On Map</button></a> -->
             <a href="#reviews"><button class="btn btn-very-small  btn-deep-pink" style="border-radius:10px; margin-right:10px; width:110px;" >Reviews</button></a> 
            </div>
        </div> 
    </div> 
    <!-- end col-12 -->  
</div>
<!-- end row -->  
 