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
            <th>Order Details</th>
            <th>Delivery Details</th>
          </tr>
        </thead>
        <tbody>
        	<?php $count = 1; ?>
        	@foreach($vendororder as $r)
          <tr>
            <td>{{ $count++ }}</td>
            <td>
                @php
                    $p = DB::table('shop_new')->where('id', $r->product_id)->first();
                @endphp
                <img src="{{ asset($p->image1) }}" style="width: 120px; float: left; margin-right: 10px;">
                Product: {{ $p->title }}<br> 
                Price: ₹ {{ $p->price }}<br>
                Order Status:
                @if($r->status == 0)
                    <span class="label label-warning">In Progress</span>
                @elseif($r->status == 1)
                    <span class="label label-success">Delivered</span>
                @else
                    <span class="label label-danger">Cancelled</span>
                @endif
            </td>
            <td>
                Name: {{ $r->name }}<br>
                Phone: {{ $r->phone }}<br>
                Address: {{ $r->address }}, {{ $r->city }}, {{ $r->state }} - {{ $r->pin }}
            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>S.No.</th>
            <th>Order Details</th>
            <th>Delivery Details</th>
          </tr>
        </tfoot>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
    
</div>