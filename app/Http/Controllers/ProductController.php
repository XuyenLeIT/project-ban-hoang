<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index(){
        $products = Product::with('category','images')->get();
        return view('product.index', compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('product.create',compact("categories"));
    }
    public function store(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'images'=>'required',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $product = Product::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id
        ]);

        if($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $destinationPath = public_path('product_images');
                $image->move($destinationPath, $filename);
                $imagePath = 'product_images/' . $filename;
                $newImage = new ProductImage();
                $newImage->path = $imagePath;
                $newImage->product_id = $product->id;
                $newImage->save();
            }
        }

        return redirect()->route('product.index')->with('success', 'Product created successfully');
    }
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        if($product != null){
            $selectedCate = $product->category->id;
        }else{
            return redirect()->route('product.index')->with('error', 'Không tìm thấy sản phẩm');
        }

        return view('product.edit', compact('product','categories','selectedCate')); 
    }
    public function update(Request $request,Product $product)
    {  
        $request->validate([
            'name' => 'required',
            'price' => 'bail|required|numeric|min:10|max:2000',
            'quantity' => 'bail|required|numeric|min:10|max:2000',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->save();
        if ($request->has('deleted_images')) {
            foreach ($request->input('deleted_images') as $imageId) {
                $image = ProductImage::find($imageId);
                if ($image) {
                    // Delete image file from storage
                    if (File::exists($image->path)) {
                        File::delete($image->path);
                    }
                    // Delete the image record from the database
                    $image->delete();
                }
            }
        }
        if($request->hasFile('images')){
            //add new images in to images table
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $destinationPath = public_path('product_images');
                $image->move($destinationPath, $filename);
                $imagePath = 'product_images/' . $filename;
                $newImage = new ProductImage();
                $newImage->path = $imagePath;
                $newImage->product_id = $product->id;
                $newImage->save();
            }
        }
        return redirect()->route('product.index')->with('success', 'Product updated successfully.');;
    }
}
