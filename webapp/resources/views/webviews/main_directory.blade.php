@extends('main_master')

@section('main_content')
    
	<div class="col-md-8">
		@include('components/main_directory_list')
	</div>

	@include('common/directory_filters')

@stop