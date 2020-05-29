<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Vendor Details</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('update-directory') }}">
      @csrf
      <div class="box-body">
        <input type="hidden" name="id" value="{{$members->id}}">
        <div class="form-group">
          <label>M/S</label>
          <input type="text" class="form-control" name="ms"  value="{{$members->ms}}">
        </div>
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" value="{{$members->name}}">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="email" value="{{$members->email}}">
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control" name="phone1" value="{{$members->phone1}}">
        </div>
        <div class="form-group">
          <label>Phone (optional)</label>
          <input type="text" class="form-control" name="phone2" value="{{$members->phone2}}">
        </div>
        <!-- <div class="form-group">
          <label>Deals in</label><br>
          <input type="checkbox" class="form-control" name="deals_in[]" id="silver" value="Silver" @if(strpos($members->deals_in, 'Silver') !== false) checked @endif > <label for="silver" style="font-weight: 500;">Silver</label> 
          <input type="checkbox" class="form-control" name="deals_in[]" id="gold" value="Gold" @if(strpos($members->deals_in, 'Gold') !== false) checked @endif > <label for="gold" style="font-weight: 500;">Gold</label> 
          <input type="checkbox" class="form-control" name="deals_in[]" id="diamond" value="Diamond" @if(strpos($members->deals_in, 'Diamond') !== false) checked @endif > <label for="diamond" style="font-weight: 500;">Diamond</label> 
          <input type="checkbox" class="form-control" name="deals_in[]" id="platinum" value="Platinum" @if(strpos($members->deals_in, 'Platinum') !== false) checked @endif > <label for="platinum" style="font-weight: 500;">Platinum</label> 
          <input type="checkbox" class="form-control" name="deals_in[]" id="fashion_jewellery" value="Fashion Jewellery" @if(strpos($members->deals_in, 'Fashion Jewellery') !== false) checked @endif > <label for="fashion_jewellery" style="font-weight: 500;">Fashion Jewellery</label> 
        </div> -->
        <div class="form-group">
          <label>Type</label><br>
          <input type="checkbox" class="form-control" name="type[]" id="wholeseller" value="wholeseller" @if(strpos($members->type, 'wholeseller') !== false) checked @endif > <label for="wholeseller" style="font-weight: 500;">wholeseller</label> 
          <input type="checkbox" class="form-control" name="type[]" id="retailer" value="retailer" @if(strpos($members->type, 'retailer') !== false) checked @endif > <label for="retailer" style="font-weight: 500;">retailer</label> 
          <input type="checkbox" class="form-control" name="type[]" id="manufacture" value="manufacture" @if(strpos($members->type, 'manufacture') !== false) checked @endif > <label for="manufacture" style="font-weight: 500;">manufacture</label> 
          <input type="checkbox" class="form-control" name="type[]" id="importer" value="importer" @if(strpos($members->type, 'importer') !== false) checked @endif > <label for="importer" style="font-weight: 500;">importer</label> 
          <input type="checkbox" class="form-control" name="type[]" id="kariger" value="karigar" @if(strpos($members->type, 'karigar') !== false) checked @endif > <label for="kariger" style="font-weight: 500;">karigar</label> 
           <input type="checkbox" class="form-control" name="type[]" id="exporter" value="exporter" @if(strpos($members->type, 'exporter') !== false) checked @endif > <label for="exporter" style="font-weight: 500;">exporter</label> 
        </div>
        <div class="form-group">
          <label>Deals In</label>
          <input type="radio" class="form-control" name="deals_in" value="Jwellery" @if($members->deals_in=='Jwellery') checked @endif> Jwellery &nbsp;
          <input type="radio" class="form-control" name="deals_in" value="Accessory" @if($members->gold_purchase=='Accessory') checked @endif> Accessory&nbsp;
          <input type="radio" class="form-control" name="deals_in" value="Tools" @if($members->gold_purchase=='Tools') checked @endif> Tools&nbsp;
          <input type="radio" class="form-control" name="deals_in" value="Service" @if($members->gold_purchase=='Service') checked @endif> Service&nbsp;
          <input type="radio" class="form-control" name="deals_in" value="Others" @if($members->gold_purchase=='Others') checked @endif> Others
        </div>
        <div class="form-group">
          <label>Shop Timing</label>
          <input type="text" class="form-control" name="timing" placeholder="10:00 AM to 09:00 PM" value="{{$members->timing}}">
        </div>
        <div class="form-group">
          <label>Working Days</label>
          <input type="text" class="form-control" name="working_days" placeholder="Monday - Friday"value="{{$members->working_days}}" >
        </div>
        <div class="form-group">
          <label>Website</label>
          <input type="text" class="form-control" name="website" value="{{$members->website}}">
        </div>
        <div class="form-group">
          <label>Complete Address</label>
          <input type="text" class="form-control" name="address" value="{{$members->address}}">
        </div>
        <div class="form-group">
          <label>City</label>
          <input type="text" class="form-control" name="city" value="{{$members->city
        }}">
        </div>
        <div class="form-group">
          <label>Gold Purchase</label>
          <select name="gold_purchase" class="form-control">
            <option value="Yes" @if($members->gold_purchase=='Yes') selected @endif>Yes</option>
            <option value="No" @if($members->gold_purchase=='No') selected @endif>No</option>
          </select>
        </div>
        <div class="form-group">
          <label>GST</label>
          <select name="gst" class="form-control">
            <option value="GST" @if($members->gst=='GST') selected @endif>GST</option>
            <option value="NO_GST" @if($members->gst=='NO_GST') selected @endif>NO GST</option>
          </select>
        </div>
        <div class="form-group">
          <label>Buy Back</label>
          <select name="buy_back" class="form-control">
            <option value="Yes" @if($members->buy_back=='Yes') selected @endif>Yes</option>
            <option value="No" @if($members->buy_back=='No') selected @endif>No</option>
          </select>
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea id="editor1" name="description">{!! $members->description !!}</textarea>
        </div>
        <div class="form-group">
          <label>Meta Tag</label>
          <textarea rows="4" cols="15" style="resize: vertical;"  class="form-control"   name="metatag">{!!$members->metatag!!}</textarea>
        </div> 
        <div class="form-group">
          <label>Image</label><br>
          <img style="height: 150px; width: 130px;"   src="{{asset($members->image1)}}">
            <input type="hidden" name="image1" value="{{$members->image1}}">
            <input type="file" name="image1">
        </div>
        <div class="form-group">
          <label>Image</label><br>
          <img style="height: 150px; width: 130px;"   src="{{asset($members->image2)}}">
            <input type="hidden" name="image2" value="{{$members->image2}}">
            <input type="file" name="image2">
        </div>
        <div class="form-group">
          <label>Image</label><br>
          <img style="height: 150px; width: 130px;"   src="{{asset($members->image3)}}">
            <input type="hidden" name="image3" value="{{$members->image3}}">
            <input type="file" name="image3">
        </div>
        <div class="form-group">
          <label>Image</label><br>
          <img style="height: 150px; width: 130px;"   src="{{asset($members->image4)}}">
            <input type="hidden" name="image4" value="{{$members->image4}}">
            <input type="file" name="image4">
        </div>
        <div class="form-group">
          <label>Image</label><br>
          <img style="height: 150px; width: 130px;"   src="{{asset($members->image5)}}">
            <input type="hidden" name="image5" value="{{$members->image5}}">
            <input type="file" name="image5">
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