@extends('main_master')

@section('main_content')
    
	<div class="col-md-8 bg-white">
		@include('components/main_news_list_view')
	</div> 

	@include('common/news_filters')


@stop