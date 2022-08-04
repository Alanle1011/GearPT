<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use hash
;
use PDO;

class ClientController extends Controller
{
    public function register(){
        return view('GearPT/register');
    }

    public function registerProcess(Request $request){
        $client = new Client();
        $client->clientUsername = $request->username;
        $client->clientPassword = $request->password;
        
        $res = $client->save();
        if($res){
            return back()->with('sucess','You have register successfully');
        }else{
            return back()->with('fail','You have fail, please try again');
        }
    }

    public function login(){
        return view('GearPT/login');
    }
}
