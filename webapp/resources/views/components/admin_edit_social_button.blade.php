<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Update Social Links</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('update-social') }}">
      @csrf
      <div class="box-body">
        <input type="hidden" name="id" value="{{$members->id}}">
        <div class="form-group">
          <label>Facebook</label>
          <input type="links" class="form-control" value="{{$members->facebook}}" name="facebook" required autofocus>
        </div>
        <div class="form-group">
          <label>Twitter</label><br>
          <input type="links" class="form-control" value="{{$members->twitter}}" name="twitter" required autofocus>
        </div>
        <div class="form-group">
          <label>Instagram</label>
          <input type="links" class="form-control" value="{{$members->instagram}}" name="instagram" required autofocus>
        </div> 
      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div><!-- /.box -->

</div><!--/.col (left) -->
