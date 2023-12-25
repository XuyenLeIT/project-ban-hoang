<?php

namespace App\Http\Controllers;

use App\Models\Caraulsel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CaraulselController extends Controller
{
    public function index(){
        $cals = Caraulsel::all();
        return view("be.carausel.index",compact("cals"));
    }
    public function create(){
        return view("be.carausel.create");
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
        $cal = new Caraulsel;
        $cal->name = $request->name;
        $cal->status = $request->status;
        $cal->image = "news_images/" . $imageName;
        $cal->save();
        $request->image->move(public_path('news_images'), $imageName);
        return redirect()->route("carausel.index")
            ->with("success", "create carausel successfully");
    }
    public function delete($id){
        $cal = Caraulsel::find($id);
        if($cal != null){
            if (File::exists($cal->image)) {
                File::delete($cal->image);
            }
            $cal->delete();
            return redirect()->route("carausel.index")
            ->with("success", "delete carausel successfully");
        }
    }
}
