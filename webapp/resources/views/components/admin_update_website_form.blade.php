<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Fill your Website Details</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('update-website-submit') }}">
      @csrf
      <input type="hidden" name="id" value="{{ $website->id }}">
      <div class="box-body">
        <div class="form-group">
          <label>Website URL</label>
          <a href="{{ url('w/'.$website->domain) }}" target="_blank">{{ url('w/'.$website->domain) }}</a>
        </div>
        <div class="form-group">
          <label>Website Title</label>
          <input type="text" class="form-control" name="title" value="{{ $website->title }}" required autofocus>
        </div>
        <div class="form-group">
          @if($website->logo)
            <img src="{{ asset($website->logo) }}" style="width: 120px;"><br>
          @endif
          <label>Logo</label>
          <input type="file" name="image">
        </div>
        <div class="form-group">
          <label>About</label>
          <textarea name="about" class="form-control" style="resize: vertical;" required>{{ $website->about }}</textarea>
        </div>
        <div class="form-group">
          <label>Service Description</label>
          <textarea name="service_description" class="form-control" style="resize: vertical;" required>{{ $website->service_description }}</textarea>
        </div>
        <div class="form-group">
          <label>Address</label>
          <input type="text" class="form-control" name="address" value="{{ $website->address }}" required>
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control" name="phone" value="{{ $website->phone }}" required>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" name="email" value="{{ $website->email }}" required>
        </div>
        <div class="form-group">
          <label>Facebook Link</label>
          <input type="text" class="form-control" name="facebook" value="{{ $website->facebook }}">
        </div>
        <div class="form-group">
          <label>Twitter Link</label>
          <input type="text" class="form-control" name="twitter" value="{{ $website->twitter }}">
        </div>
        <div class="form-group">
          <label>Instagram Link</label>
          <input type="text" class="form-control" name="instagram" value="{{ $website->instagram }}">
        </div>
      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div><!-- /.box -->
  <!-- SLIDERS -->
<!-- general form elements -->
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add Slider Images for your Website</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('add-website-slider-submit') }}">
      @csrf
      <input type="hidden" name="id" value="{{ $website->id }}">
      <div class="box-body">
        <div class="form-group">
          <label>Slider Image</label>
          <input type="file" name="image" required>
          <p class="help-block">Required Size: 1920px x 990px</p>
        </div>
      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div><!-- /.box -->
  <div class="box">
        <div class="box-header">
          <h3 class="box-title">Sliders</h3>
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
            	@foreach($sliders as $r)
              <tr>
                <td>{{ $count++ }}</td>
                <td><img src="{{ asset($r->image) }}" style="width: 120px;"></td>
                <td>
                	<a href="{{ url('delete-slider/'.$r->id) }}" class="btn btn-danger btn-sm">Delete</a>
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

<!-- SERVICES -->
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add Services to your Website</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form enctype="multipart/form-data" method="post" action="{{ url('add-website-service-submit') }}">
      @csrf
      <input type="hidden" name="id" value="{{ $website->id }}">
      <div class="box-body">
        <div class="form-group">
          <label>Service Title</label>
          <input type="text" class="form-control" name="title" required autofocus>
        </div>
        <div class="form-group">
          <label>Service Description</label>
          <input type="text" class="form-control" name="description" required>
        </div>
      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div><!-- /.box -->
  <div class="box">
        <div class="box-header">
          <h3 class="box-title">Services</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          <table id="example3" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>S.No.</th>
                <th>Title</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            	<?php $count = 1; ?>
            	@foreach($services as $r)
              <tr>
                <td>{{ $count++ }}</td>
                <td>{{ $r->title }}</td>
                <td>
                	<a href="{{ url('delete-service/'.$r->id) }}" class="btn btn-danger btn-sm">Delete</a>
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
