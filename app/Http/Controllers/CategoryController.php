<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view("category.index",compact("categories"));
    }
    public function create(){
        return view("category.create");
    }
    public function store(Request $request){
        $request->validate([
            "name"=>"required"
        ]);
        Category::create($request->all());
        return redirect()->route("category.index")->with('success','add cate successfully');
    }
    public function edit($id){
        $category = Category::find($id);
        return view("category.edit",compact("category"));
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
}
