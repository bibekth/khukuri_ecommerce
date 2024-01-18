<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['user'] = Auth::user();
        $data['slider'] = Image::where('description', 'for the slider')->get();
        $data['products'] = Product::all();
        return view('dashboard.home',$data);
    }
     public function cart($id){
        $data['user'] = Auth::user();
        $data['product'] = Product::find($id);
        return view('cart/add-cart',$data);
     }

     public function about_us(){
        $data['user'] = Auth::user();
        return view('dashboard.aboutus',$data);
     }

     public function contact_us(){
        $data['user'] = Auth::user();
        $data['contact'] = Image::where('description','for the contact page')->pluck('path')->first();
        return view('dashboard.contactus',$data);
     }

     public function product(){
        $data['user'] = Auth::user();
        $data['products'] = Product::all();
        return view('dashboard.product', $data);
     }
}
