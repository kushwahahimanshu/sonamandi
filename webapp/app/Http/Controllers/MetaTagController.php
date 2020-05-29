<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Auth; 
use App\Metatag; 

class MetaTagController extends Controller
{
    
    public function viewMetaTag() {
        //Setting Page Title
        $this->data['page_title'] = 'View Metatag';
        //Fetching Data
        $this->data['metatag'] = Metatag::orderBy('name', 'asc')->get();
        //Return response
        return view('webviews/admin_view_meta_tag', $this->data);
    }


    public function editMetaTag($id)
    {
        $this->data['page_title']='Edit Meta Tag';
        $this->data['flag']=16;
        $this->data['members']= Metatag::where('id',$id)->first();
        return view('webviews/admin_edit', $this->data);
    }

    public function updatemetatag(Request $req)
    {    
        Metatag::where('id',$req->id)->update([ 
            'metatag'=>$req->metatag

        ]);
        
        return redirect('view-meta-tag')->with('success', 1);
    }
    

     
}
