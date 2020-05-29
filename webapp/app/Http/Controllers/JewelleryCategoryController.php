<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\JewelleryCategory;

class JewelleryCategoryController extends Controller
{
    public function addJewelleryCategory() {
        //Setting Page Title
    	$this->data['page_title'] = 'Add New Jewellery Category';
    	//Fetching Data
    	$this->data['category'] = JewelleryCategory::where('parent', null)->orderBy('name', 'asc')->get();
    	//Return Response
    	return view('webviews/admin_add_jewellery_category', $this->data);
    }

    public function addJewelleryCategorySubmit(Request $req) {
    	//Uploading Image
    	$file = $req->file('image');
        $filename = 'category'.time().Auth::user()->id.'.'.$req->image->extension();
        $destinationPath = storage_path('../../images/categories');
        $file->move($destinationPath, $filename);
    	//Submit to Database
    	$reg = new JewelleryCategory;
    	$reg->image = 'images/categories/'.$filename;
    	$reg->name = $req->name;
    	$reg->parent = $req->parent;
    	$reg->save();
    	//Return Response
    	return back()->with('success', 1);
    }

    public function viewJewelleryCategory() {
    	 //Setting Page Title
        $this->data['page_title'] = 'View Jewellery Category';
        //Fetching Data
        $this->data['category'] = JewelleryCategory::orderBy('name', 'asc')->get();
        //Return Response
        return view('webviews/admin_view_jewellery_category', $this->data);
    }

    public function deleteJewelleyCategory($id) {
    	//Fetching Category Name
    	$cat = JewelleryCategory::where('id', $id)->pluck('name')->first();
    	//Deleting Category
    	JewelleryCategory::where('id', $id)->delete();
    	//Deleting SubCategories
    	JewelleryCategory::where('parent', $cat)->delete();
    	//Return Response
    	return back()->with('success', 1);
    }
}
