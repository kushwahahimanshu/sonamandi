<div class="col-md-12">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Product Details</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('update-catalogue') }}">
      @csrf
      <div class="box-body">
        <input type="hidden" name="id" value="{{$members->id}}">
        <div class="form-group">
          <label>Product Title</label>
          <input type="text" class="form-control" name="title" value="{{$members->title}}">
        </div>
        <div class="form-group">
          <label>Product Image</label><br>
          <img style="height: 150px; width: 130px;"   src="{{asset($members->image)}}">
            <input type="hidden" name="image" value="{{$members->image}}">
            <input type="file" name="image">
          <p class="help-block">Optional Size: 750px 500px</p>
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea id="editor1" name="description" rows="10" cols="80" >{!!$members->description!!}</textarea>
        </div>
        <div class="form-group">
          <label>Meta Tag</label>
          <textarea rows="4" cols="15"  class="form-control"  style="resize: vertical;" name="metatag">{!!$members->metatag!!}</textarea>
        </div> 
        <div class="form-group">
          <label>Category</label><br>
          @foreach($category as $r)
            <div class="checkbox-container">
              <input type="checkbox" name="categories[]" value="{{ $r->name }}" @if(strpos($members->categories, $r->name) !== false) checked @endif ><label style="padding: 0px 10px;"> {{ $r->name }}</label>
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