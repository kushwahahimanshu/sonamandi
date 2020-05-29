<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Complete your Profile</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('add-ad-submit') }}">
      @csrf
      <div class="box-body">
        <div class="form-group">
          <label>Full Name</label>
          <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required autofocus>
        </div>
        <div class="form-group">
          <label>Membership Type</label>
          <select class="form-control" name="membership_type">
              <option value="" selected>Regular User</option>
          </select>
        </div>
        <div class="form-group">
          <label>Ad Image</label>
          <input type="file" name="image" required>
          <p class="help-block">Required Size: 500px x 500px</p>
        </div>
      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div><!-- /.box -->

</div><!--/.col (left) -->
