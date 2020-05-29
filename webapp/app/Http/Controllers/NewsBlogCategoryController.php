<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\NewsBlogCategory;

class NewsBlogCategoryController extends Controller
{
    public function addNewsBlogCategory() {
        //Setting Page Title
    	$this->data['page_title'] = 'Add New News/Blogs Category';
    	//Fetching Data
    	$this->data['category'] = NewsBlogCategory::where('parent', null)->orderBy('name', 'asc')->get();
    	//Return Response
    	return view('webviews/admin_add_news_blog_category', $this->data);
    }

    public function addNewsBlogCategorySubmit(Request $req) {
    	//Uploading Image
    	$file = $req->file('image');
        $filename = 'news/blogcategory'.time().Auth::user()->id.'.'.$req->image->extension();
        $destinationPath = storage_path('../../images/news/blogcategories');
        $file->move($destinationPath, $filename);
    	//Submit to Database
    	$reg = new NewsBlogCategory;
    	$reg->image = 'images/categories/'.$filename;
    	$reg->name = $req->name;
    	$reg->parent = $req->parent;
    	$reg->save();
    	//Return Response
    	return back()->with('success', 1);
    }

    public function viewNewsBlogCategory() {
    	 //Setting Page Title
        $this->data['page_title'] = 'View News/Blogs Category';
        //Fetching Data
        $this->data['category'] = NewsBlogCategory::orderBy('name', 'asc')->get();
        //Return Response
        return view('webviews/admin_view_news_blog_category', $this->data);
    }

    public function deleteNewsBlogCategory($id) {
    	//Fetching Category Name
    	$cat = NewsBlogCategory::where('id', $id)->pluck('name')->first();
    	//Deleting Category
    	NewsBlogCategory::where('id', $id)->delete();
    	//Deleting SubCategories
    	NewsBlogCategory::where('parent', $cat)->delete();
    	//Return Response
    	return back()->with('success', 1);
    }
}
