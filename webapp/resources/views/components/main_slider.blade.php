<div class="row">
	<div class="swiper-full-screen swiper-container white-move">
	    <div class="swiper-wrapper">
	    	@foreach($sliders as $r)
	        	<div class="swiper-slide"><a href="{{ $r->link }}"><img src="{{ asset($r->image) }}" alt="{{ $r->title }}" style="width: 100%;"></a></div>
	        @endforeach                        
	    </div>  
	    <div class="swiper-pagination swiper-pagination-square swiper-pagination-white swiper-full-screen-pagination"></div>
	    <div class="swiper-button-next swiper-button-black-highlight"></div>
	    <div class="swiper-button-prev swiper-button-black-highlight"></div>
	</div>
</div>