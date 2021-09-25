<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Restdetail;
use App\Models\Category;
use App\Models\Product;
use App\Models\CommunityMember;
use App\Models\Catdesc;


class RestaurantController extends Controller
{
    //
    public function index ()
    {
        return view('restaurantly.index');
    }
    public function about ()
    {
        $galleries = Gallery::where('picture_type', '=', 'Restaran')->first();
        $restdetail = Restdetail::all();
        return view('restaurantly.about', compact('galleries', 'restdetail'));
    }
    public function menu ()
    {
        $categories = Category::all();
        $product = Product::all();
        return view('restaurantly.menu', compact('categories', 'product'));
    }
    public function events ()
    {
        return view('restaurantly.events');
    }
    public function gallery ()
    {
        $galleries = Gallery::all();
        return view('restaurantly.gallery', compact('galleries'));
    }
    public function chefs ()
    {
          $members = CommunityMember::all();
        return view('restaurantly.chefs', compact('members'));
    }
    public function contact ()
    {
        return view('restaurantly.contact');
    }
    public function booktable ()
    {
        return view('restaurantly.booktable');
    }
   
}
