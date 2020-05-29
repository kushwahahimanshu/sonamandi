<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Job Details</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{url('update-job') }}">
      @csrf
      <input type="hidden" value="{{$members->id}}" name="id">
      <div class="box-body">
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" name="title" value="{{$members->job_title}}">
        </div>
        <div class="form-group">
          <label>Salary</label>
          <input type="text" class="form-control" name="salary" value="{{$members->salary}}">
        </div>
        <div class="form-group">
          <label>Job Location</label>
          <input type="text" class="form-control" name="location" value="{{$members->location}}">
        </div>
        <div class="form-group">
          <label>Job Working Hours</label>
          <input type="text" class="form-control" name="timing" value="{{$members->timing}}">
        </div>
        <div class="form-group">
          <label>Job Working Days</label>
          <input type="text" class="form-control" name="working_days" value="{{$members->working_days}}">
        </div>
        <div class="form-group">
          <label>Gender Required</label><br>
          <input type="radio" name="gender" value="male"  @if($members->gender=='male') checked @endif> <label style="font-weight: 500;"> Male</label>
          <input type="radio" name="gender" value="female"  @if($members->gender=='female') checked @endif> <label style="font-weight: 500;"> Female</label>
          <input type="radio" name="gender" value="any"  @if($members->gender=='any') checked @endif> <label style="font-weight: 500;"> Other</label>
        </div>
        <div class="form-group">
          <label>Experience Required</label>
          <input type="text" class="form-control" name="experience" value="{{$members->experience}}">
        </div>
        <div class="form-group">
          <label>Contact Person Name</label>
          <input type="text" class="form-control" name="contact_name" value="{{$members->contact_person}}">
        </div>
        <div class="form-group">
          <label>Contact Person Phone Number</label>
          <input type="text" class="form-control" name="phone" value="{{$members->phone}}">
        </div>
        <div class="form-group">
          <label>Languages Required</label>
          <input type="text" class="form-control" name="language" value="{{$members->language}}">
        </div>
        <div class="form-group">
          <label>Time to Call</label>
          <input type="text" class="form-control" name="time_to_call" value="{{$members->time_to_call}}">
        </div>
        <div class="form-group">
          <label>Is Whatsapp Available on above number</label>
          <select class="form-control" name="can_whatsapp">
            <option value="Yes"  @if($members->can_whatsapp=='Yes') selected @endif>Yes</option>
            <option value="No" @if($members->can_whatsapp=='No') selected @endif>No</option>
          </select>
        </div>
        <div class="form-group">
          <label>Meta Tag</label>
          <textarea rows="4" cols="15"  style="resize: vertical;" class="form-control"   name="metatag">{!!$members->metatag!!}</textarea>
        </div> 
      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div><!-- /.box -->

</div><!--/.col (left) -->
