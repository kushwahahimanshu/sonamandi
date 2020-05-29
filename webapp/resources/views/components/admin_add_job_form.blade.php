<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <h4> Import the Excel File of Job</h4>
    <form action="{{url('import-job') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Job Data</button>
                <!-- <a class="btn btn-warning" href="{{url('export-directory') }}">Export Directory Data</a> -->
    </form>
    <div class="box-header with-border">
      <h3 class="box-title">Fill Job Details</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('add-job-submit') }}">
      @csrf
      <input type="hidden" value="{{ Auth::id() }}" name="user">
      <div class="box-body">
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" name="title" required autofocus>
        </div>
        <div class="form-group">
          <label>Salary</label>
          <input type="text" class="form-control" name="salary" required>
        </div>
        <div class="form-group">
          <label>Job Location</label>
          <input type="text" class="form-control" name="location" required>
        </div>
        <div class="form-group">
          <label>Job Working Hours</label>
          <input type="text" class="form-control" name="timing" required>
        </div>
        <div class="form-group">
          <label>Job Working Days</label>
          <input type="text" class="form-control" name="working_days" required>
        </div>
        <div class="form-group">
          <label>Gender Required</label><br>
          <input type="radio" name="gender" value="male" checked> <label style="font-weight: 500;"> Male</label>
          <input type="radio" name="gender" value="female"> <label style="font-weight: 500;"> Female</label>
          <input type="radio" name="gender" value="any"> <label style="font-weight: 500;"> Any</label>
        </div>
        <div class="form-group">
          <label>Experience Required</label>
          <input type="text" class="form-control" name="experience" required>
        </div>
        <div class="form-group">
          <label>Contact Person Name</label>
          <input type="text" class="form-control" name="contact_name" required>
        </div>
        <div class="form-group">
          <label>Contact Person Phone Number</label>
          <input type="text" class="form-control" name="phone" required>
        </div>
        <div class="form-group">
          <label>Languages Required</label>
          <input type="text" class="form-control" name="language" required>
        </div>
        <div class="form-group">
          <label>Time to Call</label>
          <input type="text" class="form-control" name="time_to_call" required>
        </div>
        <div class="form-group">
          <label>Meta Tag</label>
          <textarea rows="4" cols="15" style="resize: vertical;" class="form-control"   name="metatag"></textarea>
        </div> 
        <div class="form-group">
          <label>Is Whatsapp Available on above number</label>
          <select class="form-control" name="can_whatsapp">
            <option value="Yes" selected>Yes</option>
            <option value="No">No</option>
          </select>
        </div>
      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div><!-- /.box -->

</div><!--/.col (left) -->
