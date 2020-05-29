@extends('main_master')

@section('main_content')
    
	<div class="col-md-8">
		@include('components/main_catalogue_grid')
	</div>

	@include('common/product_filters')

@stop