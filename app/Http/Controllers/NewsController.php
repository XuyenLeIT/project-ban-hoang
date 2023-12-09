<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view("news.index", compact("news"));
    }
    public function create()
    {
        return view("news.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $imageName = time() . '.' . $request->image->getClientOriginalName();
        $product = new News;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->image = "news_images/" . $imageName;
        $product->save();
        $request->image->move(public_path('news_images'), $imageName);
        return redirect()->route("news.index")
            ->with("success", "create news successfully");
    }
    public function edit(News $new)
    {
        return view('news.edit', compact('new'));
    }
    public function update(Request $request, News $new)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'bail|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $existingImage = public_path($new->image);
            if (File::exists($existingImage)) {
                File::delete($existingImage);
            }
            $imageName = time() . '.' . $request->image->getClientOriginalName();
            $request->image->move(public_path('news_images'), $imageName);
            $new->image = "news_images/".$imageName;
        }
        $new->title = $request->title;
        $new->description = $request->description;
        $new->save();
        return redirect()->route('news.index')
            ->with('success', 'news updated successfully.');
    }
}
