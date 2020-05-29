<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <h4> Import the Excel File of Directory</h4>
    <form action="{{url('import-directory') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Directory Data</button>
                <!-- <a class="btn btn-warning" href="{{url('export-directory') }}">Export Directory Data</a> -->
    </form>
    <div class="box-header with-border">
      <h3 class="box-title">Fill Vendor Details</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('add-directory-submit') }}">
      @csrf
      <div class="box-body">
        <div class="form-group">
          <label>M/S</label>
          <input type="text" class="form-control" name="ms" required autofocus>
        </div>
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control" name="phone1" required>
        </div>
        <div class="form-group">
          <label>Phone (optional)</label>
          <input type="text" class="form-control" name="phone2">
        </div>
       <!--  <div class="form-group">
          <label>Deals in</label><br>
          <input type="checkbox" class="form-control" name="deals_in[]" id="silver" value="Silver" checked> <label for="silver" style="font-weight: 500;">Silver</label> 
          <input type="checkbox" class="form-control" name="deals_in[]" id="gold" value="Gold" checked> <label for="gold" style="font-weight: 500;">Gold</label> 
          <input type="checkbox" class="form-control" name="deals_in[]" id="diamond" value="Diamond" checked> <label for="diamond" style="font-weight: 500;">Diamond</label> 
          <input type="checkbox" class="form-control" name="deals_in[]" id="platinum" value="Platinum" checked> <label for="platinum" style="font-weight: 500;">Platinum</label> 
          <input type="checkbox" class="form-control" name="deals_in[]" id="fashion_jewellery" value="Fashion Jewellery" checked> <label for="fashion_jewellery" style="font-weight: 500;">Fashion Jewellery</label> 
        </div> -->
        <div class="form-group">
          <label>Type</label><br>
          <input type="checkbox" class="form-control" name="type[]" id="wholeseller" value="wholeseller" checked> <label for="wholeseller" style="font-weight: 500;">wholeseller</label> 
          <input type="checkbox" class="form-control" name="type[]" id="retailer" value="retailer" checked> <label for="retailer" style="font-weight: 500;">retailer</label> 
          <input type="checkbox" class="form-control" name="type[]" id="manufacturer" value="manufacturer" checked> <label for="manufacturer" style="font-weight: 500;">manufacturer</label> 
          <input type="checkbox" class="form-control" name="type[]" id="importer" value="importer" checked> <label for="importer" style="font-weight: 500;">importer</label> 
          <input type="checkbox" class="form-control" name="type[]" id="karigar" value="karigar" checked> <label for="karigar" style="font-weight: 500;">karigar</label> 
          <input type="checkbox" class="form-control" name="type[]" id="exportor" value="exportor" checked> <label for="exportor" style="font-weight: 500;">exportor</label> 
        </div>
        <div class="form-group">
          <label>Deals In</label><br>
          <input type="radio" class="form-control" name="deals_in" value="Jwellery" checked> Jwellery &nbsp;
          <input type="radio" class="form-control" name="deals_in" value="Accessory"> Accessory&nbsp;
          <input type="radio" class="form-control" name="deals_in" value="Tools"> Tools&nbsp;
          <input type="radio" class="form-control" name="deals_in" value="Service"> Service&nbsp;
          <input type="radio" class="form-control" name="deals_in" value="Others"> Others
        </div>
        <div class="form-group">
          <label>Shop Timing</label>
          <input type="text" class="form-control" name="timing" placeholder="10:00 AM to 09:00 PM" required>
        </div>
        <div class="form-group">
          <label>Working Days</label>
          <input type="text" class="form-control" name="working_days" placeholder="Monday - Friday" required>
        </div>
        <div class="form-group">
          <label>Website</label>
          <input type="text" class="form-control" name="website">
        </div>
        <div class="form-group">
          <label>Complete Address</label>
          <input type="text" class="form-control" name="address" required>
        </div>
        <div class="form-group">
          <label>City</label>
          <input type="text" class="form-control" name="city" required>
        </div>
        <div class="form-group">
          <label>Gold Purchase</label>
          <select name="gold_purchase" class="form-control">
            <option value="Yes" selected>Yes</option>
            <option value="No">No</option>
          </select>
        </div>
        <div class="form-group">
          <label>GST</label>
          <select name="gst" class="form-control">
            <option value="GST" selected>GST</option>
            <option value="NO_GST">NO GST</option>
          </select>
        </div>
        <div class="form-group">
          <label>Buy Back</label>
          <select name="buy_back" class="form-control">
            <option value="Yes" selected>Yes</option>
            <option value="No">No</option>
          </select>
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea id="editor1" name="description"></textarea>
        </div>
        <div class="form-group">
          <label>Meta Tag</label>
          <textarea rows="4" cols="15" style="resize: vertical;" class="form-control"   name="metatag"></textarea>
        </div> 
        <div class="form-group">
          <label>Image</label>
          <input type="file" name="image1" required>
        </div>
        <div class="form-group">
          <label>Image</label>
          <input type="file" name="image2">
        </div>
        <div class="form-group">
          <label>Image</label>
          <input type="file" name="image3">
        </div>
        <div class="form-group">
          <label>Image</label>
          <input type="file" name="image4">
        </div>
        <div class="form-group">
          <label>Image</label>
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