<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash ;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index(){
        $data = Admin::get();
        

        return view('list-admin', compact('data'));
    }

    public function dashboard(){
        return view('Admin/dashboard');
    }
    public function login(){
        return view('Admin/admin-login');
    }
    public function loginProcess(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            
        ]);

        $admin = Admin::where('adminUsername','=',$request->username)->first();
        if($admin){
            if($request->password.'='.$admin->clientPassword){
                $request->session()->put('adminloginName',$admin->adminName);
                $request->session()->put('adminloginImage',$admin->adminImage);
                return redirect('admin-dashboard');  
            }else{
                return back()->with('fail','You have input wrong Password. Please try again !!!!');
            }
        }else{
            return back()->with('fail','You have input wrong Username or Password. Please try again !!!!');
        };
    }
    public function logout(){
        if(Session::has('adminloginName')){ 
            Session::pull('adminloginName');
            Session::pull('adminloginImage');
            return redirect('/');
        }
    }
}