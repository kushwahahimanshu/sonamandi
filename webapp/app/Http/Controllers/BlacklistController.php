<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Blacklist;
use App\Catalogue;


class BlacklistController extends Controller
{
    public function addBlacklist() {
    	//Setting Page Title
    	$this->data['page_title'] = 'Add to Blacklist';
    	return view('webviews/admin_add_blacklist', $this->data);
    }

    public function addBlacklistSubmit(Request $req) {
    	//Uploading Image
    	$file = $req->file('image');
        $filename = 'blacklist'.time().Auth::id().'.'.$req->image->extension();
        $destinationPath = storage_path('../../images/blacklist');
        $file->move($destinationPath, $filename);
        //Uploading Image
        $filename1 = null;
        if($req->hasFile('image1')) {
            $file = $req->file('image1');
            $filename1 = 'blacklist1'.time().Auth::id().'.'.$req->image1->extension();
            $destinationPath = storage_path('../../images/blacklist');
            $file->move($destinationPath, $filename1);
            $filename1='images/blacklist/'.$filename1;
        }
        //Uploading Image
        $filename2 = null;
        if($req->hasFile('image2')) {
            $file = $req->file('image2');
            $filename2 = 'blacklist2'.time().Auth::id().'.'.$req->image2->extension();
            $destinationPath = storage_path('../../images/blacklist');
            $file->move($destinationPath, $filename2);
            $filename2='images/blacklist/'.$filename2;
        }
    	//Submit to Database
    	$reg = new Blacklist;
    	$reg->image = 'images/blacklist/'.$filename;
        $reg->image1 = $filename1;
        $reg->image2 = $filename2;
    	$reg->name = $req->name;
    	$reg->ms = $req->ms;
    	$reg->phone = $req->phone;
    	$reg->location = $req->location;
    	$reg->city = $req->city;
    	$reg->reason = $req->reason;
    	$reg->type = $req->type;
        $reg->metatag = $req->metatag; 

         

    	$reg->save();

    	//Return Response
    	return back()->with('success', 1);
    }

      

    public function viewBlacklist() {
        //Setting Page Title
        $this->data['page_title'] = 'View Blacklist';
        //Fetching Data
        $this->data['blacklist'] = Blacklist::orderBy('id', 'desc')->get();
        //Return Response
        return view('webviews/admin_view_blacklist', $this->data);
    }

    public function editBlacklist($id)
    {
        $this->data['page_title']='Edit Blacklist';
        $this->data['flag']=7;
        $this->data['members']= Blacklist::where('id',$id)->first();
        return view('webviews/admin_edit', $this->data);
    }
    public function updateBlacklist(Request $req)
    {
        if($req->hasFile('image')) {
            $file = $req->file('image');
            $filename = 'blacklist'.time().'.'.$req->image->extension();
            $destinationPath = storage_path('../../images/blacklist');
            $file->move($destinationPath, $filename);
            $image = 'images/blacklist/'.$filename;
        }
        else{
            $image=$req->image;
        }
        if($req->hasFile('image1')) {
            $file = $req->file('image1');
            $filename = 'blacklist1'.time().'.'.$req->image1->extension();
            $destinationPath = storage_path('../../images/blacklist');
            $file->move($destinationPath, $filename);
            $image1 = 'images/blacklist/'.$filename;
        }
        else{
            $image1=$req->image1;
        }
        if($req->hasFile('image2')) {
            $file = $req->file('image2');
            $filename = 'blacklist2'.time().'.'.$req->image2->extension();
            $destinationPath = storage_path('../../images/blacklist');
            $file->move($destinationPath, $filename);
            $image2 = 'images/blacklist/'.$filename;
        }
        else{
            $image2=$req->image2;
        }
        Blacklist::where('id',$req->id)->update([
            'type'=>$req->type,
            'image'=>$image,
            'image1'=>$image1,
            'image2'=>$image2,
            'name'=>$req->name,
            'ms'=>$req->ms,
            'phone'=>$req->phone,
            'location'=>$req->location,
            'reason'=>$req->reason,
            'city'=>$req->city, 
            'metatag'=>$req->metatag
            

        ]);
        
        return redirect('view-blacklist')->with('success', 1);
    }

    public function updatemetatag(Request $req)
    {
        
        Metatag::where('id',$req->id)->update([
            'name'=>$req->name, 
            'metatag'=>$req->metatag

        ]);
        
        return back()->with('success', 1);
    }

    public function toggleBlacklistActiveStatus($status, $id) {
        //Submit to DB
        Blacklist::where('id', $id)->update(['active' => $status]);
        //Return Response
        return back()->with('success', 1);
    }

    public function deleteBlacklist($id) {
        //Submit to DB
        Blacklist::where('id', $id)->delete();
        //Return Response
        return back()->with('success', 1);
    }

    
}
