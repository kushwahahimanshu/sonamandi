<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Fill Categories Details</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('add-news-blog-category-submit') }}">
      @csrf
      <div class="box-body">
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" required autofocus>
        </div>
        <div class="form-group">
          <label>Image</label>
          <input type="file" name="image" required>
          <p class="help-block">Required Size: 800px x 600px</p>
        </div>
        <div class="form-group">
          <label>Parent Category</label>
          <select class="form-control" name="parent">
            <option value="">No Parent Category</option>
            @foreach($category as $r)
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
