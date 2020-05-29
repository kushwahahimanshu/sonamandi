<div class="col-md-6">

<!-- SLIDERS -->
<!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add Catalogue Images for your Website</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('add-website-catalogue-submit') }}">
      @csrf
      <input type="hidden" name="id" value="{{ $website->id }}">
      <div class="box-body">
        <div class="form-group">
          <label>Catalogue Image</label>
          <input type="file" name="image" required>
          <p class="help-block">Required Size: 750px x 500px</p>
        </div>
        <div class="form-group">
          <label>Description</label>
          <input type="text" name="description" class="form-control" required>
        </div>
      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div><!-- /.box -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Catalogue</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>S.No.</th>
            <th>Title</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php $count = 1; ?>
          @foreach($catalogue as $r)
          <tr>
            <td>{{ $count++ }}</td>
            <td><img src="{{ asset($r->image) }}" style="width: 120px;"></td>
            <td>
              <a href="{{ url('delete-catalogue/'.$r->id) }}" class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>S.No.</th>
            <th>Title</th>
            <th>Actions</th>
          </tr>
        </tfoot>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->


</div><!--/.col (left) -->
