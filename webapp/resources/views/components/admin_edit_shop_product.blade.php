<div class="col-md-12">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Product Details</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('update-shop-product') }}">
      @csrf
      <div class="box-body">
        <input type="hidden" name="id" value="{{$members->id}}">
        <div class="form-group">
          <label>Product Title</label>
          <input type="text" class="form-control" name="title" value="{{$members->title}}">
        </div>
        <div class="form-group">
          <label>Product Price</label>
          <input type="text" class="form-control" name="price" value="{{$members->price}}">
        </div>
        <div class="form-group">
          <label>Product Image</label><br>
          <img style="height: 150px; width: 130px;"   src="{{asset($members->image1)}}">
            <input type="hidden" name="image1" value="{{$members->image1}}">
            <input type="file" name="image1">
            <p class="help-block">Optional Size: 750px x 500px</p>
        </div>
        <div class="form-group">
          <label>Product Image</label><br>
          <img style="height: 150px; width: 130px;"   src="{{asset($members->image2)}}">
            <input type="hidden" name="image2" value="{{$members->image2}}">
            <input type="file" name="image2">
            <p class="help-block">Optional Size: 750px x 500px</p>
        </div>
        <div class="form-group">
          <label>Product Image</label><br>
          <img style="height: 150px; width: 130px;"   src="{{asset($members->image3)}}">
            <input type="hidden" name="image3" value="{{$members->image3}}">
            <input type="file" name="image3">
            <p class="help-block">Optional Size: 750px x 500px</p>
        </div>
        <div class="form-group">
          <label>Product Image</label><br>
          <img style="height: 150px; width: 130px;"   src="{{asset($members->image4)}}">
            <input type="hidden" name="image4" value="{{$members->image4}}">
            <input type="file" name="image4">
            <p class="help-block">Optional Size: 750px x 500px</p>
        </div>
        <div class="form-group">
          <label>Product Image</label><br>
          <img style="height: 150px; width: 130px;"   src="{{asset($members->image5)}}">
            <input type="hidden" name="image5" value="{{$members->image5}}">
            <input type="file" name="image5">
            <p class="help-block">Optional Size: 750px x 500px</p>
        </div>


         <!-------- Product Details-------------------------------->
      <label style="font-size:18px;">Product Details:</label>
        <div class="form-group">
          <label>Product Name</label>
          <input type="text" class="form-control" name="product_name" value="{{$members->product_name}}">
        </div> 
        <div class="form-group">
          <label>Product Style no.</label>
          <input type="text" class="form-control" name="product_style_no" value="{{$members->product_style_no}}">
        </div>
        <div class="form-group">
          <label>Product Width</label>
          <input type="text" class="form-control" name="product_width" value="{{$members->product_width}}">
        </div> 
        <div class="form-group">
          <label>Product height</label>
          <input type="text" class="form-control" name="product_height" value="{{$members->product_height}}">
        </div> 
        <div class="form-group">
          <label>Product Length</label>
          <input type="text" class="form-control" name="product_length" value="{{$members->product_length}}">
        </div> 

      <!-------- Metals  Details-------------------------------->
      <label style="font-size:18px;">Metals Details:</label>
        <div class="form-group">
          <label>Metals</label>
          <input type="text" class="form-control" name="metal_name" value="{{$members->metal_name}}">
        </div> 
        <div class="form-group">
          <label>Metals Purity</label>
          <input type="text" class="form-control" name="metal_purity" value="{{$members->metal_purity}}">
        </div>
        <div class="form-group">
          <label>Metals Wt. approx</label>
          <input type="text" class="form-control" name="metal_weight" value="{{$members->metal_weight}}">
        </div> 
      <!-------- Diamond  Details-------------------------------->
      <label style="font-size:18px;">Diamond Details:</label>
        <div class="form-group">
          <label>Total no. of Diamonds</label>
          <input type="text" class="form-control" name="diamond_total_no" value="{{$members->diamond_total_no}}">
        </div> 
        <div class="form-group">
          <label>Total wt. approx</label>
          <input type="text" class="form-control" name="diamond_total_wt" value="{{$members->diamond_total_wt}}">
        </div> 
        <div class="form-group">
          <label>Clarity</label>
          <input type="text" class="form-control" name="diamond_clarity" value="{{$members->diamond_clarity}}">
        </div> 
        <div class="form-group">
          <label>Colour</label>
          <input type="text" class="form-control" name="diamond_color" value="{{$members->diamond_color}}">
        </div>
        <div class="form-group">
          <label>Shapes</label>
          <input type="text" class="form-control" name="diamond_shape" value="{{$members->diamond_shape}}">
        </div> 
        <div class="form-group">
          <label>Settings</label>
          <input type="text" class="form-control" name="diamond_setting" value="{{$members->diamond_setting}}">
        </div> 

      <!-------- Gemmstone   Details-------------------------------->
      <label style="font-size:18px;">Gemstone Details:</label>
        <div class="form-group">
          <label>Total no. of Gemstone</label>
          <input type="text" class="form-control" name="gemstone_total_no" value="{{$members->gemstone_total_no}}">
        </div> 
        <div class="form-group">
          <label>Gemstone Type</label>
          <input type="text" class="form-control" name="gemstone_type" value="{{$members->gemstone_type}}">
        </div> 
        <div class="form-group">
          <label>Colour</label>
          <input type="text" class="form-control" name="gemstone_color" value="{{$members->gemstone_color}}">
        </div>
        <div class="form-group">
          <label>Shapes</label>
          <input type="text" class="form-control" name="gemstone_shape" value="{{$members->gemstone_shape}}">
        </div> 
        <div class="form-group">
          <label>Weights</label>
          <input type="text" class="form-control" name="gemstone_weight" value="{{$members->gemstone_weight}}">
        </div> 
        <div class="form-group">
          <label>Settings Type</label>
          <input type="text" class="form-control" name="gemstone_setting" value="{{$members->gemstone_setting}}">
        </div> 

      <!--------Price Breakup-------------------------------->
      <label style="font-size:18px;">Price Breakup Details:</label>
        <div class="form-group">
          <label>Metal</label>
          <input type="text" class="form-control" name="price_breakup_metal" value="{{$members->price_breakup_metal}}">
        </div> 
        <div class="form-group">
          <label>Diamond</label>
          <input type="text" class="form-control" name="price_breakup_diamond" value="  {{$members->price_breakup_diamond}}">
        </div> 
        <div class="form-group">
          <label>Gemstone</label>
          <input type="text" class="form-control" name="price_breakup_gemstone" value="{{$members->price_breakup_gemstone}}">
        </div>
        <div class="form-group">
          <label>Making</label>
          <input type="text" class="form-control" name="price_breakup_making" value="{{$members->price_breakup_making}}">
        </div> 
        <div class="form-group">
          <label>GST</label>
          <input type="text" class="form-control" name="price_breakup_gst" value="{{$members->price_breakup_gst}}">
        </div> 
        <div class="form-group">
          <label>Discount</label>
          <input type="text" class="form-control" name="price_breakup_discount" value="{{$members->price_breakup_discount}}">
        </div>
        <div class="form-group">
          <label>Scheme</label>
          <input type="text" class="form-control" name="price_breakup_scheme" value="{{$members->price_breakup_scheme}}">
        </div> 
        <div class="form-group">
          <label>Total</label>
          <input type="text" class="form-control" name="price_breakup_total" value="{{$members->price_breakup_total}}">
        </div> 







        <div class="form-group">
          <label>Description</label>
          <textarea id="editor1" name="description" rows="10" cols="80">{!! $members->description !!}</textarea>
        </div>
        <div class="form-group">
          <label>Meta Tag</label>
          <textarea rows="4" cols="15" style="resize: vertical;" class="form-control"   name="metatag">{!!$members->metatag!!}</textarea>
        </div> 
        <div class="form-group">
          @foreach(DB::table('jewellery_category')->where('parent', null)->get() as $r)
          <br><label>{{ $r->name }}</label><br>
            <div class="checkbox-container">
              @foreach(DB::table('jewellery_category')->where('parent', $r->name)->get() as $rc)
                <input type="checkbox" name="categories[]" value="{{ $rc->name }}"  @if(strpos($members->categories, $rc->name) !== false) checked @endif><label style="padding: 0px 10px; font-weight: 500;"> {{ $rc->name }}</label>
              @endforeach
            </div>
            <br>
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