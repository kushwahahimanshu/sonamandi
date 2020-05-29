<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Fill Association Details</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('add-association-submit') }}">
      @csrf
      <div class="box-body">
        <div class="form-group">
          <label>Association Name</label>
          <input type="text" class="form-control" name="name" required autofocus>
        </div>
        <div class="form-group">
          <label>Meta Tag</label>
          <textarea rows="4" cols="15" style="resize: vertical;"  class="form-control" name="metatag"></textarea>
        </div> 

      </div><!-- /.box-body -->
      
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div><!-- /.box -->

</div><!--/.col (left) -->
