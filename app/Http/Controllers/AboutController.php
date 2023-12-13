<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    public function index(){
        $about = About::first();
        return view("be.about.index",compact('about'));
    }
    public function about(){
        $about = About::first();
        return view("fe.about.index",compact('about'));
    }
    public function edit($id){
        $about = About::find($id);
        return view("be.about.edit",compact('about'));
    }
    public function update(Request $request,About $about){
        $request->validate([
            'description'=>'required',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);
        if ($request->hasFile('image')) {
            $existingImage = public_path($about->image);
            if (File::exists($existingImage)) {
                File::delete($existingImage);
            }
            $imageName = time() . '.' . $request->image->getClientOriginalName();
            $request->image->move(public_path('news_images'), $imageName);
            $about->image = "news_images/".$imageName;
        }
        $about->description = $request->description;
        $about->save();
        return redirect()->route('about.index')
            ->with('success', 'about updated successfully.');
    }
}
