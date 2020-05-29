@if(session('success') != null)
    @if(session('success') == 1)
		<div class="alt-font" style="background-color: green; padding: 4px 10px; color: white; float: right; display: inline-block; font-size: 12px; border-radius: 5px;">Applied Successfully</div>&nbsp;
		<div class="alt-font" style="background-color: green; padding: 4px 10px; color: white; float: right; display: inline-block; font-size: 12px; border-radius: 5px;"><a href="{{url('jobs')}}" style="color:white;">Search More</a></div>
	@elseif(session('success') == 0)
		<div class="alert alert-danger alert-dismissable" style="margin-top: 20px;">
		    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		    Something went wrong please try again!
		</div>
	@endif
@endif