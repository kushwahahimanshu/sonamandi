@extends('main_master')

@section('main_content')
    
	<div class="col-md-8 bg-white">
		@include('components/main_blogs_list_view')
	</div> 

	@include('common/blog_filters')


@stop