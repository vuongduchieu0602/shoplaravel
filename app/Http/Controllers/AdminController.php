<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{


    public function login(){
        return view('admin.admin_login');
    }

    public function getdashboard(){
        return view('admin.admin_dashboard');
    }

    public function dashboard(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Bạn chưa nhập Email',
            'password.required'=>'Bạn chưa nhập mật khẩu'
        ]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect()->route('getdashboard');
        }else{
            return redirect()->back()->with('thongbao','Đăng nhập thất bại');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
