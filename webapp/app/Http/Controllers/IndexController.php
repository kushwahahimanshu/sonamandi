<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Illuminate\Support\Facades\DB;

use App\Ad;
use App\Slider;
use App\NewsBlog;
use App\Association;
use App\AssociationMember;
use App\JewelleryCategory;
use App\Catalogue;
use App\Blacklist;
use App\Directory;
use App\Job;
use App\JobApplication;
use App\Shop;
use App\Order;
use App\Website;
use App\WebsiteCatalogue;
use App\WebsiteContactEnquiry;
use App\WebsiteService;
use App\WebsiteSlider;
use App\WebsiteTestimonial;
use App\Footer;
use App\SocialLink;
use App\HeaderRate; 
use App\User;
use App\Qutation;
use App\Subscription;
use App\Metatag;
 

class IndexController extends Controller
{   
    public $data = null; 

    public function __construct(){
       $this->data['header'] = HeaderRate::orderBy('rate_date', 'desc')->first();  
       $this->data['footer'] = Footer::where('id', 1)->orderBy('id', 'desc')->get(); 
       $this->data['social'] = SocialLink::where('id', 1)->orderBy('id', 'desc')->get();  
    }


    public function index() {
        //Fetching Data
         
        $this->data['ads'] = Ad::where('active', 1)->orderBy('id', 'desc')->get();
        $this->data['sliders'] = Slider::where('active', 1)->orderBy('id', 'desc')->get();
        $this->data['news'] = NewsBlog::where('type', 1)->where('active', 1)->orderBy('id', 'desc')->take(7)->get();
        $this->data['jobs'] = Job::orderBy('id', 'desc')->take(7)->get();
        $this->data['directory'] = Directory::orderBy('rating', 'desc')->take(7)->get();
        $this->data['blog'] = NewsBlog::where('type', 2)->where('active', 1)->orderBy('id', 'desc')->take(7)->get();
        $this->data['catalogue'] = Catalogue::where('active', 1)->orderBy('id', 'desc')->take(7)->get();
        $this->data['shop'] = Shop::where('active', 1)->orderBy('id', 'desc')->take(7)->get();
        $this->data['metatag'] = Metatag::where('id', 10)->first();
        //Return Response
        return view('webviews/main_home', $this->data);
    }

    public function news($city = null ,Request $req) {
        //Fetching Data
        $this->data['metatag'] = Metatag::where('id', 2)->first();

        $this->data['newspage'] = 'news';

        $this->data['ads'] = Ad::where('active', 1)->orderBy('id', 'desc')->get(); 
        if ($city == null) { 
           $this->data['news'] = NewsBlog::where('type', 1)->where('active', 1)->orderBy('id', 'desc')->paginate(15); 
        } else {
            $this->data['news'] = NewsBlog::where('type', 1)->where('content', 'like', '%'.$city.'%')->where('active', 1)->orderBy('id', 'desc')->paginate(15); 
        }

        $this->data['applied_filter'] = "";
        if($req->filter) {
            if(count($req->filter) > 0) {
                $count = 0;
                $cond = "";
                foreach($req->filter as $r) {
                    $this->data['applied_filter'] .= "[".$r."]";
                    if($count != 0) {
                        $cond .= " AND ";
                    }
                    $cond .= "categories  like '%".$r."%'";
                    $count = 1;
                }
                //echo $cond;
                $this->data['news'] = DB::select(DB::raw('select * from newsblog where '.$cond));
                //Catalogue::whereRaw($cond)->where('active', 1)->orderBy('id', 'desc')->get();
            }
        }

        //Return Response
        return view('webviews/main_news_list', $this->data);
    }

    public function newsByAuthor($author) {
        //Fetching Data
        $this->data['userdata'] = User::where('name',$author)->first();
        $this->data['ads'] = Ad::where('active', 1)->orderBy('id', 'desc')->get();
        $this->data['news'] = NewsBlog::where('type', 1)->where('active', 1)->where('author', $author)->orderBy('id', 'desc')->paginate(15);
        //dd($this->data['news']);
        $this->data['metatag'] = NewsBlog::where('author', $author)->first(); 
        //Return Response
        return view('webviews/main_news_author_list', $this->data);
    }

    public function readNews($id, $title) {
        //Fetching Data
        $user = DB::table('newsblog')->where('id', '=', $id)->increment('total_view'); 
        
        $this->data['ads'] = Ad::where('active', 1)->orderBy('id', 'desc')->get();
        $this->data['news'] = NewsBlog::where('id', $id)->first();
        $this->data['morenews'] = NewsBlog::where('type', 1)->where('active', 1)->orderBy('id', 'desc')->take(3)->
        get();
        $this->data['topnews'] = NewsBlog::where('type', 1)->where('active', 1)->orderBy('total_view', 'desc')->take(3)->get();
        $this->data['authornews'] = NewsBlog::where('type', 1)->where('active', 1)->where('author', $this->data['news']->author)->orderBy('id', 'desc')->take(3)->get();
        $this->data['metatag'] = NewsBlog::where('id', $id)->first(); 
        $this->data['flag'] = 'news';
        //Return Response
        return view('webviews/main_read_news', $this->data);
    }

    public function association($association = null) {
        //Fetching Data
        $this->data['metatag'] = Metatag::where('id', 1)->first();

        $this->data['ads'] = Ad::where('active', 1)->orderBy('id', 'desc')->get();
        $this->data['associations'] = Association::orderBy('name', 'asc')->get();
        
        $this->data['members'] = null;
        $this->data['current_association'] = urldecode($association);
        if($association != null) {
            $this->data['members'] = AssociationMember::where('association', urldecode($association))->where('active', 1)->orderBy('name', 'asc')->get();
        }
        //Return Response
        return view('webviews/main_association', $this->data);
    }

    public function blogs($city = null ,Request $req) {
        //Fetching Data
        $this->data['metatag'] = Metatag::where('id', 3)->first();

        $this->data['blogpage'] = 'blogs';

        $this->data['ads'] = Ad::where('active', 1)->orderBy('id', 'desc')->get(); 
        if ($city == null) { 
           $this->data['blogs'] = NewsBlog::where('type', 2)->where('active', 1)->orderBy('id', 'desc')->paginate(15); 
        } else {
            $this->data['blogs'] = NewsBlog::where('type', 2)->where('content', 'like', '%'.$city.'%')->where('active', 1)->orderBy('id', 'desc')->paginate(15); 
        }  

        $this->data['applied_filter'] = "";
        if($req->filter) {
            if(count($req->filter) > 0) {
                $count = 0;
                $cond = "";
                foreach($req->filter as $r) {
                    $this->data['applied_filter'] .= "[".$r."]";
                    if($count != 0) {
                        $cond .= " AND ";
                    }
                    $cond .= "categories  like '%".$r."%'";
                    $count = 1;
                }
                //echo $cond;
                $this->data['blogs'] = DB::select(DB::raw('select * from newsblog where '.$cond));
                //Catalogue::whereRaw($cond)->where('active', 1)->orderBy('id', 'desc')->get();
            }
        }
        //Return Response
        return view('webviews/main_blogs_list', $this->data);
    } 

    public function blogsByAuthor($author) {
        //Fetching Data
        $this->data['blogdata'] = User::where('name',$author)->first();
        $this->data['ads'] = Ad::where('active', 1)->orderBy('id', 'desc')->get();
        $this->data['blogs'] = NewsBlog::where('type', 2)->where('active', 1)->where('author', $author)->orderBy('id', 'desc')->paginate(15);
        $this->data['metatag'] = NewsBlog::where('author', $author)->first(); 

        //Return Response
        return view('webviews/main_blogs_author_list', $this->data);
    }

    public function readBlog($id, $title) {
        $user = DB::table('newsblog')->where('id', '=', $id)->increment('total_view'); 
        //Fetching Data
        $this->data['ads'] = Ad::where('active', 1)->orderBy('id', 'desc')->get();
        $this->data['blog'] = NewsBlog::where('id', $id)->first();
        $this->data['moreblogs'] = NewsBlog::where('type', 2)->where('active', 1)->orderBy('id', 'desc')->take(3)->get();
        $this->data['topblogs'] = NewsBlog::where('type', 2)->where('active', 1)->orderBy('total_view', 'desc')->take(3)->get();
        $this->data['authorblogs'] = NewsBlog::where('type', 2)->where('active', 1)->where('author', $this->data['blog']->author)->orderBy('id', 'desc')->take(3)->get();
        $this->data['metatag'] = NewsBlog::where('id', $id)->first(); 

        $this->data['flag'] = 'blog';
        //Return Response
        return view('webviews/main_read_blog', $this->data);
    }

    public function catalogue($city = null ,Request $req) {
        //Fetching Data
        $this->data['metatag'] = Metatag::where('id', 4)->first();

        $this->data['page'] = 'catalogue';
        $this->data['ads'] = Ad::where('active', 1)->orderBy('id', 'desc')->get();
        $this->data['category'] = JewelleryCategory::where('parent', null)->orderBy('parent', 'asc')->get(); 
        if ($city == null) { 
         $this->data['products'] = Catalogue::where('active', 1)->orderBy('id', 'asc')->paginate(15); 
        } 

        else { 
            $this->data['products'] = Catalogue::where('active', 1)->orderBy('id', 'asc')->paginate(15); 
        }  

        $this->data['applied_filter'] = "";
        if($req->filter) {
            if(count($req->filter) > 0) {
                $count = 0;
                $cond = "";
                foreach($req->filter as $r) {
                    $this->data['applied_filter'] .= "[".$r."]";
                    if($count != 0) {
                        $cond .= " AND ";
                    }
                    $cond .= "categories like '%".$r."%'";
                    $count = 1;
                }
                //echo $cond;
                $this->data['products'] = DB::select(DB::raw('select * from catalogue where '.$cond));
                //Catalogue::whereRaw($cond)->where('active', 1)->orderBy('id', 'desc')->get();
            }
        }
        //var_dump($this->data['products']);
        //Return Response
        return view('webviews/main_catalogue', $this->data);
    }

    public function blacklist($category = null) {
        //Fetching Data
        $this->data['metatag'] = Metatag::where('id', 5)->first();

        $this->data['ads'] = Ad::where('active', 1)->orderBy('id', 'desc')->get();
        //Fetching Data
        $this->data['blacklist'] = Blacklist::where('active', 1)->orderBy('id', 'desc')->paginate(15); 
        if($category != null) {
            $this->data['blacklist'] = Blacklist::where('type', 'like', '%'.$category.'%')->where('active', 1)->orderBy('id', 'desc')->paginate(15);
        }
        //Return Response
        return view('webviews/main_blacklist', $this->data);
    }

    public function directory($city = null, Request $req) {
        $this->data['metatag'] = Metatag::where('id',7)->first();

        $this->data['page'] = 'directory';
        //Fetching Data
        $this->data['ads'] = Ad::where('active', 1)->orderBy('id', 'desc')->get();
        //Fetching Data
        if ($city == null) { 
          $this->data['directory'] = Directory::where('active', 1)->orderBy('id', 'desc')->paginate(15);     
        } 

        else { 
          $this->data['directory'] = Directory::where('active', 1)->where('city', 'like', '%'.$city.'%')->orderBy('id', 'desc')->paginate(15);     
        }  
        // if($category != null) {
        //     $this->data['directory'] = Blacklist::where('deals_in', 'like', '%'.$category.'%')->where('active', 1)->orderBy('id', 'desc')->get();
        // }
        $this->data['applied_filter'] = "";
        if($req->filter) {
            if(count($req->filter) > 0) {
                $count = 0;
                $cond = "";
                foreach($req->filter as $r) {
                    $this->data['applied_filter'] .= "[".$r."]";
                    if($count != 0) {
                        $cond .= " AND ";
                    }
                    $cond .= "deals_in like '%".$r."%'";
                    $count = 1;
                }
                //echo $cond;
                $this->data['directory'] = DB::select(DB::raw('select * from diretory where '.$cond));
                //Catalogue::whereRaw($cond)->where('active', 1)->orderBy('id', 'desc')->get();
            }
        }
        //Return Response
        return view('webviews/main_directory', $this->data);
    }

    public function directoryDetails($id) {
        //Fetching Data
        $this->data['directoryslider'] = Catalogue::orderBy('id', 'desc')->take(15)->get();

        $this->data['ads'] = Ad::where('active', 1)->orderBy('id', 'desc')->get();
        //Fetching Data
        $this->data['r'] = Directory::where('id', $id)->orderBy('id', 'desc')->first();
        $this->data['metatag'] = Directory::where('id', $id)->first(); 

        
        //Return Response
        return view('webviews/main_directory_details', $this->data);
    }

    public function job($city = null) {
        //Fetching Data
        $this->data['metatag'] = Metatag::where('id', 8)->first();

        $this->data['ads'] = Ad::where('active', 1)->orderBy('id', 'desc')->get();
        //Fetching Data 
         
        if ($city == null) { 
          $this->data['jobs'] = Job::orderBy('id', 'desc')->paginate(15);
        } 

        else { 
          $this->data['jobs'] = Job::where('location', 'like', '%'.$city.'%')->orderBy('id', 'desc')->paginate(15);
        } 
        //Return Response
        return view('webviews/main_job', $this->data);
    }

    public function applyForJob($id) {
        //Fetching Data
        $this->data['ads'] = Ad::where('active', 1)->orderBy('id', 'desc')->get();
        $this->data['metatag'] = Job::where('id', $id)->first(); 

        //Fetching Data
        $this->data['job'] = Job::where('id', $id)->first();
        //Return Response
        return view('webviews/main_apply_for_job', $this->data);
    }

    public function jobApplicationSubmit(Request $req) {
        //Uploading Photo
        $file = $req->file('photo');
        $filename1 = 'photo'.Auth::id().time().'.'.$req->photo->extension();
        $destinationPath = storage_path('../../images/job-apply');
        $file->move($destinationPath, $filename1);
        //Uploading CV
        $file = $req->file('cv');
        $filename2 = 'cv'.Auth::id().time().'.'.$req->cv->extension();
        $destinationPath = storage_path('../../images/job-apply');
        $file->move($destinationPath, $filename2);
        //Commiting to DB
        $reg = new JobApplication;
        $reg->job_id = $req->job_id;
        $reg->author_id = Job::where('id', $req->job_id)->pluck('user_id')->first();
        $reg->applicant_id = Auth::id();
        $reg->full_name = $req->name;
        $reg->phone = $req->phone;
        $reg->email = $req->email;
        $reg->address = $req->address;
        $reg->experience = $req->experience;
        $reg->language = implode( ',',  $req->language); 
        $reg->photograph = 'images/job-apply/'.$filename1;
        $reg->cv = 'images/job-apply/'.$filename2;
        $reg->save();
        //Return Response
        return back()->with('flag', '1');
    }

    public function shop($city = null, Request $req) {
        $this->data['metatag'] = Metatag::where('id',9)->first();

        $this->data['page'] = 'shop';
        $category = null;
        //Fetching Data
        $this->data['ads'] = Ad::where('active', 1)->orderBy('id', 'desc')->get();
        //Fetching Data
        if ($city == null) { 
            $this->data['products'] = Shop::where('active', 1)->orderBy('id', 'desc')->paginate(15);
        }
        else{ 
            $this->data['products'] = Shop::where('active', 1)->orderBy('id', 'desc')->paginate(15);
        }

        $this->data['applied_filter'] = "";
        if($req->filter) {
            if(count($req->filter) > 0) {
                $count = 0;
                $cond = "";
                foreach($req->filter as $r) {
                    $this->data['applied_filter'] .= "[".$r."]";
                    if($count != 0) {
                        $cond .= " AND ";
                    }
                    $cond .= "categories like '%".$r."%'";
                    $count = 1;
                }
                //echo $cond;
                $this->data['products'] = DB::select(DB::raw('select * from shop_new where '.$cond));
                //Catalogue::whereRaw($cond)->where('active', 1)->orderBy('id', 'desc')->get();
            }
        }
        //Return Response
        return view('webviews/main_shop', $this->data);
    }

    public function viewProduct($id) {
        //Fetching Data
        $this->data['ads'] = Ad::where('active', 1)->orderBy('id', 'desc')->get();
        //Fetching Data
        $this->data['product'] = Shop::where('id', $id)->orderBy('id', 'desc')->first();
        $this->data['metatag'] = Shop::where('id', $id)->first(); 

          
        //Return Response
        return view('webviews/main_view_product', $this->data);
    }

    public function placeOrder($id) {
        //Fetching Data
        $this->data['ads'] = Ad::where('active', 1)->orderBy('id', 'desc')->get();
        //Fetching Data
        $this->data['product'] = Shop::where('id', $id)->orderBy('id', 'desc')->first();
        //Return Response
        return view('webviews/main_place_order', $this->data);
    }

    public function placeOrderSubmit(Request $req) {
        //Fetching product info
        $p = Shop::where('id', $req->key)->first();
        //Commiting to DB
        $reg = new Order;
        $reg->product_id = $req->key;
        $reg->vendor_id = $p->vendor_id;
        $reg->buyer_id = Auth::id();
        $reg->name = $req->name;
        $reg->phone = $req->phone;
        $reg->email = $req->email;
        $reg->address = $req->address;
        $reg->city = $req->city;
        $reg->state = $req->state;
        $reg->pin = $req->pin;
        $reg->price = $p->price;
        $reg->payment_method = 'Cash on Delivery';
        $reg->save();
        //Returning Response
        return redirect('thank-you/'.$reg->id);
    }

    public function contact($city = null) {
        //Fetching Data
        $this->data['ads'] = Advertisement::where('active', 1)->orderBy('id', 'desc')->get();
        //Fetching Data
        $this->data['jobs'] = Job::orderBy('id', 'desc')->get();
        if($city != null) {
            $this->data['jobs'] = Job::where('location', 'like', '%'.$city.'%')->orderBy('id', 'desc')->get();
        }
        //Return Response
        return view('webviews/main_job', $this->data);
    }

    public function thankYou($order_id) {
        //Fetching Data
        $this->data['ads'] = Ad::where('active', 1)->orderBy('id', 'desc')->get();
        //Order Details
        $this->data['order'] = Order::join('shop_new', 'orders.product_id', '=', 'shop_new.id')
                ->where('orders.id', $order_id)
                ->select('orders.id', 'shop_new.title', 'shop_new.price')
                ->first();

        return view('webviews/main_order_thank_you', $this->data);
    }

    public function website($site) {
        $this->data['w'] = Website::where('domain', $site)->first();
        if($this->data['w'] == null) {
            return redirect('error');
        } else {
            $this->data['wslider'] = WebsiteSlider::where('website', $this->data['w']->id)->get();
            $this->data['wservices'] = WebsiteService::where('website', $this->data['w']->id)->get();
            $this->data['wcatalogue'] = WebsiteCatalogue::where('website', $this->data['w']->id)->get();

            return view('webviews/website', $this->data);
        }
        //return view('webviews/website');
    }

    public function viewcatalogueimage($id) {
        $user = DB::table('catalogue')->where('id', '=', $id)->increment('total_view'); 
        $this->data['flag']=3; 
        $this->data['ads'] = Ad::where('active', 1)->orderBy('id', 'desc')->get(); 
        $this->data['products'] = Catalogue::where('active', 1)->orderBy('id', 'desc')->where('id',$id)->get();
        $this->data['metatag'] = Catalogue::where('id', $id)->first(); 
        
        $this->data['directory'] = Directory::orderBy('rating', 'desc')->take(7)->get(); 
        //Return Response 
        return view('webviews/main_catalogue_view_image',$this->data);
    }

    public function websiteContactSubmit(Request $req) {
        $reg = new WebsiteContactEnquiry;
        $reg->website = $req->id;
        $reg->name = $req->name;
        $reg->email = $req->email;
        $reg->phone = $req->phone;
        
        $reg->msg = $req->comment;
        $reg->save();

        return back()->with('success', '1');
    } 

    public function nextPost($id){ 
        $new_id = DB::table('catalogue')->where('id', '=', $id)->increment('total_view'); 
        $new_id = Catalogue::where('id', '>', $id)->orderBy('id','asc')->pluck('id')->first(); 
        return redirect('catalogueimage/'.$new_id); 

    } 

    public function previousPost($id){ 
        $new_id = DB::table('catalogue')->where('id', '=', $id)->increment('total_view'); 
        $new_id = Catalogue::where('id', '<', $id)->orderBy('id','desc')->pluck('id')->first(); 
        return redirect('catalogueimage/'.$new_id); 
 
    } 
 

    public function city(Request $req)
    {
        if ($req->keyword == "news"){ 
            return redirect('news/'.$req->city);
        }

        elseif ($req->keyword == "blogs"){ 
            return redirect('blogs/'.$req->city);
        }

        elseif ($req->keyword == "catalogue"){ 
            return redirect('catalogue/'.$req->city);
        }

        elseif ($req->keyword == "directory"){ 
            return redirect('directory/'.$req->city);
        }

        elseif ($req->keyword == "shop"){ 
            return redirect('shop/'.$req->city);
        }

        else{ 
            return redirect('jobs/'.$req->city);
        }
    }

    // add qutation form from directory page
    public function addQuotationDirectoryForm(Request $req) {
         
        $reg = new Qutation; 
        $reg->name = $req->name;
        $reg->phone_no = $req->phone_no; 
        $reg->directory_id = $req->directory_id; 
        $reg->save(); 
        //Return Response
        return back()->with('success',1); 
    }

     public function addQuotationForm(Request $req) {
         
        $reg = new Qutation; 
        $reg->name = $req->name;
        $reg->phone_no = $req->phone_no; 
        $reg->cat_id = $req->cat_id;
        $reg->save();

        //Return Response
        return back()->with('success',1);
    
    }

    public function applyToAll()
    {
        JobApplication::where('applicant_id',Auth::id())->update([
            'apply_all'=>1
        ]);
        return redirect('jobs');
    } 

     //rate page
    public function rate()
    {   
        $this->data['metatag'] = Metatag::where('id', 6)->first();

        $this->data['flag']=1;

         $r=DB::table('header_rates')->select('rate_date')->orderBy('id','desc')->get();
         foreach ($r as $r1 ){
         $date1 = $r1->rate_date;
         $date=date_create($date1);
         $r2= date_format($date,"Y");
         $data[] = $r2; 
        }
        //dd($data);
        $result = array_unique($data);
        $this->data['r']=$result;
        //dd($this->data['r']);
        $format=date('Y-m-01');
       //dd($format);
        $timestamp = strtotime($format);

        $day_count = date('t', $timestamp);
        //dd($day_count);
        $end = date("Y-m-t",strtotime($format));

        $this->data['rate'] = DB::table('header_rates')->whereBetween('rate_date', array($format, $end))->get();
        //dd($date);
       $this->data['ads'] = Ad::where('active', 1)->orderBy('id', 'desc')->get(); 
       return view('webviews.main_rate_page',$this->data);
    }
    public function currentRate(Request $req)
    {
        $this->data['metatag'] = Metatag::where('id', 6)->first();
        
         $r=DB::table('header_rates')->select('rate_date')->orderBy('id','desc')->get();
         foreach ($r as $r1 ){
         $date1 = $r1->rate_date;
         $date=date_create($date1);
         $r2= date_format($date,"Y");
         $data[] = $r2; 
        }
        //dd($data);
        $result = array_unique($data);
        $this->data['r']=$result;

       $this->data['ads'] = Ad::where('active', 1)->orderBy('id', 'desc')->get(); 


        $this->data['flag']=2;
        $year=$req->year;
        $month=$req->month;
        
        $format=$year.'-'.$month.'-'.'01';
       //dd($format);
        $timestamp = strtotime($format);

        $day_count = date('t', $timestamp);
        //dd($day_count);
        $end = date("Y-m-t",strtotime($format));
        //dd($end);
        $this->data['hk'] = DB::table('header_rates')->whereBetween('rate_date', array($format, $end))->get();

       return view('webviews.main_rate_page',$this->data);
        
    }
    public function rateDate(Request $req)
    {
        $reg= new Subscription;
        $reg->name=$req->name;
        $reg->email=$req->email;
        $reg->phone=$req->phone;
        $reg->type=$req->type;
        $reg->price=$req->price;
        $reg->save();

        return back()->with('success',2);
    }

}  