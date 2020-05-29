<div class="row bg-white padding-15px-all">
    <div class="col-md-12">
        <div class="row ">
            @foreach($products as $r)
                <div class="col-12 col-md-4 sm-padding-15px-lr">
                    <div>
                        <a href="{{ url('view-product/'.$r->id) }}" title="{{ $r->title }}">
                            <div class="portfolio-img bg-extra-dark-gray"><img src="{{ asset($r->image1) }}" alt="" class="project-img-gallery"/></div>
                        </a>
                        <a href="{{ url('view-product/'.$r->id) }}" title="{{ $r->title }}" style="color: #000033; font-weight: 500; text-align: center; display: block;">{{ $r->title }}</a>
                        <span style="font-weight: 400; text-align: center; display: block">₹ {{ $r->price }}</span>
                        <!-- <a href="{{ url('view-product/'.$r->id) }}" class="btn btn-deep-pink bg-blue btn-sm width-100">View</a> -->
                    </div>
                </div>
            @endforeach
        </div>
        
    
    </div>
</div>
<div class="margin-10px-tb  text-small">
    
<center>{{ $products->links() }}</center></div>
