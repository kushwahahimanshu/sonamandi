<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Fill your Details</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('join-association-submit') }}">
      @csrf
      <div class="box-body">
        <div class="form-group">
          <label>Full Name</label>
          <input type="text" class="form-control" name="name" required autofocus>
        </div>
        <div class="form-group">
          <label>Photograph</label>
          <input type="file" name="image" required>
          <p class="help-block">Required Size: 500px x 500px</p>
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
