<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Auth; 
use App\Association;
use App\Footer;
use App\SocialLink;


use App\AssociationMember;

class SiteSettingController extends Controller
{
     
    public function editFooterContent()
    {
        $this->data['page_title']='Edit Footer Content';
        $this->data['flag']=11;
        $this->data['members']= Footer::first();
        return view('webviews/admin_edit', $this->data);
    }


    public function updateFooterContent(Request $req)
    {
         
        Footer::where('id',$req->id)->update([
            'content'=>$req->content, 
        ]);
        
        return back()->with('success', 1);  
    }  

    public function editSocialContent()
    {
        $this->data['page_title']='Edit Social Links';
        $this->data['flag']=12;
        $this->data['members']= SocialLink::first();
        return view('webviews/admin_edit', $this->data);
    }


    public function updateSocialContent(Request $req)
    {
         
        SocialLink::where('id',$req->id)->update([
            'facebook'=>$req->facebook, 
            'twitter'=>$req->twitter, 
            'instagram'=>$req->instagram, 

        ]);
        
        return back()->with('success', 1); 
    }  
}
