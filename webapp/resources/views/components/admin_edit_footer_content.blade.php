<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Footer Content</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{url('update-footer') }}">
      @csrf
      <input type="hidden" value="{{$members->id}}" name="id">
      <div class="box-body">
        <div class="form-group">
          <label>Content</label>
          <input type="text" class="form-control" name="content" value="{{$members->content}}">
        </div> 
      </div><!-- /.box-body --> 
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div><!-- /.box -->

</div><!--/.col (left) -->
