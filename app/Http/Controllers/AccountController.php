<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        return view();
    }
    public function edit($id){
        $account = Account::find($id);
        return view('be.account.edit',compact('account'));
    }
    public function update(Request $request,Account $account){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'role'=>'required',
        ]);
        $account->update($request->all());
        return redirect()->route("account.index")
            ->with('success','Update account successfully');
    }
    public function login(){
        return view("be.account.login");
    }
    public function checkLogin(Request $request){
        $account = Account::where('email','=',$request->email)->first();
        if($account != null){
            if($account->password == $request->password){
                session()->put('accountS',$account);
                return redirect()->route('dashboard.index');
            }else{
                return redirect()->back()->with('error','Invalid credential');
            }
        }
        return redirect()->back()->with('error','Invalid credential');
    }
    public function logout(){
        session()->forget('accountS');
        return redirect()->route('login.index')->with('success','logout thành công');
    }
}
