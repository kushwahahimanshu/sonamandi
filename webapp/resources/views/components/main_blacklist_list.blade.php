<div class="row justify-content-center bg-white padding-15px-all margin-10px-bottom">
    <div class="col-12 col-lg-8 last-paragraph-no-margin">
        <h5 class="alt-font text-center text-extra-dark-gray font-weight-600 no-margin-bottom">CreditScore</h5>
    </div>
</div>
<!-- <div class="row bg-white padding-15px-all margin-10px-bottom">
    <div class="col-12 col-lg-8 last-paragraph-no-margin">
        <p class="alt-font text-black padding-5px-bottom">Search By</p>
        <div class="tag-cloud">
            <a href="{{ url('blacklist') }}">All</a>
            <a href="{{ url('blacklist/User') }}">User</a>
            <a href="{{ url('blacklist/Buyer') }}">Buyer</a>
            <a href="{{ url('blacklist/Retailer') }}">Retailer</a>
            <a href="{{ url('blacklist/Wholesaler') }}">Wholesaler</a>
        	<a href="{{ url('blacklist/Karigar') }}">Karigar</a>
        </div>
    </div>
</div> -->
<div class="row bg-white padding-15px-all">
    <div class="col-12">
        @foreach($blacklist as $r)
        <!-- start post item --> 
        <div class="blog-post-content d-flex align-items-center flex-wrap margin-20px-bottom padding-20px-bottom md-margin-30px-bottom md-padding-30px-bottom text-center text-md-left" style="border-bottom: 1px solid #c4c4c4;">
            <div class="col-12 col-lg-5 blog-image p-0 md-margin-30px-bottom sm-margin-20px-bottom margin-45px-right md-no-margin-right">
                <div class="swiper-full-screen swiper-container white-move">
                    <div class="swiper-wrapper">
                        @if($r->image)
                            <div class="swiper-slide"><a href="#"><img src="{{ asset($r->image) }}" style="width: 100%;"></a></div>
                        @endif           
                        @if($r->image1)      
                            <div class="swiper-slide"><a href="#"><img src="{{ asset($r->image1) }}" style="width: 100%;"></a></div>                 
                        @endif           
                        @if($r->image2)
                            <div class="swiper-slide"><a href="#"><img src="{{ asset($r->image2) }}" style="width: 100%;"></a></div>                 
                        @endif           
                    </div>  
                    <div class="swiper-button-next swiper-button-black-highlight"></div>
                    <div class="swiper-button-prev swiper-button-black-highlight"></div>
                </div>
            </div>
            <div class="col-12 col-lg-6 blog-text p-0">
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
                            <tr>
                                <th style="width: 40%;">Phone</th>
                                <td style="width: 60%;">{{ $r->phone }}</td>
                            </tr>
                            <tr>
                                <th style="width: 40%;">Type</th>
                                <td style="width: 60%;">{{ $r->type }}</td>
                            </tr>
                            <tr>
                                <th style="width: 40%;">Location/Address</th>
                                <td style="width: 60%;">{{ $r->location }}</td>
                            </tr>
                            <tr>
                                <th style="width: 40%;">City</th>
                                <td style="width: 60%;">{{ $r->city }}</td>
                            </tr>
                            <tr>
                                <th style="width: 40%;">Reason</th>
                                <td style="width: 60%;">{{ $r->reason }}</td>
                            </tr>
                        </table>
                    </p>
                </div>
            </div>
        </div>
        <!-- end post item --> 
        @endforeach
    </div>
</div>
<div class="margin-10px-tb  text-small">
    
<center>{{ $blacklist->links() }}</center></div>
