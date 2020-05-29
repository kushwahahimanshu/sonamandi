<div class="row margin-15px-top" style="background-color: #000033;">
    <div class="col-6 ">
        <!-- start page title -->
        <h5 class="alt-font text-white font-weight-600 text-uppercase padding-15px-tb no-margin">Shop Jewellery</h5>
        <!-- end page title -->
    </div>
    <div class="col-6 margin-15px-top">
        <!-- start page title -->
        <a href="{{ url('shop') }}" class="btn btn-white btn-small margin-5px-lr" style="float: right;">Goto Shop</a>
        <!-- end page title -->
    </div>
</div>
<div class="row bg-white">
	<div class="col-md-12 padding-15px-all">
		<div class="swiper-slider-clients swiper-container black-move wow fadeIn">
            <div class="swiper-wrapper">
                @foreach($shop as $r)
	                <div class="swiper-slide padding-10px-all">
	                	<div class="padding-10px-all">
                            <div>
                                <a href="{{ url('view-product/'.$r->id) }}" title="{{ $r->title }}">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="{{ asset($r->image1) }}" alt="" class="project-img-gallery"/></div>
                                </a>
                                <a href="{{ url('view-product/'.$r->id) }}" title="{{ $r->title }}" style="color: #000033; font-weight: 500; text-align: center; display: block;">{{ $r->title }}</a>
                                <span style="font-weight: 400; text-align: center; display: block">₹ {{ $r->price }}</span>
                            </div>
                        </div>
	                </div>
                @endforeach
            </div>
        </div>
	</div>
</div>