<div class="row margin-15px-top" style="background-color: #000033;">
    <div class="col-6 ">
        <!-- start page title -->
        <h5 class="alt-font text-white font-weight-600 text-uppercase padding-15px-tb no-margin">Design Catalogue</h5>
        <!-- end page title -->
    </div>
    <div class="col-6 margin-15px-top">
        <!-- start page title -->
        <a href="{{ url('catalogue') }}" class="btn btn-white btn-small margin-5px-lr" style="float: right;">View Catalogue</a>
        <!-- end page title -->
    </div>
</div>
<div class="row bg-white">
	<div class="col-md-12 padding-15px-all">
		<div class="swiper-slider-clients swiper-container black-move wow fadeIn">
            <div class="swiper-wrapper">
                @foreach($catalogue as $r)
	                <div class="swiper-slide padding-10px-all">
	                	<div class="padding-10px-all">
                            <a href="{{ url('catalogueimage',$r->id) }}">
                                <img src="{{ asset($r->image) }}" style="width: 100%;">
                            </a>
                        </div>
	                </div>
                @endforeach
            </div>
        </div>
	</div>
</div>