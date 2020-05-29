<div class="row justify-content-center bg-white padding-15px-all margin-10px-bottom">
    <div class="col-12 col-lg-8 last-paragraph-no-margin">
        <h5 class="alt-font text-center text-extra-dark-gray font-weight-600 no-margin-bottom">Directory</h5>
    </div>
</div>
<!-- <div class="row bg-white padding-15px-all margin-10px-bottom">
    <div class="col-12 col-lg-8 last-paragraph-no-margin">
        <p class="alt-font text-black padding-5px-bottom">Search By Deals In</p>
        <div class="tag-cloud">
            <a href="{{ url('directory') }}">All</a>
            <a href="{{ url('directory/Diamond') }}">Diamond</a>
            <a href="{{ url('directory/Gold') }}">Gold</a>
        	<a href="{{ url('directory/Silver') }}">Silver</a>
        </div>
    </div>
</div> -->
<div class="row bg-white padding-15px-all">
    <div class="col-12">
        @foreach($directory as $r)
        <!-- start post item --> 
        <div class="blog-post-content d-flex flex-wrap margin-20px-bottom padding-20px-bottom md-margin-30px-bottom md-padding-30px-bottom text-md-left" style="border-bottom: 1px solid #c4c4c4;">
            <div class="col-12 col-lg-5 blog-image p-0 md-margin-30px-bottom sm-margin-20px-bottom margin-45px-right md-no-margin-right">
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
            <div class="col-12 col-lg-6 blog-text p-0">
                <div class="content margin-20px-bottom md-no-padding-left ">
                    <p class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 d-flex justify-content-between">
                        <span>{{ $r->ms }}</span>
                        <a href="{{url('directory-details/'.$r->id)}}" class="btn btn-black btn-very-small">View</a>
                    </p>
                    <p class="m-0 width-100">
                        <table style="width: 100%; font-size: 14px;">
                            <tr>
                                <th style="width: 40%;">M/S</th>
                                <td style="width: 60%;">{{ $r->ms }}</td>
                            </tr>
                            <tr>
                                <th style="width: 40%;">Type</th>
                                <td style="width: 60%;">
                                    <div class="row">
                                        @foreach(explode(', ', $r->type) as $r1)
                                            <div class="col-md-6" style="display: inline-block; padding-top: 4px;"><span class="text-small text-extra-dark-gray"><span class="bg-deep-pink text-white" style="padding: 3px 5px; border-radius: 4px;">{{ substr($r1, 0, 1) }}</span> {{ $r1 }}</span></div>
                                        @endforeach
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 40%;">Deals in</th>
                                <td style="width: 60%;">{{ $r->deals_in }}</td>
                            </tr>
                             <tr>
                                <th style="width: 40%;">GST</th>
                                <td style="width: 60%;">{{ $r->gst }}</td>
                            </tr>
                            <tr>
                                <th style="width: 40%;">City</th>
                                <td style="width: 60%;">{{ $r->city }}</td>
                            </tr>
                            <!-- <tr>
                                <td colspan="2">
                                    <div class="d-flex justify-content-center margin-20px-top">
                                        <a href="{{url('directory-details/'.$r->id)}}" class="btn btn-deep-pink btn-small width-50">View</a>
                                    </div>    
                                </td>
                            </tr> -->
                        </table>
                    </p>
                </div>
            </div>
        </div>
        <!-- end post item --> 
        @endforeach
    </div>
</div>

 @php 
    $users = DB::table('diretory')->Paginate(15); 
 @endphp
<div class="margin-10px-tb  text-small">
    
<center>{{ $users->links() }}</center></div>
