<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="{{ asset('https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0') }}"></script>

<div class="row padding-15px-tb" style="background-color: #000033; ">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <!-- start page title -->
        <h1 class="alt-font text-white font-weight-600 text-uppercase" style="font-size: 32px; line-height: 35px;">{{ $blog->title }}</h1>
        <!-- end page title -->
    </div>
    <div class="col-lg-12 col-sm-12 col-xs-12 display-table xs-text-left xs-margin-10px-top">
        <span class="text-white">By <a href="{{ url('blogs/author/'.urlencode($blog->author)) }}" class="text-white">{{ $blog->author }}</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span class="text-white">{{ date_format(date_create($blog->created_at), 'd F Y') }}</span>
    </div>
</div>
<div class="row no-padding">
    <img src="{{ asset($blog->image) }}" class="width-100">
</div>
<div class="row padding-20px-all text-black">
    {!! $blog->content !!}
</div> 
<b  style="color:black;">Total Views : {{$blog->total_view}}</b> <br> 
<div class="row padding-20px-all text-black">
    <div class="fb-like" data-href="http://www.sonamandi.com/read-blog/{{ $blog->id }}/{{ urlencode($blog->title) }}" data-width="" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>&nbsp;&nbsp; 
    <a href="https://wa.me/?text=http://www.sonamandi.com" target="_blank" style="width: 11%;  border-radius: 4px;  font-size: 13px; background-color: #25D366; height: 28px; display: inline-block; zoom: 1; color: white; padding-top: 3px !important; text-align: center; /* line-height: 23;">Whatsapp</a> &nbsp;&nbsp;
    <div style="width: 15%;  border-radius: 6px;  font-size: 13px; background-color:#365899; height: 27px; display: inline-block; zoom: 1; color: white; padding-top: 3px !important; text-align: center; /* line-height: 23;">Rating:{{ $blog->rating }}</div> <br>
    <div class="m-0 width-100">
        <table style="width: 100%; font-size: 14px;">
            <tr>
                <th style="width: 100%; vertical-align:top; font-size:16px;">Ratings:</th>
            </tr> 
        </table>  
        <form action="{{ url('news-rating') }}" method="post">
            @csrf 
           <fieldset class="rating"> 
                <input type="hidden" name="id" value="{{$blog->id}}">

                <input type="submit" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label> 
                <input type="submit" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label> 
                <input type="submit" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label> 
                <input type="submit" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label> 
                <input type="submit" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label> 
            </fieldset> 
        </form> 
    </div> 
    <div class="fb-comments" data-href="http://www.sonamandi.com/read-blog/{{ $blog->id }}/{{ urlencode($blog->title) }}" data-width="100%" data-numposts="20"></div>
</div>
<div class="row" style="background-color: #000033;">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <!-- start page title -->
        <h6 class="alt-font text-white text-uppercase text-center padding-15px-tb no-margin">More Blogs</h6>
        <!-- end page title -->
    </div>
</div>
<div class="row padding-15px-tb">
    @foreach($moreblogs as $r)
        <!-- start post item -->
        <div class="col-12 col-lg-4 col-md-6 margin-50px-bottom last-paragraph-no-margin sm-margin-30px-bottom wow fadeInUp">
            <div class="blog-post blog-post-style1 text-center text-md-left">
                <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                    <a href="{{ url('read-news/'.$r->id.'/'.urlencode($r->title)) }}">
                        <img src="{{ asset($r->image) }}" alt="{{ $r->title }}">
                    </a>
                </div>
                <div class="post-details">
                    <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom">{{ date_format(date_create($r->created_at), 'd F Y') }} | by <a href="{{ url('news/'.urlencode($r->author)) }}" class="text-medium-gray">{{ $r->author }}</a></span>
                    <a href="{{ url('read-news/'.$r->id.'/'.urlencode($r->title)) }}" class="post-title text-medium text-extra-dark-gray width-90 d-block md-width-100">{{ $r->title }}</a>
                </div>
            </div>
        </div>
        <!-- end post item -->
    @endforeach
</div>

<div class="row" style="background-color: #000033;">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <!-- start page title -->
        <h6 class="alt-font text-white text-uppercase text-center padding-15px-tb no-margin">Top Blogs</h6>
        <!-- end page title -->
    </div>
</div>
<div class="row padding-15px-tb">
    @foreach($topblogs as $r)
        <!-- start post item -->
        <div class="col-12 col-lg-4 col-md-6 margin-50px-bottom last-paragraph-no-margin sm-margin-30px-bottom wow fadeInUp">
            <div class="blog-post blog-post-style1 text-center text-md-left">
                <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                    <a href="{{ url('read-news/'.$r->id.'/'.urlencode($r->title)) }}">
                        <img src="{{ asset($r->image) }}" alt="{{ $r->title }}">
                    </a>
                </div>
                <div class="post-details">
                    <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom">{{ date_format(date_create($r->created_at), 'd F Y') }} | by <a href="{{ url('news/'.urlencode($r->author)) }}" class="text-medium-gray">{{ $r->author }}</a></span>
                    <a href="{{ url('read-news/'.$r->id.'/'.urlencode($r->title)) }}" class="post-title text-medium text-extra-dark-gray width-90 d-block md-width-100">{{ $r->title }}</a>
                </div>
            </div>
        </div>
        <!-- end post item -->
    @endforeach
</div>


<div class="row" style="background-color: #000033;">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <!-- start page title -->
        <h6 class="alt-font text-white text-uppercase text-center padding-15px-tb no-margin">More Blogs by {{ $blog->author }}</h6>
        <!-- end page title -->
    </div>
</div>
<div class="row padding-15px-tb">
    @foreach($authorblogs as $r)
        <!-- start post item -->
        <div class="col-12 col-lg-4 col-md-6 margin-50px-bottom last-paragraph-no-margin sm-margin-30px-bottom wow fadeInUp">
            <div class="blog-post blog-post-style1 text-center text-md-left">
                <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                    <a href="{{ url('read-news/'.$r->id.'/'.urlencode($r->title)) }}">
                        <img src="{{ asset($r->image) }}" alt="{{ $r->title }}">
                    </a>
                </div>
                <div class="post-details">
                    <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom">{{ date_format(date_create($r->created_at), 'd F Y') }} | by <a href="{{ url('news/'.urlencode($r->author)) }}" class="text-medium-gray">{{ $r->author }}</a></span>
                    <a href="{{ url('read-news/'.$r->id.'/'.urlencode($r->title)) }}" class="post-title text-medium text-extra-dark-gray width-90 d-block md-width-100">{{ $r->title }}</a>
                </div>
            </div>
        </div>
        <!-- end post item -->
    @endforeach
</div>

