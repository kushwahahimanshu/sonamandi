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
            <th>M/S</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>City</th>
          </tr>
        </thead>
        <tbody>
        	<?php $count = 1; ?>
        	@foreach($directory as $r)
          <tr>
            <td>{{ $count++ }}</td>
            <td>{{ $r->ms }}</td>
            <td>{{ $r->name }}</td>
            <td>{{ $r->email }}</td>
            <td>{{ $r->phone1 }}</td>
            <td>{{ $r->address }}</td>
            <td>{{ $r->city }}</td>
            <td> 
              <a href="{{ url('delete-directory/'.$r->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
              <a href="{{ url('edit-directory/'.$r->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>S.No.</th>
            <th>M/S</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>City</th>
          </tr>
        </tfoot>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
    
</div>