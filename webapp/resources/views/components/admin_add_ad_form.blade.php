<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Fill Ad Details</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('add-ad-submit') }}">
      @csrf
      <div class="box-body">
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" name="title" required autofocus>
        </div>
        <div class="form-group">
          <label>Link URL</label>
          <input type="text" class="form-control" name="link">
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
