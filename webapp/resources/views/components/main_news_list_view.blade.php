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
<script type="text/javascript">
// get list of radio buttons with name 'size'
var sz = document.forms['demoForm'].elements['size'];
// loop through list
for (var i=0, len=sz.length; i<len; i++) {
    sz[i].onclick = function() { // assign onclick handler function to each
        // put clicked radio button's value in total field
        this.form.elements.total.value = this.value;
    };
}
</script>