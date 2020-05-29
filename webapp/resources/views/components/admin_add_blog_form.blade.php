<div class="col-md-8">
  <!-- general form elements -->
  <div class="box box-primary">
    <h4> Import the Excel File of Blog</h4>
    <form action="{{url('import-blog') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Blog Data</button>
                <!-- <a class="btn btn-warning" href="{{url('export-directory') }}">Export Directory Data</a> -->
    </form>
    <div class="box-header with-border">
      <h3 class="box-title">Fill Blog Details</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('add-blog-submit') }}">
      @csrf
      <div class="box-body">
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" name="title" required autofocus>
        </div>
         
        <div class="form-group">
          <label>Image</label>
          <input type="file" name="image" required>
          <p class="help-block">Required Size: 1200px x 640px</p>
        </div>
        <div class="form-group">
          <label>Content</label>
          <textarea id="editor1" name="content" rows="10" cols="80" required></textarea>
        </div>
        <div class="form-group">
          <label>Meta Tag</label>
          <textarea rows="4" cols="15" style="resize: vertical;"  class="form-control"   name="metatag"></textarea>
        </div> 
        <div class="form-group">
          <label>Category</label><br>
          @foreach($category as $r)
            <div class="checkbox-container">
              <input type="checkbox" name="categories[]" value="{{ $r->name }}"><label style="padding: 0px 10px;"> {{ $r->name }}</label>
            </div>
          @endforeach
        </div>
      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div><!-- /.box -->

</div><!--/.col (left) -->


@section('scripts')

  <script type="text/javascript">
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1');
      //bootstrap WYSIHTML5 - text editor
      $(".textarea").wysihtml5();
    });
  </script>

@stop