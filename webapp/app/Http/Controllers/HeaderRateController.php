<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;


use App\HeaderRate;

class HeaderRateController extends Controller
{   

    public function addRate() {
        //Setting Page Title
        $this->data['page_title'] = 'Add Rates';
        return view('webviews/admin_add_rate', $this->data);
    }

    public function addRateSubmit(Request $req) { 
        //Submit to Database
        $reg = new HeaderRate; 
        $reg->kt_fourteen = $req->kt_fourteen;
        $reg->kt_eighteen = $req->kt_eighteen;
        $reg->kt_twentytwo = $req->kt_twentytwo;
        $reg->kt_twentyfour = $req->kt_twentyfour;
        $reg->gm_one = $req->gm_one;
        $reg->rate_date = $req->rate_date; 
        $reg->save();
        
        //subscription notification
        if(date('Y-m-d')==$req->rate_date){
            $r=DB::table('subscriptions')->where('type','kt_fourteen')->where('price','>=',$req->kt_fourteen)->select('email','name')->get();

            $r1=DB::table('subscriptions')->where('type','kt_eighteen')->where('price','>=',$req->kt_eighteen)->select('email','name')->get();

            $r2=DB::table('subscriptions')->where('type','kt_twentytwo')->where('price','>=',$req->kt_twentytwo)->select('email','name')->get();

            $r3=DB::table('subscriptions')->where('type','kt_twentyfour')->where('price','>=',$req->kt_twentyfour)->select('email','name')->get();

            $r4=DB::table('subscriptions')->where('type','gm_one')->where('price','>=',$req->gm_one)->select('email','name')->get();

            if($r){
                foreach ($r as $fourteen) {
                    $to = $fourteen->email;
                    $subject = 'Price is Modify';
                    $message = "Dear ".$fourteen->name.", \nToday Price is ".$req->kt_fourteen.":\n\nThank You  \n\nTeam Sonamandi";
                    $headers = 'From: noreply@headwaygms.com';        
                    if(mail($to, $subject, $message, $headers)) {
                        echo 'We have received your enquiry. You will be contacted soon.';
                        
                    } else {
                        echo 'Sorry! something went wrong, please try again.';
                    }
                }
            }
            if($r1){
                foreach ($r1 as $eighteen) {
                    $to = $eighteen->email;
                    $subject = 'Price is Modify';
                    $message = "Dear ".$eighteen->name.", \nToday Price is ".$req->kt_fourteen.":\n\nThank You  \n\nTeam Sonamandi";
                    $headers = 'From: noreply@headwaygms.com';        
                    if(mail($to, $subject, $message, $headers)) {
                        echo 'We have received your enquiry. You will be contacted soon.';
                        
                    } else {
                        echo 'Sorry! something went wrong, please try again.';
                    }
                }
            }
             if($r2){
                foreach ($r2 as $twentytwo) {
                    $to = $twentytwo->email;
                    $subject = 'Price is Modify';
                    $message = "Dear ".$twentytwo->name.", \nToday Price is ".$req->kt_fourteen.":\n\nThank You  \n\nTeam Sonamandi";
                    $headers = 'From: noreply@headwaygms.com';        
                    if(mail($to, $subject, $message, $headers)) {
                        echo 'We have received your enquiry. You will be contacted soon.';
                        
                    } else {
                        echo 'Sorry! something went wrong, please try again.';
                    }
                }
            }
            if($r3){
                foreach ($r3 as $twentyfour) {
                    $to = $twentyfour->email;
                    $subject = 'Price is Modify';
                    $message = "Dear ".$twentyfour->name.", \nToday Price is ".$req->kt_fourteen.":\n\nThank You  \n\nTeam Sonamandi";
                    $headers = 'From: noreply@headwaygms.com';        
                    if(mail($to, $subject, $message, $headers)) {
                        echo 'We have received your enquiry. You will be contacted soon.';
                        
                    } else {
                        echo 'Sorry! something went wrong, please try again.';
                    }
                }
            }
            if($r4){
                foreach ($r4 as $silver) {
                    $to = $silver->email;
                    $subject = 'Price is Modify';
                    $message = "Dear ".$silver->name.", \nToday Price is ".$req->kt_fourteen.":\n\nThank You  \n\nTeam Sonamandi";
                    $headers = 'From: noreply@headwaygms.com';        
                    if(mail($to, $subject, $message, $headers)) {
                        echo 'We have received your enquiry. You will be contacted soon.';
                        
                    } else {
                        echo 'Sorry! something went wrong, please try again.';
                    }
                }
            }
        }
    }

    public function deleteRate($id) {
        HeaderRate::where('id', $id)->delete();
        //Return Response
        return back()->with('success', 1);
    }

     public function viewRate() {
        //Setting Page Title
        $this->data['page_title'] = 'View Rates';
        //Fetching Data
        $this->data['viewrate'] = HeaderRate::orderBy('id', 'desc')->get();
         
        //Return Response
        return view('webviews/admin_view_rate', $this->data);
    }


    public function editHeaderContent($id)
    {
        $this->data['page_title']='Edit Header Content';
        $this->data['flag']=13;
        $this->data['members']= HeaderRate::where('id',$id)->first();
        return view('webviews/admin_edit', $this->data);
    }


    public function updateHeaderContent(Request $req)
    {
         
        HeaderRate::where('id',$req->id)->update([
            'kt_fourteen'=>$req->kt_fourteen, 
            'kt_eighteen'=>$req->kt_eighteen, 
            'kt_twentytwo'=>$req->kt_twentytwo, 
            'kt_twentyfour'=>$req->kt_twentyfour, 
            'gm_one'=>$req->gm_one 
        ]);
        
        return back()->with('success', 1);  
    }  
}
