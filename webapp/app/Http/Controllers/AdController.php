<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Auth;

//Models
use App\Ad;

class AdController extends Controller
{
    public function addAd() {
        //Setting Page Title
    	$this->data['page_title'] = 'Add New Advertisement';
    	return view('webviews/admin_add_ad', $this->data);
    }

    public function addAdSubmit(Request $req) {
    	
    	//Uploading Image
    	$file = $req->file('image');
        $filename = 'ad'.time().Auth::id().'.'.$req->image->extension();
        $destinationPath = storage_path('../../images/ads');
        $file->move($destinationPath, $filename);
    	//Submit to Database
    	$reg = new Ad;
    	$reg->image = 'images/ads/'.$filename;
    	$reg->title = $req->title;
    	$reg->link = $req->link;
    	$reg->save();

    	//Return Response
    	return back()->with('success', 1);
    }

    public function deleteAds($id) {
        Ad::where('id', $id)->delete();
        //Return Response
        return back()->with('success', 1);
    }

    public function viewAds() {
        //Setting Page Title
        $this->data['page_title'] = 'View Advertisements';
        //Fetching Data
        $this->data['ads'] = Ad::orderBy('id', 'desc')->get();
        $this->data['type'] = 'ad';
        //Return Response
        return view('webviews/admin_view_ads', $this->data);
    }

    public function editAds($id)
    {
        $this->data['page_title']='Edit Advertisements';
        $this->data['flag']=2;
        $this->data['members']= Ad::where('id',$id)->first();
        return view('webviews/admin_edit', $this->data);
    }
    public function updateAds(Request $req)
    {
        if($req->hasFile('image')) {
            $file = $req->file('image');
            $filename = 'ad'.time().'.'.$req->image->extension();
            $destinationPath = storage_path('../../images/ads');
            $file->move($destinationPath, $filename);
            $image = 'images/ads/'.$filename;
        }
        else{
            $image=$req->image;
        }
        Ad::where('id',$req->id)->update([
            'title'=>$req->title,
            'image'=>$image,
            'link'=>$req->link
        ]);
        
        return redirect('view-ads')->with('success', 1);
    }

    public function toggleAdActiveStatus($status, $id) {
        //Submit to DB
        Ad::where('id', $id)->update(['active' => $status]);
        //Return Response
        return back()->with('success', 1);
    }
}
