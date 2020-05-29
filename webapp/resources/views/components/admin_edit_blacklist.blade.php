<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Person Details</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('update-blacklist') }}">
      @csrf
      <div class="box-body">
        <input type="hidden" name="id" value="{{$members->id}}">
        <div class="form-group">
          <label>Type</label>
          <select class="form-control" name="type">
            <option  value="Retailer" @if($members->type=='Retailer') selected @endif>Retailer</option>
            <option value="Wholesaler" @if($members->type=='Wholesaler') selected @endif>Wholesaler</option>
            <option value="Karigar" @if($members->type=='Kariger') selected @endif>Karigar</option>
            <option value="User" @if($members->type=='User') selected @endif>User</option>
            <option value="Buyer" @if($members->type=='Buyer') selected @endif>Buyer</option>
          </select>
        </div>
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" value="{{$members->name}}">
        </div>
        <div class="form-group">
          <label>M/S</label>
          <input type="text" class="form-control" name="ms" value="{{$members->ms}}">
        </div>
        <div class="form-group">
          <label>Image</label><br>
          <img style="height: 150px; width: 130px;"   src="{{asset($members->image)}}">
            <input type="hidden" name="image" value="{{$members->image}}">
            <input type="file" name="image">
          <p class="help-block">Optional Size: 500px 500px</p>
        </div>
        <div class="form-group">
          <label>Image</label><br>
          <img style="height: 150px; width: 130px;"   src="{{asset($members->image1)}}">
            <input type="hidden" name="image1" value="{{$members->image1}}">
            <input type="file" name="image1">
          <p class="help-block">Optional Size: 500px 500px</p>
        </div>
        <div class="form-group">
          <label>Image</label><br>
          <img style="height: 150px; width: 130px;"   src="{{asset($members->image2)}}">
            <input type="hidden" name="image2" value="{{$members->image2}}">
            <input type="file" name="image2">
          <p class="help-block">Optional Size: 500px 500px</p>
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control" name="phone" value="{{$members->phone}}">
        </div>
        <div class="form-group">
          <label>Location</label>
          <input type="text" class="form-control" name="location" value="{{$members->location}}">
        </div>
        <div class="form-group">
          <label>City</label>
          <input type="text" class="form-control" name="city" value="{{$members->city}}">
        </div>
        <div class="form-group">
          <label>Meta Tag</label>
          <textarea rows="4" cols="15" style="resize: vertical;" class="form-control"   name="metatag">{!!$members->metatag!!}</textarea>
        </div> 
        <div class="form-group">
          <label>Reason</label>
          <input type="text" class="form-control" name="reason" value="{{$members->reason}}">
        </div>
      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div><!-- /.box -->

</div><!--/.col (left) -->
