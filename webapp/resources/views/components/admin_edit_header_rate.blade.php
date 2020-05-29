<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Footer Content</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{url('update-header-rate') }}">
      @csrf
      <input type="hidden" value="{{$members->id}}" name="id">
      <div class="box-body">
        <div class="form-group">
          <label>Gold 14 kt</label>
          <input type="text" class="form-control" name="kt_fourteen" value="{{$members->kt_fourteen}}">
        </div> 
        <div class="form-group">
          <label>Gold 18 kt</label>
          <input type="text" class="form-control" name="kt_eighteen" value="{{$members->kt_eighteen}}">
        </div>
        <div class="form-group">
          <label>Gold 22 kt</label>
          <input type="text" class="form-control" name="kt_twentytwo" value="{{$members->kt_twentytwo}}">
        </div>
        <div class="form-group">
          <label>Gold 24 kt</label>
          <input type="text" class="form-control" name="kt_twentyfour" value="{{$members->kt_twentyfour}}">
        </div> 
        <div class="form-group">
          <label>Silver 1Gm</label>
          <input type="text" class="form-control" name="gm_one" value="{{$members->gm_one}}">
        </div> 
        
      </div><!-- /.box-body --> 
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div><!-- /.box -->

</div><!--/.col (left) -->
