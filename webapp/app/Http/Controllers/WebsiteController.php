<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Website;
use App\WebsiteCatalogue;
use App\WebsiteContactEnquiry;
use App\WebsiteService;
use App\WebsiteSlider;
use App\WebsiteTestimonial;
use App\User;

class WebsiteController extends Controller
{
    public function apply() {
        User::where('id', Auth::id())->update([
            'has_website' => 2
        ]);

        $reg = new Website;
        $reg->user_id = Auth::id();
        $reg->save();

        return redirect('dashboard')->with('success', 1);
    }

    public function updateWebsiteDetails() {
        //Setting Page Title
        $this->data['page_title'] = 'Manage Your Website';
        $this->data['website'] = Website::where('user_id', Auth::id())->first();
        $this->data['catalogue'] = WebsiteCatalogue::where('website', $this->data['website']->id)->get();
        $this->data['services'] = WebsiteService::where('website', $this->data['website']->id)->get();
        $this->data['sliders'] = WebsiteSlider::where('website', $this->data['website']->id)->get();
        $this->data['testimonials'] = WebsiteTestimonial::where('website', $this->data['website']->id)->get();
    	return view('webviews/admin_manage_website', $this->data);
    }

    public function updateWebsiteSubmit(Request $req) {
        //Uploading Image
        if($req->hasFile('image')) {
            $file = $req->file('image');
            $filename = 'logo'.time().'.'.$req->image->extension();
            $destinationPath = storage_path('../../images/websites');
            $file->move($destinationPath, $filename);
            Website::where('id', $req->id)->update([
                'logo' => 'images/websites/'.$filename,
            ]);
        }
        
        //Data to DB
        //$reg = new Website;
        //$reg->title = $req->title;
        //$reg->domain = preg_replace('/-+/', '-', preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $req->title))).$req->id;
        Website::where('id', $req->id)->update([
            'title' => $req->title,
            'domain' => preg_replace('/-+/', '-', preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $req->title))).$req->id,
            'about' => $req->about,
            'service_description' => $req->service_description,
            'address' => $req->address,
            'phone' => $req->phone,
            'email' => $req->email,
            'facebook' => $req->facebook,
            'twitter' => $req->twitter,
            'instagram' => $req->instagram
        ]);
        return back()->with('success', 1);
    }

    public function addWebsiteServiceSubmit(Request $req) {
        $reg = new WebsiteService;
        $reg->website = $req->id;
        $reg->title = $req->title;
        $reg->description = $req->description;
        $reg->save();

        return back()->with('success', 1);
    }

    public function deleteService($id) {
        WebsiteService::where('id', $id)->delete();
        return back()->with('success', 1);
    }

    public function addWebsiteSliderSubmit(Request $req) {
        //Uploading Image
    	$file = $req->file('image');
        $filename = 'slider'.time().Auth::id().'.'.$req->image->extension();
        $destinationPath = storage_path('../../images/websites/sliders');
        $file->move($destinationPath, $filename);
        //Data to DB
        $reg = new WebsiteSlider;
        $reg->website = $req->id;
        $reg->image = 'images/websites/sliders/'.$filename;
        $reg->save();
        return back()->with('success', 1);
    }

    public function deleteSlider($id) {
        WebsiteSlider::where('id', $id)->delete();
        return back()->with('success', 1);
    }

    public function addWebsiteCatalogueSubmit(Request $req) {
        //Uploading Image
    	$file = $req->file('image');
        $filename = 'catalogue'.time().Auth::id().'.'.$req->image->extension();
        $destinationPath = storage_path('../../images/websites/catalogue');
        $file->move($destinationPath, $filename);
        //Data to DB
        $reg = new WebsiteCatalogue;
        $reg->website = $req->id;
        $reg->image = 'images/websites/catalogue/'.$filename;
        $reg->description = $req->description;
        $reg->save();
        return back()->with('success', 1);
    }

    public function deleteCatalogue($id) {
        WebsiteCatalogue::where('id', $id)->delete();
        return back()->with('success', 1);
    }

    public function viewWebsiteContactEnquiry() {
        $this->data['page_title'] = 'Enquiries from your Website';
        $this->data['enquiries'] = WebsiteContactEnquiry::where('website', Website::where('user_id', Auth::id())->pluck('id')->first())->orderBy('id', 'desc')->get();

        return view('webviews/admin_view_website_enquiry', $this->data);
    }
}
