<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\JewelleryCategory;
use App\Catalogue;
use App\Blacklist;

use App\Qutation;
use App\Rate;



class CatalogueController extends Controller
{
    public function addCatalogueProduct() {
    	//Setting Page Title
    	$this->data['page_title'] = 'Add New Product in Catalogue';
    	//Fetching categories
    	$this->data['category'] = JewelleryCategory::where('parent', '!=' , null)->orderBy('parent')->get();
    	return view('webviews/admin_add_catalogue', $this->data);
    }

    public function addCatalogueProductSubmit(Request $req) {
    	//Uploading Image
    	$file = $req->file('image');
        $filename = 'catalogue'.time().Auth::id().'.'.$req->image->extension();
        $destinationPath = storage_path('../../images/catalogue');
        $file->move($destinationPath, $filename);
    	//Submit to Database
    	$reg = new Catalogue;
    	$reg->image = 'images/catalogue/'.$filename;
    	$reg->title = $req->title;
    	$reg->user_id = Auth::user()->id;
    	$reg->description = $req->description;
        $reg->metatag = $req->metatag;  
    	$reg->categories = implode(', ', $req->categories);
    	$reg->save();

    	//Return Response
    	return back()->with('success', 1);
    }

    public function viewCatalogueProducts() {
    	//Setting Page Title
        $this->data['page_title'] = 'View Catalogue';
        //Fetching Data
        $this->data['catalogue'] = Catalogue::orderBy('id', 'desc')->get();
        //Return Response
        return view('webviews/admin_view_catalogue', $this->data);
    }

    public function viewVendorCatalogueProducts() {
        //Setting Page Title
        $this->data['page_title'] = 'View Catalogue';
        //Fetching Data
        $this->data['catalogue'] = Catalogue::where('user_id', Auth::id())->orderBy('id', 'desc')->get();
        //Return Response
        return view('webviews/admin_view_catalogue', $this->data);
    }

    public function editCatalogue($id)
    {
        $this->data['page_title']='Edit Catalogue';
        $this->data['flag']=6;
        $this->data['members']= Catalogue::where('id',$id)->first();
        $this->data['category'] = JewelleryCategory::where('parent', '!=' , null)->orderBy('parent')->get();
        return view('webviews/admin_edit', $this->data);
    }
    public function updateCatalogue(Request $req)
    {
        if($req->hasFile('image')) {
            $file = $req->file('image');
            $filename = 'catalogue'.time().'.'.$req->image->extension();
            $destinationPath = storage_path('../../images/catalogue');
            $file->move($destinationPath, $filename);
            $image = 'images/catalogue/'.$filename;
        }
        else{
            $image=$req->image;
        }
        Catalogue::where('id',$req->id)->update([
            'title'=>$req->title,
            'image'=>$image,
            'description'=>$req->description,
            'metatag'=>$req->metatag,

            'categories'=>implode(', ', $req->categories)
        ]);
        
        if(Auth::user()->is_admin == 1){
            return redirect('view-catalogue-products')->with('success', 1);
        } 
        else{
            return redirect('view-vendor-catalogue-products')->with('success', 1);
        } 
    }

    public function toggleCatalogueActiveStatus($status, $id) {
        //Submit to DB
        Catalogue::where('id', $id)->update(['active' => $status]);
        //Return Response
        return back()->with('success', 1);
    }

   public function deleteCatalogueimage($id) {
        Catalogue::where('id', $id)->delete();
        //Return Response
        return back()->with('success', 1);
    }

    public function totaldownload() {
         
        return view('webviews/admin_add_catalogue', $this->data);
    }

     

    public function viewQutationList() {
        //Setting Page Title
        $this->data['flag']=1;

        $this->data['page_title'] = 'View Catalogue Qutations';
        //Fetching Data
        $this->data['qutation'] = Qutation::orderBy('id', 'desc')->where('cat_id', '!=',  null)->get();
        //Return Response
        return view('webviews/admin_view_qutation', $this->data);
    }

   

    public function downloadButton(Request $request)   
    {   

        $data = Catalogue::where('id',$request->id)->first();
        $data1 = $data->total_download;

        Catalogue::where('id', $request->id)->update([
          'total_download' => $request->total_download+$data1
        ]);  
        return back();
         
    }
   
}
