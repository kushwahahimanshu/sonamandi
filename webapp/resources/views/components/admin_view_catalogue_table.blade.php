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
                <th>Categories</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            	<?php $count = 1; ?>
            	@foreach($catalogue as $r)
              <tr>
                <td>{{ $count++ }}</td>
                <td><img src="{{ url($r->image) }}" style="width: 80px;"></td>
                <td>{{ $r->title }}</td>
                <td>{{ $r->categories }}</td>
                <td>
                	@if($r->active == 1)
                		<a href="{{ url('toggle-catalogue-active-status/0/'.$r->id) }}" class="btn btn-danger btn-sm">Deactivate</a>
            		  @else
                		<a href="{{ url('toggle-catalogue-active-status/1/'.$r->id) }}" class="btn btn-success btn-sm">Activate</a>
                	@endif
                  <a href="{{ url('delete-image/'.$r->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                  <a href="{{ url('edit-catalogue/'.$r->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>S.No.</th>
                <th>Image</th>
                <th>Title</th>
                <th>Categories</th>
                <th>Actions</th>
              </tr>
            </tfoot>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    
</div>