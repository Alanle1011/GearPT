<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash ;
use Illuminate\Support\Facades\Session;
use App\Models\Client;

class ClientController extends Controller
{
    public function index(){
        $data = Client::get();
        

        return view('list-client', compact('data'));
    }

    public function addClient(){
        $clientIDdata = client::get();
        return view('add-client', compact('clientIDdata'));
    }
    public function saveClient(Request $request)
    {

        $request->validate([
            
            'clientName' => 'required',
            'clientPhone' => 'required',
            'clientAddress' => 'required',
            'clientUsername' => 'required',
            'clientPassword' => 'required',
            'clientImage' => 'required'
        ]);
      
      
        $clientName = $request->clientName;
        $clientPhone = $request->clientPhone;
        $clientAddress= $request->clientAddress;
        $clientUsername = Hash::make($request->clientUsername);
        $clientPassword = $request->clientPassword;
        $clientImage= $request->file('clientImage')->getClientOriginalName();
        
        //move Upladed file
        $request->clientImage->move(public_path('img/GearPT'),$clientImage);

        $client = new Client();
        
        $client->clientName = $clientName;
        $client->clientPhone = $clientPhone;
        $client->clientAddress = $clientAddress;
        $client->clientUsername = $clientUsername;
        $client->clientPassword = $clientPassword;
        $client->clientImage = $clientImage;
        $client->save();
        

        return redirect()->back()->with('success','client Added Successfully');
    }

    public function editClient($id){
        $data = Client::where('clientID','=',$id)->first();
        return view('edit-client',compact('data'));
    }
    public function updateClient(Request $request){
        $id = $request->clientID;

        Client::where('clientID','=',$id)->update([
            
            'clientName' => $request->clientName,
            'clientPhone' => $request->clientPhone,
            'clientAddress' => $request->clientAddress,
            'clientUsername' => $request->clientUsername,
            'clientPassword' => $request->clientPassword,
            'clientImage' => $request->clientImage
        ]);

        return redirect()->back()->with('success','Client Edited Successfully');
    }
    
    public function deleteClient($id){
        Client::where('clientID','=',$id)->delete();
        return redirect()->back()->with('success','Client Deleted Successfully');
    }

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
