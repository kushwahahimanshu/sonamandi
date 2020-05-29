<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Slider;

class SliderController extends Controller
{
    public function addSlider() {
        //Setting Page Title
    	$this->data['page_title'] = 'Add New Slider Image';
    	return view('webviews/admin_add_slider', $this->data);
    }

    public function addSliderSubmit(Request $req) {
    	
    	//Uploading Image
    	$file = $req->file('image');
        $filename = 'slider'.time().Auth::user()->id.'.'.$req->image->extension();
        $destinationPath = storage_path('../../images/sliders');
        $file->move($destinationPath, $filename);
    	//Submit to Database
    	$reg = new Slider;
    	$reg->image = 'images/sliders/'.$filename;
    	$reg->title = $req->title;
    	$reg->link = $req->link;
    	$reg->save();

    	//Return Response
    	return back()->with('success', 1);
    }

    public function viewSliders() {
        //Setting Page Title
        $this->data['page_title'] = 'View Slider Images';
        //Fetching Data
        $this->data['sliders'] = Slider::orderBy('id', 'desc')->get();
        $this->data['type'] = 'slider';
        //Return Response
        return view('webviews/admin_view_sliders', $this->data);
    }

    public function editSlider($id)
    {
        $this->data['page_title']='Edit Slider';
        $this->data['flag']=3;
        $this->data['members']= Slider::where('id',$id)->first();
        return view('webviews/admin_edit', $this->data);
    }
    public function updateSlider(Request $req)
    {
        if($req->hasFile('image')) {
            $file = $req->file('image');
            $filename = 'slider'.time().'.'.$req->image->extension();
            $destinationPath = storage_path('../../images/sliders');
            $file->move($destinationPath, $filename);
            $image = 'images/sliders/'.$filename;
        }
        else{
            $image=$req->image;
        }
        Slider::where('id',$req->id)->update([
            'title'=>$req->title,
            'image'=>$image,
            'link'=>$req->link
        ]);
        
        return redirect('view-sliders')->with('success', 1);
    }

    public function toggleSliderActiveStatus($status, $id) {
        //Submit to DB
        Slider::where('id', $id)->update(['active' => $status]);
        //Return Response
        return back()->with('success', 1);
    }

    public function deleteSlider($id) {
        Slider::where('id', $id)->delete();
        //Return Response
        return back()->with('success', 1);
    }
}
