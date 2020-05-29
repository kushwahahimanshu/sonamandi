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
                <th>Customer Name</th> 
                <th>Phone</th> 
                <th>Catalogue ID</th>
               <!--  <th>Upload Person Name</th>  --> 
              </tr>
            </thead>
            <tbody>
            	<?php $count = 1; ?>
            	@foreach($qutation as $r)
              <tr>
                <td>{{ $count++ }}</td> 
                <td>{{ $r->name }}</td>
                <td>{{ $r->phone_no }}</td>
                <td>{{ $r->cat_id }}</td>
                <!-- <td>{{ $r->user_id}}</td>   -->
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>S.No.</th>
                <th>Customer Name</th> 
                <th>Phone</th> 
                <th>Catalogue ID</th>
                <!-- <th>Upload Person Name</th>   -->
              </tr>
            </tfoot>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    
</div>