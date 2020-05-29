<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Vendor Details</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('update-directory') }}">
      @csrf
      <input type="hidden" class="form-control"  name="id" value="{{$vendor->id}}">
      <div class="box-body"> 
        <div class="form-group">
          <label>M/S</label>
          <input type="text" class="form-control" name="ms"  value="{{$vendor->ms}}">
        </div>
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" value="{{$vendor->name}}">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="email" value="{{$vendor->email}}">
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control" name="phone1" value="{{$vendor->phone1}}">
        </div>
        <div class="form-group">
          <label>Phone (optional)</label>
          <input type="text" class="form-control" name="phone2" value="{{$vendor->phone2}}">
        </div>
        <!-- <div class="form-group">
          <label>Deals in</label><br>
          <input type="checkbox" class="form-control" name="deals_in[]" id="silver" value="Silver" @if(strpos($vendor->deals_in, 'Silver') !== false) checked @endif > <label for="silver" style="font-weight: 500;">Silver</label> 
          <input type="checkbox" class="form-control" name="deals_in[]" id="gold" value="Gold" @if(strpos($vendor->deals_in, 'Gold') !== false) checked @endif > <label for="gold" style="font-weight: 500;">Gold</label> 
          <input type="checkbox" class="form-control" name="deals_in[]" id="diamond" value="Diamond" @if(strpos($vendor->deals_in, 'Diamond') !== false) checked @endif > <label for="diamond" style="font-weight: 500;">Diamond</label> 
          <input type="checkbox" class="form-control" name="deals_in[]" id="platinum" value="Platinum" @if(strpos($vendor->deals_in, 'Platinum') !== false) checked @endif > <label for="platinum" style="font-weight: 500;">Platinum</label> 
          <input type="checkbox" class="form-control" name="deals_in[]" id="fashion_jewellery" value="Fashion Jewellery" @if(strpos($vendor->deals_in, 'Fashion Jewellery') !== false) checked @endif > <label for="fashion_jewellery" style="font-weight: 500;">Fashion Jewellery</label> 
        </div> -->
        <div class="form-group">
          <label>Type</label><br>
          <input type="checkbox" class="form-control" name="type[]" id="wholeseller" value="wholeseller" @if(strpos($vendor->type, 'wholeseller') !== false) checked @endif > <label for="wholeseller" style="font-weight: 500;">wholeseller</label> 
          <input type="checkbox" class="form-control" name="type[]" id="retailer" value="retailer" @if(strpos($vendor->type, 'retailer') !== false) checked @endif > <label for="retailer" style="font-weight: 500;">retailer</label> 
          <input type="checkbox" class="form-control" name="type[]" id="manufacture" value="manufacture" @if(strpos($vendor->type, 'manufacture') !== false) checked @endif > <label for="manufacture" style="font-weight: 500;">manufacture</label> 
          <input type="checkbox" class="form-control" name="type[]" id="importer" value="importer" @if(strpos($vendor->type, 'importer') !== false) checked @endif > <label for="importer" style="font-weight: 500;">importer</label> 
          <input type="checkbox" class="form-control" name="type[]" id="kariger" value="karigar" @if(strpos($vendor->type, 'karigar') !== false) checked @endif > <label for="kariger" style="font-weight: 500;">karigar</label> 
           <input type="checkbox" class="form-control" name="type[]" id="exporter" value="exporter" @if(strpos($vendor->type, 'exporter') !== false) checked @endif > <label for="exporter" style="font-weight: 500;">exporter</label> 
        </div>
        <div class="form-group">
          <label>Deals In</label>
          <input type="radio" class="form-control" name="deals_in" value="Jwellery" @if($vendor->deals_in=='Jwellery') checked @endif> Jwellery &nbsp;
          <input type="radio" class="form-control" name="deals_in" value="Accessory" @if($vendor->gold_purchase=='Accessory') checked @endif> Accessory&nbsp;
          <input type="radio" class="form-control" name="deals_in" value="Tools" @if($vendor->gold_purchase=='Tools') checked @endif> Tools&nbsp;
          <input type="radio" class="form-control" name="deals_in" value="Service" @if($vendor->gold_purchase=='Service') checked @endif> Service&nbsp;
          <input type="radio" class="form-control" name="deals_in" value="Others" @if($vendor->gold_purchase=='Others') checked @endif> Others
        </div>
        <div class="form-group">
          <label>Shop Timing</label>
          <input type="text" class="form-control" name="timing" placeholder="10:00 AM to 09:00 PM" value="{{$vendor->timing}}">
        </div>
        <div class="form-group">
          <label>Working Days</label>
          <input type="text" class="form-control" name="working_days" placeholder="Monday - Friday"value="{{$vendor->working_days}}" >
        </div>
        <div class="form-group">
          <label>Website</label>
          <input type="text" class="form-control" name="website" value="{{$vendor->website}}">
        </div>
        <div class="form-group">
          <label>Complete Address</label>
          <input type="text" class="form-control" name="address" value="{{$vendor->address}}">
        </div>
        <div class="form-group">
          <label>City</label>
          <input type="text" class="form-control" name="city" value="{{$vendor->city
        }}">
        </div>
        <div class="form-group">
          <label>Gold Purchase</label>
          <select name="gold_purchase" class="form-control">
            <option value="Yes" @if($vendor->gold_purchase=='Yes') selected @endif>Yes</option>
            <option value="No" @if($vendor->gold_purchase=='No') selected @endif>No</option>
          </select>
        </div>
        <div class="form-group">
          <label>GST</label>
          <select name="gst" class="form-control">
            <option value="GST" @if($vendor->gst=='GST') selected @endif>GST</option>
            <option value="NO_GST" @if($vendor->gst=='NO_GST') selected @endif>NO GST</option>
          </select>
        </div>
        <div class="form-group">
          <label>Buy Back</label>
          <select name="buy_back" class="form-control">
            <option value="Yes" @if($vendor->buy_back=='Yes') selected @endif>Yes</option>
            <option value="No" @if($vendor->buy_back=='No') selected @endif>No</option>
          </select>
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea id="editor1" name="description">{!! $vendor->description !!}</textarea>
        </div>
        <div class="form-group">
          <label>Image</label><br>
          <img style="height: 150px; width: 130px;"   src="{{asset($vendor->image1)}}">
            <input type="hidden" name="image1" value="{{$vendor->image1}}">
            <input type="file" name="image1">
        </div>
        <div class="form-group">
          <label>Image</label><br>
          <img style="height: 150px; width: 130px;"   src="{{asset($vendor->image2)}}">
            <input type="hidden" name="image2" value="{{$vendor->image2}}">
            <input type="file" name="image2">
        </div>
        <div class="form-group">
          <label>Image</label><br>
          <img style="height: 150px; width: 130px;"   src="{{asset($vendor->image3)}}">
            <input type="hidden" name="image3" value="{{$vendor->image3}}">
            <input type="file" name="image3">
        </div>
        <div class="form-group">
          <label>Image</label><br>
          <img style="height: 150px; width: 130px;"   src="{{asset($vendor->image4)}}">
            <input type="hidden" name="image4" value="{{$vendor->image4}}">
            <input type="file" name="image4">
        </div>
        <div class="form-group">
          <label>Image</label><br>
          <img style="height: 150px; width: 130px;"   src="{{asset($vendor->image5)}}">
            <input type="hidden" name="image5" value="{{$vendor->image5}}">
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