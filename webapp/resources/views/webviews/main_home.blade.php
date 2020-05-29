@extends('main_master')

@section('main_content')
    
	<div class="col-md-8">
		@include('components/main_slider')
		@include('components/main_home_catalogue_block')
		@include('components/main_home_shop_block')
		@include('components/main_home_directory_block')
		@include('components/main_home_news_block')
		@include('components/main_home_blog_block')
		@include('components/main_home_jobs_block')
	</div> 
	
@stop