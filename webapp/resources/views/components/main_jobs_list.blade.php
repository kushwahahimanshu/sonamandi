<div class="row bg-white padding-15px-all">
    <div class="col-12">
        @foreach($jobs as $r)
        <!-- start post item --> 
        <div class="blog-post-content margin-20px-bottom padding-20px-bottom md-margin-30px-bottom md-padding-30px-bottom text-center text-md-left" style="border-bottom: 1px solid #c4c4c4;">
            <div class="row">
                <div class="col-12">
                    <div class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600">{{ $r->job_title }}</div>
                </div>
                <div class="col-12 col-md-4">
                    Location: {{ $r->location }}
                </div>
                <div class="col-12 col-md-4">
                    Salary: ₹ {{ $r->salary }}
                </div>
                <div class="col-12 col-md-4">
                    Experience Required: {{ $r->experience }}
                </div>
                <div class="col-12 col-md-4">
                    Gender Requirement: {{ $r->gender }}
                </div>
                <div class="col-12 col-md-4">
                    Working Hours: {{ $r->timing }}
                </div>
                <div class="col-12 col-md-4">
                    Working Days: {{ $r->working_days }}
                </div>
                <div class="col-12">
                    Language Requirement: {{ $r->language }}
                </div>
                <!-- <div class="col-12">
                    <label class="mo-margin-bottom margin-5px-top">Contact Details</label>
                </div>
                <div class="col-12 col-md-4">
                    Name: {{ $r->contact_person }}
                </div>
                <div class="col-12 col-md-4">
                    Phone: {{ $r->phone }}
                </div>
                <div class="col-12 col-md-4">
                    Time to Call: {{ $r->time_to_call }}
                </div>
                @if($r->can_whatsapp == 'Yes')
                    <div class="col-12 col-md-4">
                        <span class="bg-deep-pink text-white text-small" style="padding: 3px 5px; border-radius: 4px;"><i class="fa fa-check"></i></span> Whatsapp Available
                    </div>
                @endif
 -->                <div class="col-12">
                    <a class="btn btn-very-small btn-dark-gray text-uppercase margin-10px-tb" href="{{ url('apply-for-job/'.$r->id) }}">Apply Now</a>
                </div>
            </div>
        </div>
        <!-- end post item --> 
        @endforeach
    </div>
</div>
<div class="margin-10px-tb  text-small">
    
<center>{{ $jobs->links() }}</center></div>
