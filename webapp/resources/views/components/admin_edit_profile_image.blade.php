<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Update Profile Image</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('update-profile') }}">
      @csrf
      <div class="box-body">
        <input type="hidden" name="id" value="{{$members->id}}">
         
        <div class="form-group">
          <label>Profile Image</label><br>
          <img style="height: 150px; width: 130px;"   src="{{asset($members->image)}}">
            <input type="hidden" name="image" value="{{$members->image}}">
            <input type="file" name="image"><!-- 
          <p class="help-block">Optional Size: 600px x 800px</p> -->
        </div> 
        <div class="form-group">
          <label>Bio</label><br>  
          <input type="text" class="form-control" name="description" value="{{$members->description }}"> 
        </div> 
      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div><!-- /.box -->

</div><!--/.col (left) -->
