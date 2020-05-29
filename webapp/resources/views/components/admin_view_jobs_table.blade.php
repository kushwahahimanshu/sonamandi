<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="col-xs-12">
	<div class="box">
        <div class="box-header">
          <h3 class="box-title"></h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>S.No.</th>
                <th>Job Details</th>
                <th>Location</th>
                <th>Contact Details</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            	<?php $count = 1; ?>
            	@foreach($jobs as $r)
              <tr>
                <td>{{ $count++ }}</td>
                <td>
                  Job Title: {{ $r->job_title }}<br>
                  Salary: {{ $r->salary }}<br>
                  Gender: {{ $r->gender }}<br>
                  Working Hours: {{ $r->timing }}<br>
                  Experience: {{ $r->experience }}<br>
                  Language: {{ $r->language }}
                </td>
                <td>{{ $r->location }}</td>
                <td>
                  Person: {{ $r->contact_person }}<br>
                  Phone: {{ $r->phone }}<br>
                  Time to Call: {{ $r->time_to_call }}<br>
                  Can Whatsapp: {{ $r->can_whatsapp }}<br>
                </td>
                
                <td>
                  <a href="{{ url('delete-job/'.$r->id) }}" class="btn btn-danger btn-sm">Delete</a>
                  <a href="{{ url('edit-job/'.$r->id) }}" class="btn btn-info btn-sm">Edit</a>
                  
                  <a href="{{ url('my-job-applications/'.$r->id) }}" class="btn btn-primary btn-sm">My Applications</a>

                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>S.No.</th>
                <th>Job Details</th>
                <th>Location</th>
                <th>Contact Details</th>
                <th>Actions</th>
              </tr>
            </tfoot>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    
</div>