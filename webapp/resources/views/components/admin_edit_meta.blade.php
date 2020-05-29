<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Meta Details</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('update-meta-tag') }}">
      @csrf
        <input type="hidden" name="id" value="{{$members->id}}">

      <div class="box-body">
        <!-- <div class="form-group">
          <label>Page Name</label>
          <input type="text" class="form-control" name="name" value="{{$members->name}}">
        </div> -->
        <div class="form-group">
          <label>Meta Tag</label>
          <textarea rows="4" cols="15"  class="form-control"  style="resize: vertical;"  name="metatag">{!!$members->metatag!!}</textarea>
        </div> 
      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div><!-- /.box -->

</div><!--/.col (left) -->
 