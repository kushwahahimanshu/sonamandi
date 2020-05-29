<div class="row margin-15px-top" style="background-color: #000033;">
    <div class="col-6 ">
        <!-- start page title -->
        <h5 class="alt-font text-white font-weight-600 text-uppercase padding-15px-tb no-margin">News</h5>
        <!-- end page title -->
    </div>
    <div class="col-6 margin-15px-top">
        <!-- start page title -->
        <a href="{{ url('news') }}" class="btn btn-white btn-small margin-5px-lr" style="float: right;">View News</a>
        <!-- end page title -->
    </div>
</div>
<div class="row bg-white">
	<div class="col-md-8 padding-15px-all">
		<div class="swiper-full-screen swiper-container white-move">
		    <div class="swiper-wrapper">
		    	@foreach($news as $r)
		        	<div class="swiper-slide">
		        		<a href="{{ url('read-news/'.$r->id.'/'.urlencode($r->title)) }}"><img src="{{ asset($r->image) }}" alt="{{ $r->title }}" style="width: 100%;"></a>
		        		<h6 class="alt-font text-white text-uppercase padding-10px-all no-margin" style="font-size: 12px; background-color: #000033;"><a href="{{ url('read-news/'.$r->id.'/'.urlencode($r->title)) }}" class="text-white">{{ $r->title }}</a></h6>
		        	</div>
		        @endforeach                        
		    </div>
		    <div class="swiper-button-next swiper-button-black-highlight"></div>
		    <div class="swiper-button-prev swiper-button-black-highlight"></div>
		</div>
	</div>
	<div class="col-md-4 padding-15px-all">
		<h6 class="alt-font text-white text-uppercase padding-10px-all no-margin" style="font-size: 12px; background-color: #000033;">Latest News</h6>
		<marquee direction="up" onmouseover="this.stop()" onmouseout="this.start()" style="height: calc(100% - 60px);">
			<ul class="latest-post position-relative top-3">
				@foreach($news as $r)
	                <li class="media border-bottom border-color-extra-light-gray">
	                    <figure>
	                        <a href="{{ url('read-news/'.$r->id.'/'.urlencode($r->title)) }}"><img src="{{ asset($r->image) }}" alt="{{ $r->title }}"></a>
	                    </figure>
	                    <div class="media-body text-small"><a href="{{ url('read-news/'.$r->id.'/'.urlencode($r->title)) }}">{{ $r->title }}</a> <span class="clearfix"></span>{{ date_format(date_create($r->created_at), 'd F Y') }} | by <a href="{{ url('news/'.urlencode($r->author)) }}" class="text-medium-gray">{{ $r->author }}</a></div>
	                </li>
                @endforeach
            </ul>
		</marquee>
	</div>
</div>