<div class="col-md-2 d-none d-md-block" style="position: fixed; top: 170px; left: 0px; height: calc(100vh - 170px);">
	<h6 style="text-align: center;background-color: #bd9431; color: white; padding: 10px; font-size: 16px; margin-bottom: 15px;">Advertisements</h6>
	<marquee class=" bg-white" direction="up" onmouseover="this.stop()" onmouseout="this.start()" style="height: 100%">
		@foreach($ads as $r)
			<a href="@if($r->link != null) {{ url($r->link) }} @else # @endif">
				<img src="{{ asset($r->image) }}" alt="{{ $r->title }}" style="width: 100%;">
			</a>
			<br>
			<br>		
		@endforeach
	</marquee>
</div>

<div class="col-md-2 d-none d-md-block" style="position: fixed; top: 170px; right: 0px; height: calc(100vh - 170px);">
	<h6 style="text-align: center;background-color: #bd9431; color: white; padding: 10px; font-size: 16px; margin-bottom: 15px;">Advertisements</h6>
	<marquee class=" bg-white" direction="up" onmouseover="this.stop()" onmouseout="this.start()" style="height: 100%">
		<?php $count = 1;?>
		@foreach($ads as $r)
			<a href="@if($r->link != null) {{ url($r->link) }} @else # @endif">
				<img src="{{ asset($r->image) }}" alt="{{ $r->title }}" style="width: 100%;">
			</a>
			<br>
			<br>
		@endforeach
	</marquee>
</div>

<!-- <div class="col-md-2 d-none d-md-block" style="position: fixed; top: 170px; left: 0px; height: calc(100vh - 170px);">
	<h6 style="text-align: center;background-color: #bd9431; color: white; padding: 10px; font-size: 16px; margin-bottom: 15px;">Advertisements</h6>

	<div class="scroller bg-white" id="demo1" style="height: 100%">
	  	<ul style="list-style-type: none; padding-left: 0;">
	  		@foreach($ads as $r)
	    		<li style="margin: 10px 0;">
	    			<a href="@if($r->link != null) {{ url($r->link) }} @else # @endif">
						<img src="{{ asset($r->image) }}" alt="{{ $r->title }}" style="width: 100%;">
					</a>
	    		</li>
    		@endforeach
		</ul>
	</div> -->

	<!-- <marquee class=" bg-white" direction="up" onmouseover="this.stop()" onmouseout="this.start()" style="height: 100%">
		@foreach($ads as $r)
			<a href="@if($r->link != null) {{ url($r->link) }} @else # @endif">
				<img src="{{ asset($r->image) }}" alt="{{ $r->title }}" style="width: 100%;">
			</a>
			<br>
			<br>		
		@endforeach
	</marquee> -->
<!-- </div> -->