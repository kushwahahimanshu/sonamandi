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
                <th>Name</th> 
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            	<?php $count = 1; ?>
            	@foreach($metatag as $r)
              <tr>
                <td>{{ $count++ }}</td> 
                <td>{{ $r->name }}</td> 
                <td> 
                  <a href="{{ url('edit-meta-tag/'.$r->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>S.No.</th>
                <th>Name</th> 
                <th>Actions</th>
              </tr>
            </tfoot>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    
</div>