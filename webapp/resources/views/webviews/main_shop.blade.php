@extends('main_master')

@section('main_content')
    
	<div class="col-md-8 bg-white">
		@include('components/main_shop_list_view')
	</div>

	@include('common/product_filters')

@stop