<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    public function index(){
        $banners = Banner::all()->take(2);
        return view("be.banner.index",compact("banners"));
    }
    public function create(){
        return view("be.banner.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg|max:4048'
        ]);
        $imageName = time() . '.' . $request->image->getClientOriginalName();
        $ban = new Banner;
        $ban->name = $request->name;
        $ban->status = $request->status;
        $ban->image = "news_images/" . $imageName;
        $ban->save();
        $request->image->move(public_path('news_images'), $imageName);
        return redirect()->route("banner.index")
            ->with("success", "create banner successfully");
    }
    public function delete($id){
        $ban = Banner::find($id);
        if($ban != null){
            if (File::exists($ban->image)) {
                File::delete($ban->image);
            }
            $ban->delete();
            return redirect()->route("banner.index")
            ->with("success", "delete banner successfully");
        }
    }
}
