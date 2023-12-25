<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Caraulsel;
use App\Models\Category;
use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(Request $request){
      $name = $request->input('name');
      $products = Product::all();
      if($name != ""){
         $products = Product::where('name', 'LIKE', '%' . $name . '%')->get();
      }
      $breakingNews= News::latest()->take(4)->get();
      $categories = Category::all()->take(5);
      $cals = Caraulsel::all()->take(5);
      $banners = Banner::all()->take(2);
      return view("fe.home.index",compact("products","breakingNews",'categories','cals','banners'));
   }
   
}
