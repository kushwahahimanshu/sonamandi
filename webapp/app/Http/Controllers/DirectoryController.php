<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Exports\DirectoryExport;

use App\Imports\DirectoryImport;

use Maatwebsite\Excel\Facades\Excel;
use App\Directory;
use App\Qutation;
use App\User;
use App\Rate;




class DirectoryController extends Controller
{
    public function directoryExport() 
    {
        return Excel::download(new DirectoryExport, 'directory.csv');
    }
    public function directoryImport() 
    {
        Excel::import(new DirectoryImport,request()->file('file'));
        return back()->with('success',1);
    }
    public function addDirectory() {
    	//Setting Page Title
    	$this->data['page_title'] = 'Add New Vendor';
    	return view('webviews/admin_add_directory', $this->data);
    }

    public function addDirectorySubmit(Request $req) {
      //Uploading Image1
      $file = $req->file('image1');
        $filename1 = 'directory1'.time().Auth::user()->id.'.'.$req->image1->extension();
        $destinationPath = storage_path('../../images/directory');
        $file->move($destinationPath, $filename1);
        $filename1 = 'images/directory/'.$filename1;
      //Uploading Image2
      $filename2 = null;
      if($req->hasFile('image2')) {
        $file = $req->file('image2');
          $filename2 = 'directory2'.time().Auth::user()->id.'.'.$req->image2->extension();
          $destinationPath = storage_path('../../images/directory');
          $file->move($destinationPath, $filename2);
          $filename2 = 'images/directory/'.$filename2;
      }
      //Uploading Image3
      $filename3 = null;
      if($req->hasFile('image3')) {
        $file = $req->file('image3');
          $filename3 = 'directory3'.time().Auth::user()->id.'.'.$req->image3->extension();
          $destinationPath = storage_path('../../images/directory');
          $file->move($destinationPath, $filename3);
          $filename3 = 'images/directory/'.$filename3;
      }
      //Uploading Image4
      $filename4 = null;
      if($req->hasFile('image4')) {
        $file = $req->file('image4');
          $filename4 = 'directory4'.time().Auth::user()->id.'.'.$req->image4->extension();
          $destinationPath = storage_path('../../images/directory');
          $file->move($destinationPath, $filename4);
          $filename4 = 'images/directory/'.$filename4;
      }
      //Uploading Image5
      $filename5 = null;
      if($req->hasFile('image5')) {
        $file = $req->file('image5');
          $filename5 = 'directory5'.time().Auth::user()->id.'.'.$req->image5->extension();
          $destinationPath = storage_path('../../images/directory');
          $file->move($destinationPath, $filename5);
          $filename5 = 'images/directory/'.$filename5;
      }
      
      //Submit to Database
      $reg = new Directory;
      $reg->image1 = $filename1;
      $reg->image2 = $filename2;
      $reg->image3 = $filename3;
      $reg->image4 = $filename4;
      $reg->image5 = $filename5;
      $reg->ms = $req->ms;
      $reg->user_id  = Auth::user()->id;

      $reg->name = $req->name;
      $reg->email = $req->email;
      $reg->phone1 = $req->phone1;
      $reg->phone2 = $req->phone2;
      $reg->type = implode(', ', $req->type);
      $reg->gst = $req->gst;
      $reg->deals_in = $req->deals_in;
      $reg->timing = $req->timing;
      $reg->working_days = $req->working_days;
      $reg->website = $req->website;
      $reg->address = $req->address;
      $reg->city = $req->city;
      $reg->metatag = $req->metatag;

      $reg->gold_purchase = $req->gold_purchase;
      $reg->buy_back = $req->buy_back;
      $reg->description = $req->description; 

      $reg->save();

      //Return Response
      return back()->with('success', 1);
    }

    public function viewDirectory() {
  	//Setting Page Title
      $this->data['page_title'] = 'View Directory';
      //Fetching Data
      $this->data['directory'] = Directory::orderBy('id', 'desc')->get();
      //Return Response
      return view('webviews/admin_view_directory', $this->data);
   	}

	public function editDirectory($id)
    {
        $this->data['page_title']='Edit Directory';
        $this->data['flag']=8;
        $this->data['members']= Directory::where('id',$id)->first();
        return view('webviews/admin_edit', $this->data);
    }

    public function updateDirectory(Request $req)
    {
        if($req->hasFile('image1')) {
            $file = $req->file('image1');
            $filename = 'directory1'.time().'.'.$req->image1->extension();
            $destinationPath = storage_path('../../images/directory');
            $file->move($destinationPath, $filename);
            $image1 = 'images/directory/'.$filename;
        }
        else{
            $image1=$req->image1;
        }
        if($req->hasFile('image2')) {
            $file = $req->file('image2');
            $filename = 'directory2'.time().'.'.$req->image2->extension();
            $destinationPath = storage_path('../../images/directory');
            $file->move($destinationPath, $filename);
            $image2 = 'images/directory/'.$filename;
        }
        else{
            $image2=$req->image2;
        }
        if($req->hasFile('image3')) {
            $file = $req->file('image3');
            $filename = 'directory3'.time().'.'.$req->image3->extension();
            $destinationPath = storage_path('../../images/directory');
            $file->move($destinationPath, $filename);
            $image3 = 'images/directory/'.$filename;
        }
        else{
            $image3=$req->image3;
        }
        if($req->hasFile('image4')) {
            $file = $req->file('image4');
            $filename = 'directory4'.time().'.'.$req->image4->extension();
            $destinationPath = storage_path('../../images/directory');
            $file->move($destinationPath, $filename);
            $image4 = 'images/directory/'.$filename;
        }
        else{
            $image4=$req->image4;
        }
        if($req->hasFile('image5')) {
            $file = $req->file('image5');
            $filename = 'directory5'.time().'.'.$req->image5->extension();
            $destinationPath = storage_path('../../images/directory');
            $file->move($destinationPath, $filename);
            $image5 = 'images/directory/'.$filename;
        }
        else{
            $image5=$req->image5;
        }
        Directory::where('id',$req->id)->update([
            'image1'=>$image1,
            'image2'=>$image2,
            'image3'=>$image3,
            'image4'=>$image4,
            'image5'=>$image5,
            'ms'=>$req->ms,
            'name'=>$req->name,
            'email'=>$req->email,
            'phone1'=>$req->phone1,
            'phone2'=>$req->phone2,
            'type'=>implode(', ', $req->type),
            'gst' =>$req->gst,
            'deals_in' => $req->deals_in,
            'timing'=>$req->timing,
            'working_days'=>$req->working_days,
            'website'=>$req->website,
            'address'=>$req->address,
            'city'=>$req->city,
            'gold_purchase'=>$req->gold_purchase,
            'buy_back'=>$req->buy_back,
            'metatag'=>$req->metatag,

            'description'=>$req->description
        ]); 
        if (Auth::user()->is_admin == 1) {
            return redirect('view-directory')->with('success', 1);
        }

        else{
            return back()->with('success', 1);
        }
        
    }
	
	public function becomeVendor() {
		//Setting Page Title
        $this->data['page_title'] = 'Become a Vendor';
        //Return Response
        return view('webviews/admin_become_vendor', $this->data);
	}

	public function becomeVendorSubmit(Request $req) {
		//Uploading Image1
    	$file = $req->file('image1');
        $filename1 = 'directory1'.time().Auth::user()->id.'.'.$req->image1->extension();
        $destinationPath = storage_path('../../images/directory');
        $file->move($destinationPath, $filename1);
        $filename1 = 'images/directory/'.$filename1;
    	//Uploading Image2
    	$filename2 = null;
    	if($req->hasFile('image2')) {
    		$file = $req->file('image2');
	        $filename2 = 'directory2'.time().Auth::user()->id.'.'.$req->image2->extension();
	        $destinationPath = storage_path('../../images/directory');
	        $file->move($destinationPath, $filename2);
	        $filename2 = 'images/directory/'.$filename2;
    	}
    	//Uploading Image3
    	$filename3 = null;
    	if($req->hasFile('image3')) {
    		$file = $req->file('image3');
	        $filename3 = 'directory3'.time().Auth::user()->id.'.'.$req->image3->extension();
	        $destinationPath = storage_path('../../images/directory');
	        $file->move($destinationPath, $filename3);
	        $filename3 = 'images/directory/'.$filename3;
    	}
    	//Uploading Image4
    	$filename4 = null;
    	if($req->hasFile('image4')) {
    		$file = $req->file('image4');
	        $filename4 = 'directory4'.time().Auth::user()->id.'.'.$req->image4->extension();
	        $destinationPath = storage_path('../../images/directory');
	        $file->move($destinationPath, $filename4);
	        $filename4 = 'images/directory/'.$filename4;
    	}
    	//Uploading Image5
    	$filename5 = null;
    	if($req->hasFile('image5')) {
    		$file = $req->file('image5');
	        $filename5 = 'directory5'.time().Auth::user()->id.'.'.$req->image5->extension();
	        $destinationPath = storage_path('../../images/directory');
	        $file->move($destinationPath, $filename5);
	        $filename5 = 'images/directory/'.$filename5;
    	}
    	
    	//Submit to Database


    	$reg = new Directory;
    	$reg->image1 = $filename1;
    	$reg->image2 = $filename2;
    	$reg->image3 = $filename3;
    	$reg->image4 = $filename4;
    	$reg->image5 = $filename5;
    	$reg->ms = $req->ms;
      $reg->user_id  = Auth::user()->id;
      
    	$reg->name = $req->name;
    	$reg->email = $req->email;
    	$reg->phone1 = $req->phone1;
    	$reg->phone2 = $req->phone2;
    	/*$reg->deals_in = implode(', ', $req->deals_in);*/
      $reg->type = implode(', ', $req->type);
      $reg->gst = $req->gst;
      $reg->deals_in = $req->deals_in;
    	$reg->timing = $req->timing;
    	$reg->working_days = $req->working_days;
    	$reg->website = $req->website;
    	$reg->address = $req->address;
    	$reg->city = $req->city;
    	$reg->gold_purchase = $req->gold_purchase;
    	$reg->buy_back = $req->buy_back;
    	$reg->description = $req->description;
      $reg->metatag = $req->metatag;

      $reg->user_id = Auth::user()->id;

    	$reg->active = 0;
    	$reg->save();

    	//Return Response
    	return back()->with('success', 1);
	}

    public function deleteDirectory($id) {
        Directory::where('id', $id)->delete();
        //Return Response
        return back()->with('success', 1);
    }
    
    // view qutation in admin panel
    public function viewQutationDirectoryList() {
        $this->data['flag']=2; 
        //Setting Page Title
        $this->data['page_title'] = 'View Directory Qutations';
        //Fetching Data
        $this->data['qutation'] = Qutation::orderBy('id', 'desc')->where('directory_id', '!=',  null)->get();
        //Return Response
        return view('webviews/admin_view_qutation', $this->data);
    } 
    
    // approval function
    public function approval()
    {   $this->data['page_title'] = 'View Approval';
        $this->data['approve'] =  Directory::join('users', 'diretory.user_id' ,'=', 'users.id')->where('active',0)->select('diretory.*')->get(); 
        return view('webviews/admin_view_directory_approval',$this->data); 
    } 
    
    // approvenow function
    public function approveNow($user_id)
    {   
        Directory::where('user_id', $user_id)->update([
          'active' => 1

        ]); 

        User::where('id', $user_id)->update([
          'is_approved' => 1

        ]); 



    
        return back()->with('success',1); 
    } 


    public function show($id) 
    {
       $post = Directory::find($id); 
       return view('webviews/main_directory_details',compact('post')); 
    }  

    public function post(Request $req) 
    {    
        $data = Directory::where('id',$req->id)->first();
        $data1 = $data->rating;  
        
        if ($data->rating == 0) { 
              Directory::where('id', $req->id)->update([ 
             'rating'=> $req->rating
              ]); 
          }

          else
          {    
            Directory::where('id', $req->id)->update([ 
                'rating'=>($req->rating + $data1)/2
              ]); 
              
          } 
        return back();

    }

    public function editVendorDirectory(User $user)
    {
        $this->data['page_title']='Edit Directory'; 
        $this->data['vendor']= Directory::where('user_id',Auth::user()->id)->first();
        return view('webviews/vendor_edit', $this->data);
    }
}
