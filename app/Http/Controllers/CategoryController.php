<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view("be.category.index",compact("categories"));
    }
    public function create(){
        return view("be.category.create");
    }
    public function store(Request $request){
        $request->validate([
            "name"=>"required"
        ]);
        Category::create($request->all());
        return redirect()->route("category.index")->with('success','add cate successfully');
    }
    public function compose(view $view)
    {
        $categories = Category::all();
        $view->with(compact("categories"));
    }
    public function edit($id){
        $category = Category::find($id);
        return view("be.category.edit",compact("category"));
    }
    public function update(Request $request,Category $category){
        $request->validate([
            "name"=>"required"
        ]);
        $category->name = $request->name;
        $category->status = $request->status;
        $category->save();
        return redirect()->route("category.index")->with('success','edit cate successfully');;
    }
    public function detail($id)
    {
        $category = Category::find($id);
        $products =  $category->products()->get();
        $orderProducts = Product::where('category_id','!=',$id)->get();
        $news = News::all();

        return view('fe.product.category_products', compact('products','category','orderProducts','news')); 
    }
}
