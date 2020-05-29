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
                <th>Name</th>
                <th>Designation</th>
                <th>Association</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            	<?php $count = 1; ?>
            	@foreach($members as $r)
              <tr>
                <td>{{ $count++ }}</td>
                <td><img src="{{ url($r->image) }}" style="width: 80px;"></td>
                <td>{{ $r->name }}</td>
                <td>{{ $r->designation }}</td>
                <td>{{ $r->association }}</td>
                <td><a href="{{ url('delete-association-member/'.$r->id) }}" class="btn btn-danger btn-sm">Delete</a>
                  <a href="{{ url('edit-association-member/'.$r->id) }}" class="btn btn-info btn-sm" title="edit"> <i class="fa fa-edit"></i></a></td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>S.No.</th>
                <th>Image</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Association</th>
                <th>Actions</th>
              </tr>
            </tfoot>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    
</div>