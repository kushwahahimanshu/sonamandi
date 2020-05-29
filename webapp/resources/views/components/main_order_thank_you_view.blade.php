<div class="row justify-content-center bg-white padding-15px-all">
    <div class="col-12 col-lg-8 text-center last-paragraph-no-margin">
        <h5 class="alt-font text-extra-dark-gray font-weight-600">Order Successfully Placed</h5>
        <div class="row">
        	<div class="col-12">
        		<p class="text-deep-pink" style="font-size: 20px;">Thank You</p>
        		<p>
        			<table style="width: 100%;">
        				<tr>
        					<th style="text-align: right; padding: 5px;">Order ID: </th>
        					<td style="text-align: left; padding: 5px;">{{ $order->id }}</td>
        				</tr>
        				<tr>
        					<th style="text-align: right; padding: 5px;">Product: </th>
        					<td style="text-align: left; padding: 5px;">{{ $order->title }}</td>
        				</tr>
        				<tr>
        					<th style="text-align: right; padding: 5px;">Order Total: </th>
        					<td style="text-align: left; padding: 5px;">{{ $order->price }}</td>
        				</tr>
        				<tr>
        					<th rowspan="2" style="text-align: right; vertical-align: top; padding: 5px;">Payment Mode: </th>
        					<td style="text-align: left; padding: 5px;">Cash on Delivery</td>
        				</tr>
        				<tr>
        					<td style="text-align: left; padding: 5px;"><small>Please pay the delivery person the order total.</small></td>
        				</tr>
        			</table>
        		</p>
        	</div>
        </div>
        <a href="{{ url('shop') }}" class="btn btn-deep-pink bg-blue btn-sm width-100 margin-20px-top">Continue Shopping</a>
    </div>
</div>