<div class="col-xs-12">
	<div class="box">
        <div class="box-header">
          <h3 class="box-title"></h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>S.No.</th>
                <th>Image</th>
                <th>Title</th>
                <th>Price</th>
                <th>Categories</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
            	<?php $count = 1; ?>
            	@foreach($products as $r)
              <tr>
                <td>{{ $count++ }}</td>
                <td><img src="{{ asset($r->image1) }}" style="width: 80px;"></td>
                <td>{{ $r->title }}</td>
                <td>{{ $r->price }}</td>
                <td>{{ $r->categories }}</td>
                <td> 
                  <a href="{{ url('delete-shop/'.$r->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                  <a href="{{ url('edit-shop/'.$r->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>S.No.</th>
                <th>Image</th>
                <th>Title</th>
                <th>Price</th>
                <th>Categories</th>
                <th>Action</th>
                
              </tr>
            </tfoot>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    
</div>