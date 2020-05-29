<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;


class DashboardController extends Controller
{
    public function dashboard() {
    	$this->data['page_title'] = 'Dashboard';
    	return view('webviews/admin_dashboard', $this->data);
    }

    public function editProfileImage( User $user)
    {
        $this->data['page_title']='Edit Profile Image';
        $this->data['flag']=14;
        $this->data['members']= User::where('email', Auth::user()->email)->first(); 
        return view('webviews/admin_edit', $this->data);
    }


    public function updateProfileImage(Request $req)
    {
        if($req->hasFile('image')) {
            $file = $req->file('image');
            $filename = 'profile'.time().'.'.$req->image->extension();
            $destinationPath = storage_path('../../images/profile');
            $file->move($destinationPath, $filename);
            $image = 'images/profile/'.$filename; 
            
            $description =$req->description;
        }
        else{
            $image =$req->image;
            $description =$req->description;

        }
         
        User::where('id',$req->id)->update([
            'image'=>$image,
            'description' =>$description
        ]);
        
        return back()->with('success', 1);
    } 
}
