<div class="row margin-15px-top" style="background-color: #000033;">
    <div class="col-6 ">
        <!-- start page title -->
        <h5 class="alt-font text-white font-weight-600 text-uppercase padding-15px-tb no-margin">Top Jewellers</h5>
        <!-- end page title -->
    </div>
    <div class="col-6 margin-15px-top">
        <!-- start page title -->
        <a href="{{ url('directory') }}" class="btn btn-white btn-small margin-5px-lr" style="float: right;">View All Jewellers</a>
        <!-- end page title -->
    </div>
</div>
<div class="row bg-white">
	<div class="col-md-12 padding-15px-all">
		<div class="swiper-slider-clients swiper-container black-move wow fadeIn">
            <div class="swiper-wrapper">
                @foreach($directory as $r)
	                <div class="swiper-slide padding-10px-all">
	                	<div class="padding-10px-all">
                            <a href="{{url('directory-details/'.$r->id)}}">
                            <img src="{{ asset($r->image1) }}" style="width: 100%;"></a>
                            <label class="alt-font text-large text-black" style="margin-bottom: 0px;"><a href="{{url('directory-details/'.$r->id)}}">{{ $r->ms }}</a></label><br>
                            <label class="alt-font text-small"><a href="{{url('directory-details/'.$r->id)}}">City: {{ $r->city }}</a></label>
                            <br>
                        </div>
	                </div>
                @endforeach
            </div>
        </div>
	</div>
</div>