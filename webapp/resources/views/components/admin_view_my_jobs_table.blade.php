<div class="col-xs-12">
	<div class="box">
        <div class="box-header">
          <h3 class="box-title"></h3>
        </div> 
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>S.No.</th>
                <th>Job Details</th>
                <th>CV</th>
                <th>Applicant Details</th>
              </tr>
            </thead>
            <tbody>
            	<?php $count = 1; ?>
            	@foreach($jobs as $r)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>
                        @php
                            $j = DB::table('jobs')->where('id', $r->job_id)->first();
                        @endphp
                        Job Title: {{ $j->job_title }}<br>
                        Salary: {{ $j->salary }}<br>
                        Gender: {{ $j->gender }}<br>
                        Working Hours: {{ $j->timing }}<br>
                        Experience: {{ $j->experience }}<br>
                        Language: {{ $j->language }}<br>
                        Location: {{ $j->location }}<br>
                        Person: {{ $j->contact_person }}<br>
                        Phone: {{ $j->phone }}<br>
                        Time to Call: {{ $j->time_to_call }}<br>
                        Can Whatsapp: {{ $j->can_whatsapp }}<br>
                    </td> 

                    <td><a href="{{asset($r->cv)}}" target="_blank"><i class="fa fa-download fa-2x"></i> </a></td>
                    <td>
                        Full Name: {{ $r->full_name }}<br>
                        Phone: {{ $r->phone }}<br>
                        Email: {{ $r->email }}<br>
                        Address: {{ $r->address }}<br>
                        Experience: {{ $r->experience }}<br>
                        Language: {{ $r->language }}<br>
                    </td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>S.No.</th>
                <th>Job Details</th>
                <th>CV</th> 
                <th>Applicant Details</th>
              </tr>
            </tfoot>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    
</div>