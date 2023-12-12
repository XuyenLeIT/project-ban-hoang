<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
      $products = Product::all();
      $breakingNews= News::latest()->take(4)->get();
    return view("fe.home.index",compact("products","breakingNews"));
   }
}
