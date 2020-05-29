<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Order;

class OrderController extends Controller
{
    public function myOrders() {
        //Setting Page Title
       $this->data['page_title'] = 'My Orders';
        //Fetch Data
       $this->data['orders'] = Order::where('buyer_id', Auth::id())->orderBy('created_at', 'desc')->get();
        return view('webviews/admin_my_orders',$this->data);
    }

    public function adminShowOrders() {
        //Setting Page Title
       $this->data['page_title'] = 'All Orders';
        //Fetch Data
       $this->data['order'] = Order::orderBy('created_at', 'desc')->get();

        return view('webviews/admin_show_orders',$this->data);
    }

    public function vendorShowOrders() {
        //Setting Page Title
       $this->data['page_title'] = 'All Orders';
        //Fetch Data
       $this->data['vendororder'] = Order::where('vendor_id', Auth::id())->orderBy('created_at', 'desc')->get();
        return view('webviews/vendor_show_orders',$this->data);
    }
}
