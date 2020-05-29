@extends('admin_master')

@section('main_content')

	<div class="row">
		@include('components/admin_update_website_form')
		@include('components/admin_update_website_testimonials_services_form')
	</div>

@stop

@section('scripts')

<script type="text/javascript">
  $(function () {
    $("#example3").DataTable();
    $('#example4').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

@stop