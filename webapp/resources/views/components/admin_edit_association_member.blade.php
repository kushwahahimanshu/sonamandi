<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Update Member's Details</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('update-association-member-details') }}">
      @csrf
      <div class="box-body">
        <input type="hidden" name="id" value="{{$members->id}}">
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" value="{{$members->name}}" name="name" required autofocus>
        </div>
        <div class="form-group">
          <label>Photograph</label><br>
          <img style="height: 150px; width: 130px;"   src="{{asset($members->image)}}">
            <input type="hidden" name="image" value="{{$members->image}}">
            <input type="file" name="image">
          <p class="help-block">Optional Size: 600px x 800px</p>
        </div>
        <div class="form-group">
          <label>Designation</label>
          <input type="text" class="form-control" value="{{$members->designation}}" name="designation" required>
        </div>
        <div class="form-group">
          <label>Designation Positon</label>
          <input type="number" class="form-control" name="position" min="1" value="{{$members->position}}" required>
          <p class="help-block">Position '1' is highest and decreases onwards<br>Enter 1 for President, 2 for Vice President, 3 for Secretary and so on.<br>Members must be given lowest position like 10</p>
        </div>
      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div><!-- /.box -->

</div><!--/.col (left) -->
