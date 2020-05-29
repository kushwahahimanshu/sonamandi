<div class="row bg-white padding-15px-all"> 
    <div class="col-12">  
        <div class="blog-post-content d-flex align-items-center flex-wrap margin-20px-bottom padding-20px-bottom md-margin-30px-bottom md-padding-30px-bottom text-md-left" style="border-bottom: 1px solid #c4c4c4;">
            <a href="#"><img src="{{ asset($userdata->image) }}" alt="{{ $userdata->title }}" style="width:300px; height:250px;"></a> 
            <div  id="about" class="col-12 col-lg-7 blog-text p-0">
                <div class="content margin-20px-bottom md-no-padding-left ">
                    <p class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 d-inline-block" style="font-size:17px;">Author Name:</p> <b style="padding-right:60px;">{{ $userdata->name }}</b><br>
                    <p class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 d-inline-block" style="font-size:17px;">Bio:</p> <br>
                    <p style="text-align:justify; font-size:14px;">{{ $userdata->description }}</p>
                </div>
            </div>  
        </div>
    </div>
</div>
@foreach($news as $r)
    <!-- start post item --> 
    <div class="blog-post-content d-flex align-items-center flex-wrap margin-15px-tb text-center text-md-left md-no-border">
        <div class="col-12 col-lg-5 blog-image p-0 md-margin-30px-bottom sm-margin-20px-bottom margin-45px-right md-no-margin-right">
            <a href="{{ url('read-news/'.$r->id.'/'.urlencode($r->title)) }}"><img src="{{ asset($r->image) }}" alt="{{ $r->title }}"></a>
        </div>
        <div class="col-12 col-lg-6 blog-text p-0">
            <div class="content margin-20px-bottom md-no-padding-left ">
                <a href="{{ url('read-news/'.$r->id.'/'.urlencode($r->title)) }}" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 d-inline-block">{{ $r->title }}</a>
                <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>By <a href="{{ url('news/author/'.urlencode($r->author)) }}" class="text-medium-gray">{{ $r->author }}</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>{{ date_format(date_create($r->created_at), 'd F Y') }}</span></div>
                <p class="m-0 width-95">{!! substr($r->content, 0, 100) !!}</p>
            </div>
            <a class="btn btn-very-small btn-dark-gray text-uppercase" href="{{ url('read-news/'.$r->id.'/'.urlencode($r->title)) }}">Continue Reading</a>
        </div>
    </div>

    <!-- end post item --> 
@endforeach
@php 
    $users = DB::table('newsblog')->Paginate(15); 
@endphp
<style>
    .page-item.active .page-link {
        background-color:#000033;
    }
</style>  
<center><span  class="page-item.active .page-link">{{ $users->links() }}</span></center>  