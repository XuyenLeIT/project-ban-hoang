<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class AddressController extends Controller
{
    public function index(){
        $address = Address::first();
        return view('be.address.index',compact("address"));
    }
    public function address(){
        $address = Address::first();
        return view('fe.address.index',compact("address"));
    }
    public function compose(view $view)
    {
        $address = Address::first();
        $view->with(compact("address"));
    }
    public function edit(Address $address)
    {
        return view('be.address.edit', compact('address'));
    }
    public function update(Request $request, Address $address)
    {
        $request->validate([
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'logo' => 'bail|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('logo')) {
            $existingImage = public_path($address->logo);
            if (File::exists($existingImage)) {
                File::delete($existingImage);
            }
            $imageName = time() . '.' . $request->logo->getClientOriginalName();
            $request->logo->move(public_path('news_images'), $imageName);
            $address->logo = "news_images/".$imageName;
        }
        $address->email = $request->email;
        $address->address = $request->address;
        $address->phone = $request->phone;
        $address->save();
        return redirect()->route('address.index')
            ->with('success', 'news address successfully.');
    }
}
