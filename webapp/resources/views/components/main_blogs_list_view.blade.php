@foreach($blogs as $r)
    <!-- start post item --> 
    <div class="blog-post-content d-flex align-items-center flex-wrap margin-15px-tb text-center text-md-left md-no-border">
        <div class="col-12 col-lg-5 blog-image p-0 md-margin-30px-bottom sm-margin-20px-bottom margin-45px-right md-no-margin-right">
            <a href="{{ url('read-blog/'.$r->id.'/'.urlencode($r->title)) }}"><img src="{{ asset($r->image) }}" alt="{{ $r->title }}"></a>
        </div>
        <div class="col-12 col-lg-6 blog-text p-0">
            <div class="content margin-20px-bottom md-no-padding-left ">
                <a href="{{ url('read-blog/'.$r->id.'/'.urlencode($r->title)) }}" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 d-inline-block">{{ $r->title }}</a>
                <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>By <a href="{{ url('blogs/author/'.urlencode($r->author)) }}" class="text-medium-gray">{{ $r->author }}</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>{{ date_format(date_create($r->created_at), 'd F Y') }}</span></div>
                <p class="m-0 width-95">{!! substr($r->content, 0, 100) !!}</p>
            </div>
            <a class="btn btn-very-small btn-dark-gray text-uppercase" href="{{ url('read-blog/'.$r->id.'/'.urlencode($r->title)) }}">Continue Reading</a> 
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