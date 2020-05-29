<div class="row justify-content-center bg-white padding-15px-all">
    <div class="col-12 col-lg-8 text-center last-paragraph-no-margin">
        <h5 class="alt-font text-extra-dark-gray font-weight-600">All India Jeweller Associations</h5>
        <p class="alt-font text-black padding-5px-bottom">Choose Association from Below</p>
        <div class="tag-cloud">
        	@foreach($associations as $r)
            	<a href="{{ url('association/'.urlencode($r->name)) }}">{{ $r->name }}</a>
    		@endforeach
        </div>
    </div>
</div>
@if($members != null)
<div class="row margin-15px-top" style="background-color: #000033;">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <!-- start page title -->
        <h6 class="alt-font text-white text-uppercase text-center padding-15px-tb no-margin">{{ $current_association }}</h6>
        <!-- end page title -->
    </div>
</div>
<div class="row bg-white">
	@foreach($members as $r)
		<div class="col-md-3 padding-15px-tb">
            <div style="height: 250px; background-image: url({{ asset($r->image) }}); background-size: cover; background-position: center center;"></div>
			<div class="bg-blue">
				<label class="width-100 text-white text-center font-weight-300 padding-5px-top" style="margin-bottom: 0px;">{{ $r->name }}</label>
				<label class="width-100 text-white text-center font-weight-300 text-small">{{ $r->designation }}</label>
			</div>
			
		</div>
	@endforeach
</div>
@endif
<div class="row justify-content-center padding-15px-all margin-15px-top bg-blue">
    <div class="col-12 col-lg-8 text-center last-paragraph-no-margin">
        <h5 class="alt-font text-white font-weight-600">Register now to join an association of your area</h5>
        <a href="{{ url('join-association') }}" class="btn btn-white btn-sm">Click here to register now</a>
    </div>
</div>