<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Imports\ShopImport;

use Maatwebsite\Excel\Facades\Excel;

use App\Shop;

class ShopController extends Controller
{
    public function addShopProduct() {
    	//Setting Page Title
    	$this->data['page_title'] = 'Add New Product';
    	return view('webviews/admin_add_shop_product', $this->data);
    }

     public function shopImport() 
    {
        Excel::import(new ShopImport,request()->file('file'));
        return back()->with('success',1);
    }

    public function addShopProductSubmit(Request $req) {
    	//Uploading Image1
    	$file = $req->file('image1');
        $filename1 = 'shop1'.time().Auth::user()->id.'.'.$req->image1->extension();
        $destinationPath = storage_path('../../images/shop');
        $file->move($destinationPath, $filename1);
        $filename1 = 'images/shop/'.$filename1;
    	//Uploading Image2
    	$filename2 = null;
    	if($req->hasFile('image2')) {
    		$file = $req->file('image2');
	        $filename2 = 'shop2'.time().Auth::user()->id.'.'.$req->image2->extension();
	        $destinationPath = storage_path('../../images/shop');
	        $file->move($destinationPath, $filename2);
	        $filename2 = 'images/shop/'.$filename2;
    	}
    	//Uploading Image3
    	$filename3 = null;
    	if($req->hasFile('image3')) {
    		$file = $req->file('image3');
	        $filename3 = 'shop3'.time().Auth::user()->id.'.'.$req->image3->extension();
	        $destinationPath = storage_path('../../images/shop');
	        $file->move($destinationPath, $filename3);
	        $filename3 = 'images/shop/'.$filename3;
    	}
    	//Uploading Image4
    	$filename4 = null;
    	if($req->hasFile('image4')) {
    		$file = $req->file('image4');
	        $filename4 = 'shop4'.time().Auth::user()->id.'.'.$req->image4->extension();
	        $destinationPath = storage_path('../../images/shop');
	        $file->move($destinationPath, $filename4);
	        $filename4 = 'images/shop/'.$filename4;
    	}
    	//Uploading Image5
    	$filename5 = null;
    	if($req->hasFile('image5')) {
    		$file = $req->file('image5');
	        $filename5 = 'shop5'.time().Auth::user()->id.'.'.$req->image5->extension();
	        $destinationPath = storage_path('../../images/shop');
	        $file->move($destinationPath, $filename5);
	        $filename5 = 'images/shop/'.$filename5;
    	}
    	
    	//Submit to Database
    	$reg = new Shop; 
    	$reg->image1 = $filename1;
    	$reg->image2 = $filename2;
    	$reg->image3 = $filename3;
    	$reg->image4 = $filename4;
    	$reg->image5 = $filename5;
    	$reg->title = $req->title;
    	$reg->price = $req->price;
    	$reg->categories = implode(',', $req->categories);
    	$reg->vendor_id = Auth::id();
    	$reg->description = $req->description;
        $reg->metatag = $req->metatag;

        $reg->product_name   = $req->product_name;   
        $reg->product_style_no = $req->product_style_no; 
        $reg->product_width  =  $req->product_width;  
        $reg->product_height   =  $req->product_height; 
        $reg->product_length   =  $req->product_length;  
        $reg->metal_name      =  $req->metal_name;  
        $reg->metal_purity    =  $req->metal_purity; 
        $reg->metal_weight    = $req->metal_weight;  
        $reg->diamond_total_no  = $req->diamond_total_no; 
        $reg->diamond_total_wt  = $req->diamond_total_wt; 
        $reg->diamond_clarity   = $req->diamond_clarity ;  
        $reg->diamond_color     = $req->diamond_color;
        $reg->diamond_shape     = $req->diamond_shape;
        $reg->diamond_setting    = $req->diamond_setting ;  
        $reg->gemstone_total_no = $req->gemstone_total_no;
        $reg->gemstone_type     = $req->gemstone_type;
        $reg->gemstone_color    = $req->gemstone_color;
        $reg->gemstone_shape   = $req->gemstone_shape;
        $reg->gemstone_weight  = $req->gemstone_weight;
        $reg->gemstone_setting  = $req->gemstone_setting; 
        $reg->price_breakup_metal  = $req->price_breakup_metal;
        $reg->price_breakup_diamond  = $req->price_breakup_diamond;

        $reg->price_breakup_gemstone = $req->price_breakup_gemstone;
        $reg->price_breakup_making  = $req->price_breakup_making;
        $reg->price_breakup_gst     = $req->price_breakup_gst;
        $reg->price_breakup_discount  = $req->price_breakup_discount;
        $reg->price_breakup_scheme   = $req->price_breakup_scheme;
        $reg->price_breakup_total    = $req->price_breakup_total;
    	$reg->save();

    	//Return Response
    	return back()->with('success', 1);
    }

    public function viewShopProducts() {
    	//Setting Page Title
        $this->data['page_title'] = 'View Shop Products';
        //Fetching Data
        $this->data['products'] = Shop::orderBy('id', 'desc')->get();
        //Return Response
        return view('webviews/admin_view_shop_products', $this->data);
	}
	
	public function editShopProduct($id)
    {
        $this->data['page_title']='Edit Shop Products';
        $this->data['flag']=10;
        $this->data['members']= Shop::where('id',$id)->first();
        return view('webviews/admin_edit', $this->data);
    }
    public function updateShopProduct(Request $req)
    {
        if($req->hasFile('image1')) {
            $file = $req->file('image1');
            $filename = 'shop1'.time().'.'.$req->image1->extension();
            $destinationPath = storage_path('../../images/shop');
            $file->move($destinationPath, $filename);
            $image1 = 'images/shop/'.$filename;
        }
        else{
            $image1=$req->image1;
        }
        if($req->hasFile('image2')) {
            $file = $req->file('image2');
            $filename = 'shop2'.time().'.'.$req->image2->extension();
            $destinationPath = storage_path('../../images/shop');
            $file->move($destinationPath, $filename);
            $image2 = 'images/shop/'.$filename;
        }
        else{
            $image2=$req->image2;
        }
        if($req->hasFile('image3')) {
            $file = $req->file('image3');
            $filename = 'shop3'.time().'.'.$req->image3->extension();
            $destinationPath = storage_path('../../images/shop');
            $file->move($destinationPath, $filename);
            $image3 = 'images/shop/'.$filename;
        }
        else{
            $image3=$req->image3;
        }
        if($req->hasFile('image4')) {
            $file = $req->file('image4');
            $filename = 'shop4'.time().'.'.$req->image4->extension();
            $destinationPath = storage_path('../../images/shop');
            $file->move($destinationPath, $filename);
            $image4 = 'images/shop/'.$filename;
        }
        else{
            $image4=$req->image4;
        }
        if($req->hasFile('image5')) {
            $file = $req->file('image5');
            $filename = 'shop5'.time().'.'.$req->image5->extension();
            $destinationPath = storage_path('../../images/shop');
            $file->move($destinationPath, $filename);
            $image5 = 'images/shop/'.$filename;
        }
        else{
            $image5=$req->image5;
        }
        Shop::where('id',$req->id)->update([
            'image1'=>$image1,
            'image2'=>$image2,
            'image3'=>$image3,
            'image4'=>$image4,
            'image5'=>$image5,
            'title'=>$req->title,
            'price'=>$req->price,
            'categories'=> implode(',', $req->categories),
            'description'=>$req->description,
            'metatag'=>$req->metatag,
            
            'product_name'  =>$req->product_name,   
            'product_style_no' =>$req->product_style_no,                                  
            'product_width'  =>$req->product_width,  
            'product_height'   => $req->product_height,
            'product_length'   =>  $req->product_length, 
            'metal_name'      =>  $req->metal_name,  
            'metal_purity'    =>  $req->metal_purity, 
            'metal_weight'   =>$req->metal_weight,  
            'diamond_total_no' =>$req->diamond_total_no, 
            'diamond_total_wt' =>$req->diamond_total_wt, 
            'diamond_clarity'  =>$req->diamond_clarity,  
            'diamond_color'    =>$req->diamond_color,
            'diamond_shape'    =>$req->diamond_shape,
            'diamond_setting'   =>$req->diamond_setting,  
            'gemstone_total_no' =>$req->gemstone_total_no,
            'gemstone_type'   =>$req->gemstone_type,
            'gemstone_color'   =>$req->gemstone_color,
            'gemstone_shape'  =>$req->gemstone_shape,
            'gemstone_weight' =>$req->gemstone_weight,
            'gemstone_setting' =>$req->gemstone_setting, 
            'price_breakup_metal' =>$req->price_breakup_metal,
            'price_breakup_diamond' =>$req->price_breakup_diamond,

            'price_breakup_gemstone'=>$req->price_breakup_gemstone,
            'price_breakup_making' =>$req->price_breakup_making,
            'price_breakup_gst'    =>$req->price_breakup_gst,
            'price_breakup_discount' =>$req->price_breakup_discount,
            'price_breakup_scheme'  =>$req->price_breakup_scheme,
            'price_breakup_total'   =>$req->price_breakup_total,
            ]);
        
        return redirect('view-shop-products')->with('success', 1);
    }

    public function deleteShop($id) {
        Shop::where('id', $id)->delete();
        //Return Response
        return back()->with('success', 1);
    }

    public function shoprating(Request $req) 
    {    
        $data = Shop::where('id',$req->id)->first();
        $data1 = $data->rating;  
        
        if ($data->rating == 0) { 
              Shop::where('id', $req->id)->update([ 
             'rating'=> $req->rating
              ]); 
          }

          else
          {    
            Shop::where('id', $req->id)->update([ 
                'rating'=>($req->rating + $data1)/2
              ]); 
              
          } 
        return back();

    }
}
