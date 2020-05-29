<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Fill Member Details</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('add-association-member-submit') }}">
      @csrf
      <div class="box-body">
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" required autofocus>
        </div>
        <div class="form-group">
          <label>Photograph</label>
          <input type="file" name="image" required>
          <p class="help-block">Required Size: 600px x 800px</p>
        </div>
        <div class="form-group">
          <label>Designation</label>
          <input type="text" class="form-control" name="designation" required>
        </div>
        <div class="form-group">
          <label>Designation Positon</label>
          <input type="number" class="form-control" name="position" min="1" value="1" required>
          <p class="help-block">Position '1' is highest and decreases onwards<br>Enter 1 for President, 2 for Vice President, 3 for Secretary and so on.<br>Members must be given lowest position like 10</p>
        </div>
        <div class="form-group">
          <label>Association</label>
          <select class="form-control" name="association">
            @foreach($associations as $r)
              <option value="{{ $r->name }}">{{ $r->name }}</option>
            @endforeach
          </select>
        </div>
      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div><!-- /.box -->

</div><!--/.col (left) -->
