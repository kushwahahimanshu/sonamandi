<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Fill Person Details</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('add-blacklist-submit') }}">
      @csrf
      <div class="box-body">
        <div class="form-group">
          <label>Type</label>
          <select class="form-control" name="type">
            <option value="Retailer">Retailer</option>
            <option value="Wholesaler">Wholesaler</option>
            <option value="Karigar">Karigar</option>
            <option value="User">User</option>
            <option value="Buyer">Buyer</option>
          </select>
        </div>
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
          <label>M/S</label>
          <input type="text" class="form-control" name="ms" required>
        </div>
        <div class="form-group">
          <label>Image</label>
          <input type="file" name="image" required>
          <p class="help-block">Required Size: 500px x 500px</p>
        </div>
        <div class="form-group">
          <label>Image</label>
          <input type="file" name="image1">
          <p class="help-block">Optional Size: 500px x 500px</p>
        </div>
        <div class="form-group">
          <label>Image</label>
          <input type="file" name="image2">
          <p class="help-block">Optional Size: 500px x 500px</p>
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control" name="phone" >
        </div>
        <div class="form-group">
          <label>Location</label>
          <input type="text" class="form-control" name="location" required>
        </div>
        <div class="form-group">
          <label>City</label>
          <input type="text" class="form-control" name="city" required>
        </div>
        <div class="form-group">
          <label>Meta Tag</label>
          <textarea rows="4" cols="15" style="resize: vertical;" class="form-control"   name="metatag"></textarea>
        </div> 
        <div class="form-group">
          <label>Reason</label>
          <input type="text" class="form-control" name="reason" required>
        </div>
      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div><!-- /.box -->

</div><!--/.col (left) -->
