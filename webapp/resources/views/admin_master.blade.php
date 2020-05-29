<!DOCTYPE html>
<html>
  <head>
  	@include('common/admin_headscripts')
  </head>
  <body @if (Route::has('login')) @auth class="skin-blue fixed sidebar-mini" @else class="login-page" @endauth @endif>
  	@if (Route::has('login')) 
  		@auth 
			<div class="wrapper">
				@include('common/admin_header')
				@include('common/admin_sidebar')
				<div class="content-wrapper">
					@include('common/admin_page_title')
					<!-- Main content -->
    				<section class="content">
						@include('common/admin_message_box')
						@yield('main_content')
					</section>
				</div>
			</div>
		@else 
			@yield('main_content')
		@endauth 
	@endif
  	
  	@include('common/admin_footscript')
  </body>
</html>