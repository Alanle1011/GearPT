<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Hash ;
use Illuminate\Support\Facades\Session;


class ClientController extends Controller
{
    public function register(){
        return view('GearPT/register');
    }

    public function registerProcess(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'name' => 'required'
        ]);


        $client = new Client();
        $client->clientName = $request->name;
        $client->clientphone = $request->phone;
        $client->clientAddress = $request->address;
        $client->clientUsername = $request->username;
        $client->clientPassword = Hash::make($request->password);
        $client->clientImage = $request->image;
        $res = $client->save();
        if($res){
            return back()->with('success','You have register successfully');
        }else{
            return back()->with('fail','You have fail, please try again');
        }
    }

    public function login(){
        return view('GearPT/login');
    }

    public function loginProcess(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            
        ]);

        $client = Client::where('clientUsername','=',$request->username)->first();
        if($client){
            if(Hash::check($request->password,  $client->clientPassword)){
                $request->session()->put('loginID',$client->clientName);
                return redirect('/');  
            }else{
                return back()->with('fail','You have input wrong Password. Please try again !!!!');
            }
        }else{
            return back()->with('fail','You have input wrong Username or Password. Please try again !!!!');
        };
    }
    public function logout(){
        if(Session::has('loginID')){
            Session::pull('loginID');
            return redirect('/');
        }
    }
}
