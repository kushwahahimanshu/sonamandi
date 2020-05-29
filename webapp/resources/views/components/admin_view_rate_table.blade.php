<div class="col-xs-12">
  <div class="box">
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>S.No.</th>
            <th>14 KT</th>
            <th>18 KT</th>
            <th>22 KT</th>
            <th>24 KT</th>
            <th>1 GM </th>
            <th>Date</th> 
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php $count = 1; ?>
          @foreach($viewrate as $r)
          <tr>
            <td>{{ $count++ }}</td> 
            <td>{{ $r->kt_fourteen  }}</td>
            <td>{{ $r->kt_eighteen }}</td>
            <td>{{ $r->kt_twentytwo  }}</td>
            <td>{{ $r->kt_twentyfour}}</td>
            <td>{{ $r->gm_one  }}</td>
            <td>{{ $r->rate_date }}</td> 
            <td>
              <!-- @if($r->active == 1)
                <a href="{{ url('toggle-ad-active-status/0/'.$r->id) }}" class="btn btn-danger btn-sm">Deactivate</a>
              @else
                <a href="{{ url('toggle-ad-active-status/1/'.$r->id) }}" class="btn btn-success btn-sm">Activate</a>
              @endif  -->
                <a href="{{ url('delete-rate/'.$r->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    <a href="{{ url('edit-rate/'.$r->id) }}" class="btn btn-info btn-sm" title="edit"> <i class="fa fa-edit"></i></a>
            </td>
            
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>S.No.</th>
            <th>14 KT</th>
            <th>18 KT</th>
            <th>22 KT</th>
            <th>24 KT</th>
            <th>1 GM </th>
            <th>Date</th> 
            <th>Actions</th>
          </tr>
        </tfoot>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->

</div>