<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Imports\NewsImport;
use App\Imports\BlogImport;
use Maatwebsite\Excel\Facades\Excel;
use Auth;

use App\NewsBlog;
use App\NewsBlogCategory;


class NewsBlogController extends Controller
{
    public function addNews() {
    	//Setting Page Title
    	$this->data['page_title'] = 'Add News';
        $this->data['category'] = NewsBlogCategory::where('parent', '!=' , null)->orderBy('parent')->get();
    	//Return response
    	return view('webviews/admin_add_news', $this->data);
    }
     public function newsImport() 
    {
        Excel::import(new NewsImport,request()->file('file'));
        return back()->with('success',1);
    }

    public function addNewsSubmit(Request $req) {
    	//Uploading Image
    	$file = $req->file('image');
        $filename = 'news'.time().Auth::user()->id.'.'.$req->image->extension();
        $destinationPath = storage_path('../../images/news');
        $file->move($destinationPath, $filename);
    	//Submit to Database
    	$reg = new NewsBlog;
        $reg->user_id = Auth::user()->id;

    	$reg->image = 'images/news/'.$filename;
    	$reg->type = 1; // Type = 1 for News and Type = 2 for Blogs
    	$reg->title = $req->title;
        $reg->categories = implode(',', $req->categories);

    	$reg->content = utf8_encode($req->content);
    	$reg->author = Auth::user()->name;
        $reg->metatag = $req->metatag;

    	$reg->save();

    	//Return Response
    	return back()->with('success', 1);
    }

    public function viewsAllNews() {
    	//Setting Page Title
        $this->data['page_title'] = 'View News';
        //Fetching Data
        $this->data['news'] = NewsBlog::where('type', 1)->orderBy('id', 'desc')->get();
        //Return Response
        return view('webviews/admin_view_news', $this->data);
    }

    public function viewsOurNews() {
        //Setting Page Title
        $this->data['page_title'] = 'View News';
        //Fetching Data
        $this->data['news'] = NewsBlog::where('author',Auth::user()->name)->where('type', 1)->orderBy('id', 'desc')->get();
        //Return Response
        return view('webviews/admin_view_news', $this->data);
    }

    public function toggleNewsActiveStatus($status, $id) {
        //Submit to DB
        NewsBlog::where('id', $id)->update(['active' => $status]);
        //Return Response
        return back()->with('success', 1);
    }

    public function editNews($id)
    {
        $this->data['page_title']='Edit News';
        $this->data['flag']=4;
        $this->data['members']= NewsBlog::where('id',$id)->first();
        $this->data['category'] = NewsBlogCategory::where('parent', '!=' , null)->orderBy('parent')->get();
        return view('webviews/admin_edit', $this->data);
    }

    public function updateNews(Request $req)
    {
        if($req->hasFile('image')) {
            $file = $req->file('image');
            $filename = 'news'.time().'.'.$req->image->extension();
            $destinationPath = storage_path('../../images/news');
            $file->move($destinationPath, $filename);
            $image = 'images/news/'.$filename;
        }
        else{
            $image=$req->image;
        }
        NewsBlog::where('id',$req->id)->update([
            'title'=>$req->title,
            'image'=>$image,
            'author'=>$req->author,
            'content'=>$req->content,
            'content'=>$req->content,
            'metatag'=>$req->metatag, 
            'categories'=>implode(', ', $req->categories)

        ]);
        
        return back()->with('success', 1);
    }

    public function deleteNews($id) {
       NewsBlog::where('id', $id)->delete();
        //Return Response
        return back()->with('success', 1);
    }

    public function addBlog() {
        //Setting Page Title
        $this->data['page_title'] = 'Add Blog';
        $this->data['category'] = NewsBlogCategory::where('parent', '!=' , null)->orderBy('parent')->get();
        //Return response
        return view('webviews/admin_add_blog', $this->data);
    }
    public function blogImport() 
    {
        Excel::import(new BlogImport,request()->file('file'));
        return back()->with('success',1);
    }

    public function addBlogSubmit(Request $req) {
        //Uploading Image
        $file = $req->file('image');
        $filename = 'news'.time().Auth::user()->id.'.'.$req->image->extension();
        $destinationPath = storage_path('../../images/blogs');
        $file->move($destinationPath, $filename);
        //Submit to Database
        $reg = new NewsBlog;
        $reg->user_id = Auth::user()->id;

        
        $reg->image = 'images/blogs/'.$filename;
        $reg->type = 2; // Type = 1 for News and Type = 2 for Blogs
        $reg->title = $req->title;
        $reg->categories = implode(',', $req->categories);
        $reg->content = utf8_encode($req->content); 
        $reg->metatag = $req->metatag; 

        $reg->author = Auth::user()->name;
        
        $reg->save();

        //Return Response
        return back()->with('success', 1);
    }

    public function viewsAllBlogs() {
        //Setting Page Title
        $this->data['page_title'] = 'View Blogs';
        //Fetching Data
        $this->data['blogs'] = NewsBlog::where('type', 2)->orderBy('id', 'desc')->get();
        //Return Response
        return view('webviews/admin_view_blogs', $this->data);
    } 
    public function viewsOurBlogs() {
        //Setting Page Title
        $this->data['page_title'] = 'View Blogs';
        //Fetching Data
        $this->data['blogs'] = NewsBlog::where('author',Auth::user()->name)->where('type', 2)->orderBy('id', 'desc')->get();
        //Return Response
        return view('webviews/admin_view_blogs', $this->data);
    }

    public function editBlog($id)
    {
        $this->data['page_title']='Edit Blog';
        $this->data['flag']=5;
        $this->data['members']= NewsBlog::where('id',$id)->first();
        $this->data['category'] = NewsBlogCategory::where('parent', '!=' , null)->orderBy('parent')->get();

        return view('webviews/admin_edit', $this->data);
    }
    public function updateBlog(Request $req)
    {
        if($req->hasFile('image')) {
            $file = $req->file('image');
            $filename = 'blogs'.time().'.'.$req->image->extension();
            $destinationPath = storage_path('../../images/blogs');
            $file->move($destinationPath, $filename);
            $image = 'images/blogs/'.$filename;
        }
        else{
            $image=$req->image;
        }
        NewsBlog::where('id',$req->id)->update([
            'title'=>$req->title,
            'image'=>$image,
            'author'=>$req->author,
            'content'=>$req->content,
            'metatag'=>$req->metatag,

            'categories'=>implode(', ', $req->categories)
            
        ]);
        
        return back()->with('success', 1);
    }

    public function toggleBlogActiveStatus($status, $id) {
        //Submit to DB
        NewsBlog::where('id', $id)->update(['active' => $status]);
        //Return Response
        return back()->with('success', 1);
    }

    public function updaterate(Request $req) 
    { 
       
        NewsBlog::where('id',$req->id)->update([
          'rating'=> $req->rating
        ]); 
    }

    public function rating(Request $req) 
    {    
         
        $data = NewsBlog::where('id',$req->id)->first();
        $data1 = $data->rating;  
        if ($data->rating == 0) { 
              NewsBlog::where('id', $req->id)->update([ 
             'rating'=> $req->rating
              ]); 
          }

          else
          {    
            NewsBlog::where('id', $req->id)->update([ 
                'rating'=>($req->rating + $data1)/2
              ]); 
              
          } 
       return back();
    }


}
