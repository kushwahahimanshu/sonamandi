<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">ADD Rates</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{url('add-rate-submit') }}">
      @csrf 
      <div class="box-body">
        <div class="form-group">
          <label>Gold 14 kt</label>
          <input type="text" class="form-control" name="kt_fourteen">
        </div> 
        <div class="form-group">
          <label>Gold 18 kt</label>
          <input type="text" class="form-control" name="kt_eighteen">
        </div>
        <div class="form-group">
          <label>Gold 22 kt</label>
          <input type="text" class="form-control" name="kt_twentytwo">
        </div>
        <div class="form-group">
          <label>Gold 24 kt</label>
          <input type="text" class="form-control" name="kt_twentyfour">
        </div> 
        <div class="form-group">
          <label>Silver 1Gm</label>
          <input type="text" class="form-control" name="gm_one">
        </div> 
        <div class="form-group">
          <label>Date</label>
          <input type="date" class="form-control" name="rate_date">
        </div> 
      </div><!-- /.box-body --> 
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div><!-- /.box -->

</div><!--/.col (left) -->
