@if(session('success') != null)
    @if(session('success') == 1)
		<div class="alert alert-success alert-dismissable" style="margin-top: 20px;">
		    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		    Task completed successful!
		</div>
	@elseif(session('success') == 0)
		<div class="alert alert-danger alert-dismissable" style="margin-top: 20px;">
		    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		    Something went wrong please try again!
		</div>
	@endif
@endif