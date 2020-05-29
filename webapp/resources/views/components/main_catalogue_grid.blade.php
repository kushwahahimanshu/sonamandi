<div class="row justify-content-center bg-white padding-15px-all margin-10px-bottom">
    <div class="col-12 col-lg-8 last-paragraph-no-margin">
        <h5 class="alt-font text-center text-extra-dark-gray font-weight-600 no-margin-bottom">Jewellery Catalogue</h5>
    </div>
</div>
<!-- <div class="row bg-white padding-15px-all margin-10px-bottom" style="">
    <div class="col-12 col-lg-8 last-paragraph-no-margin">
        <p class="alt-font text-black padding-5px-bottom">Choose Category</p>
        @foreach($category as $r)
        <div class="tag-cloud">
            <label class="alt-font text-black padding-5px-bottom">{{ $r->name }}</label>
            @foreach(DB::table('jewellery_category')->where('parent', $r->name)->get() as $r1)
                <a href="{{ url('catalogue/'.urlencode($r1->name)) }}">{{ $r1->name }}</a>
            @endforeach
        </div>
        @endforeach
    </div>
</div> -->
<div class="row bg-white padding-15px-all">
    <div class="col-md-12" style="padding-left: 0; padding-right: 0;">
        <!-- <div class="row lightbox-gallery"> -->
            <div class="p-0 sm-padding-15px-lr">
                <ul class="portfolio-grid work-3col hover-option4 gutter-medium" style="margin:0;"> 
                    <li class="grid-sizer"></li>
                   @foreach($products as $r)
                    <!-- start portfolio item -->
                    <li class="grid-item wow fadeInUp">
                        <a href="{{ url('catalogueimage',$r->id) }}" title="{{ $r->title }}: {{ $r->description }}">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img src="{{ asset($r->image) }}" alt="" class="project-img-gallery"/></div>
                                <figcaption>
                                    <div class="portfolio-hover-main d-flex justify-content-center align-items-center">
                                        <div class="portfolio-hover-content position-relative">
                                            <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>  
                    <!-- end portfolio item -->
                    @endforeach
                </ul>
            </div> 
        <!-- </div> --> 
    </div> 
    @php 
        $users = DB::table('catalogue')->Paginate(15); 
    @endphp
    <style>
        .page-item.active .page-link {
            background-color:#000033;
        }
    </style> 
         
    <center><span  class="page-item.active .page-link">{{ $users->links() }}</span></center> 
</div> 


