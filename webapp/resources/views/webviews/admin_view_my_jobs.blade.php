@extends('admin_master')

@section('main_content')

	<div class="row">
		@if($flag==1)
		@include('components/admin_view_my_jobs_table')
		@elseif($flag==2)
		@include('components/admin_view_my_jobs_table')
		@endif
	</div>

@stop