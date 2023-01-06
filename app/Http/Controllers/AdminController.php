<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function Index(){
        return view('admin.login');
    }

    public function Login(Request $request){
        // dd($request->all());
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email' => $check['email'] , 'password'=> $check['password']])){
            return redirect()->route('admin_dashboard')->with('error','Admin logged in successfully.');
        }
        else{
            return back()->with('error','Invalid Credentials.');
        }

    }

    public function Dashboard(){
        return view('admin.admin_master');
    }

    public function AdminLogout() {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login_form')->with('error','Admin logged out successfully.');
    }
}
