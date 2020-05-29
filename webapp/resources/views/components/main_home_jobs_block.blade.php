<div class="row margin-15px-top" style="background-color: #000033;">
    <div class="col-6 ">
        <!-- start page title -->
        <h5 class="alt-font text-white font-weight-600 text-uppercase padding-15px-tb no-margin">Job Openings </h5>
        <!-- end page title -->
    </div>
    <div class="col-6 margin-15px-top">
        <!-- start page title -->
        <a href="{{ url('jobs') }}" class="btn btn-white btn-small margin-5px-lr" style="float: right;">View All Jobs</a>
        <!-- end page title -->
    </div>
</div>
<div class="row bg-white">
	<div class="col-md-12 padding-15px-all">
		<div class="swiper-slider-clients swiper-container black-move wow fadeIn">
            <div class="swiper-wrapper">
                @foreach($jobs as $r)
	                <div class="swiper-slide padding-10px-all">
	                	<div class="padding-10px-all" style="border: 1px solid #000000;">
                            <label class="alt-font text-large text-black margin-15px-bottom">{{ $r->job_title }}</label><br>
                            <label class="alt-font text-small">Location: {{ $r->location }}</label><br>
                            <label class="alt-font text-small">Salary: {{ $r->salary }}</label><br>
                            <label class="alt-font text-small">Experience: {{ $r->experience }}</label>
                            <br>
                            <a href="{{ url('apply-for-job/'.$r->id) }}" class="btn btn-black btn-very-small center-col margin-15px-top">Apply</a>
                        </div>
	                </div>
                @endforeach
            </div>
        </div>
	</div>
</div>