<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
      $products = Product::all();
      $breakingNews= News::latest()->take(4)->get();
      $categories = Category::all()->take(5);
      return view("fe.home.index",compact("products","breakingNews",'categories'));
   }
   
}
