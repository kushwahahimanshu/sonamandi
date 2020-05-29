<div class="row bg-white padding-15px-all">
    <div class="col-12">
        <!-- start post item --> 
        <div class="blog-post-content margin-20px-bottom padding-20px-bottom md-margin-30px-bottom md-padding-30px-bottom text-center text-md-left" style="border-bottom: 1px solid #c4c4c4;">
            <div class="row">
                <div class="col-12">
                    <div class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600">
                        Apply for {{ $job->job_title }}
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    Location: {{ $job->location }}
                </div>
                <div class="col-12 col-md-4">
                    Salary: ₹ {{ $job->salary }}
                </div>
                <div class="col-12 col-md-4">
                    Experience Required: {{ $job->experience }}
                </div>
                <div class="col-12 col-md-4">
                    Gender Requirement: {{ $job->gender }}
                </div>
                <div class="col-12 col-md-4">
                    Working Hours: {{ $job->timing }}
                </div>
                <div class="col-12 col-md-4">
                    Working Days: {{ $job->working_days }}
                </div>
                <div class="col-12">
                    Language Requirement: {{ $job->language }}
                </div>
                <!-- <div class="col-12">
                    <label class="mo-margin-bottom margin-5px-top">Contact Details</label>
                </div>
                <div class="col-12 col-md-4">
                    Name: {{ $job->contact_person }}
                </div>
                <div class="col-12 col-md-4">
                    Phone: {{ $job->phone }}
                </div>
                <div class="col-12 col-md-4">
                    Time to Call: {{ $job->time_to_call }}
                </div> -->
                <div class="col-12 margin-20px-top">
                    <label class="mo-margin-bottom margin-5px-top">Fill your details below</label>
                </div>
                <div class="col-12">
                    <form enctype="multipart/form-data" method="post" action="{{ url('job-application-submit') }}">
                        @csrf
                        
                        @if(Auth::check())
                        <?php 
                          $apply= DB::table('job_applications')->where('applicant_id',Auth::id())->orderBy('id','desc')->first(); 
                           //dd($apply);
                        ?>
                            @if($apply)
                            <input type="hidden" name="job_id" value="{{ $job->id }}">
                            <div class="row">
                                <div class="col-12">
                                    <label class="font-weight-400">Full Name</label>
                                    <input type="text" name="name" value="{{$apply->full_name}}" required style="line-height: 16px;">
                                </div>
                                <div class="col-12">
                                    <label class="font-weight-400">Phone</label>
                                    <input type="text" name="phone"  value="{{$apply->phone}}" style="line-height: 16px;">
                                </div>
                                <div class="col-12">
                                    <label class="font-weight-400">Email</label>
                                    <input type="text" name="email" value="{{$apply->email}}" style="line-height: 16px;">
                                </div>
                                <div class="col-12">
                                    <label class="font-weight-400">Complete Address</label>
                                    <input type="text" name="address" value="{{$apply->address}}" style="line-height: 16px;">
                                </div>
                                <div class="col-12">
                                    <label class="font-weight-400">Experience</label>
                                    <input type="text" name="experience" value="{{$apply->experience}}" style="line-height: 16px;">
                                </div>
                                @else
                                    <input type="hidden" name="job_id" value="{{ $job->id }}">
                                <div class="row">
                                <div class="col-12">
                                    <label class="font-weight-400">Full Name</label>
                                    <input type="text" name="name" required style="line-height: 16px;">
                                </div>
                                <div class="col-12">
                                    <label class="font-weight-400">Phone</label>
                                    <input type="text" name="phone"  required style="line-height: 16px;">
                                </div>
                                <div class="col-12">
                                    <label class="font-weight-400">Email</label>
                                    <input type="text" name="email" required style="line-height: 16px;">
                                </div>
                                <div class="col-12">
                                    <label class="font-weight-400">Complete Address</label>
                                    <input type="text" name="address" required style="line-height: 16px;">
                                </div>
                                <div class="col-12">
                                    <label class="font-weight-400">Experience</label>
                                    <input type="text" name="experience" required style="line-height: 16px;">
                                </div>
                            @endif
                             
                        @endif
                            <div class="col-12">
                                <label class="font-weight-400">Languages you speak</label><br>
                                <label class="font-weight-200">Hindi</label>
                                <input type="checkbox" name="language[]" value="hindi">
                                <label class="font-weight-200">English</label><br>
                                <input type="checkbox" name="language[]" value="english"><br>

                                <label class="font-weight-200"> Others</label> 

                                <input type="text" name="language[]">
                            </div>
                            <div class="col-12">
                                <label class="font-weight-400">Photograph</label>
                                <input type="file" name="photo" required style="line-height: 16px;">
                            </div>
                            <div class="col-12">
                                <label class="font-weight-400">CV / Resume</label>
                                <input type="file" name="cv" required style="line-height: 16px;">
                            </div>
                            <div class="col-12">
                                <input type="submit" class="btn btn-very-small btn-dark-gray text-uppercase margin-10px-tb" value="Apply">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end post item --> 
    </div>
</div>
@if(session('flag')==1)
<div style="background-color: rgba(0,0,0,0.6); display: flex; justify-content: center; align-items: center; height: 100%; width: 100%; position: fixed; top: 0; left: 0; z-index: 99999;" id="close">
  

    <section class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="shadow-lg  d-flex justify-content-center flex-column bg-white" style="padding: 6rem !important;">
                <div class="d-flex justify-content-around">
                    <button class="btn btn-sm" style="position: absolute; top: 210px; right: 347px; color: #46a299; font-size: 40px; font-weight: bold; transition: 0.3s;"  onclick="myFunction()">&times;</button>
                    <button class="btn btn-sm btn-success">Applied Successfully</button>&nbsp;
                    <a href="{{url('jobs')}}" class="btn btn-sm btn-success">Search More</a>&nbsp;
                    <a href="{{url('apply-to-all')}}" class="btn btn-sm btn-success">Apply To All</a>
                </div>
            
        </div>
    </section>
</div>
@endif
<script type="text/javascript">
    function myFunction(){
      document.getElementById('close').style.display = 'none';
    }
</script>