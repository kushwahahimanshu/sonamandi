<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;
use App\Imports\JobImport;

use Maatwebsite\Excel\Facades\Excel;

use App\Job;
use App\JobApplication;

class JobController extends Controller
{
    public function addJob() {
    	//Setting Page Title
    	$this->data['page_title'] = 'Add New Job';
    	return view('webviews/admin_add_job', $this->data);
    }
     public function jobImport() 
    {
        Excel::import(new JobImport,request()->file('file'));
        return back()->with('success',1);
    }

    public function addJobSubmit(Request $req) {
    	$reg = new Job;
    	$reg->user_id = $req->user;
    	$reg->job_title = $req->title;
    	$reg->salary = $req->salary;
    	$reg->location = $req->location;
    	$reg->timing = $req->timing;
    	$reg->working_days = $req->working_days;
    	$reg->gender = $req->gender;
    	$reg->experience = $req->experience;
    	$reg->contact_person = $req->contact_name;
    	$reg->phone = $req->phone;
    	$reg->language = $req->language;
    	$reg->time_to_call = $req->time_to_call;
    	$reg->can_whatsapp = $req->can_whatsapp;
        $reg->metatag = $req->metatag;

    	$reg->save();
    	//Return Response
    	return back()->with('success', 1);
    }

    public function viewJobs() {
    	//Setting Page Title
        $this->data['page_title'] = 'View Jobs';
        //Fetching Data
        $this->data['jobs'] = Job::where('user_id', Auth::id())->orderBy('id', 'desc')->get();
        $this->data['jobsapplication'] = JobApplication::where('job_id', Auth::id())->orderBy('id', 'desc')->get();

        //Return Response
        return view('webviews/admin_view_jobs', $this->data);
	}

    public function viewAllJobs() {
        //Setting Page Title
        $this->data['page_title'] = 'View  All Jobs';
        //Fetching Data
        $this->data['jobs'] = Job::orderBy('id', 'desc')->get();
        $this->data['jobsapplication'] = JobApplication::where('job_id', Auth::id())->orderBy('id', 'desc')->get();

        //Return Response
        return view('webviews/admin_view_jobs', $this->data);
    }
	
	public function editJob($id)
    {
        $this->data['page_title']='Edit Directory';
        $this->data['flag']=9;
        $this->data['members']= Job::where('id',$id)->first(); 
        return view('webviews/admin_edit', $this->data);
    }
    public function updateJob(Request $req)
    {
        Job::where('id',$req->id)->update([
            'job_title'=>$req->title,
            'salary'=>$req->salary,
            'location'=>$req->location,
            'timing'=>$req->timing,
            'working_days'=>$req->working_days,
            'gender'=>$req->gender,
            'experience'=>$req->experience,
            'contact_person'=>$req->contact_name,
            'phone'=>$req->phone,
            'language'=>$req->language,
            'time_to_call'=>$req->time_to_call,
            'can_whatsapp'=>$req->can_whatsapp,
            'metatag'=>$req->metatag

        ]);
        
        return redirect('view-jobs')->with('success', 1);
    }

    public function deleteJob($id) {
    	Job::where('id', $id)->delete();    	
    	//Return Response
    	return back()->with('success', 1);
	}
	
	public function myJobApplications($id) {
		//Setting Page Title
        $this->data['flag'] = 1;
        $this->data['page_title'] = 'My Job Applications';
        //Fetching Data   
        $this->data['jobs'] = JobApplication::where('job_id',$id)->orderBy('id', 'desc')->get(); 

        ////$this->data['jobs'] = Job::join('job_applications', 'jobs.id' ,'=', 'job_applications.job_id')->select('job_applications.*')->orderBy('id', 'desc')->get(); 

        //$this->data['jobs'] = JobApplication::join('jobs', 'job_applications.job_id' ,'=' , 'jobs.job_title')->where('applicant_id', Auth::id())->orderBy('id', 'desc')->select('job_title');  
        //Return Response
        return view('webviews/admin_view_my_jobs', $this->data);
	}


    public function allJobApplications() {
        //Setting Page Title
        $this->data['flag'] = 2;

        $this->data['page_title'] = 'All Job Applications';
        //Fetching Data
        $this->data['jobs'] = JobApplication::orderBy('id', 'desc')->get();
       // dd($this->data['jobs']);
        //Return Response
        return view('webviews/admin_view_my_jobs', $this->data);
    }
}
