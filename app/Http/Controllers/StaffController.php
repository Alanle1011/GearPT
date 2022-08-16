<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash ;
use App\Models\Staff;

class StaffController extends Controller
{
    public function index(){
        $data = Staff::get();
        

        return view('list-staff', compact('data'));
    }
    public function addStaff(){
       
        return view('add-staff');
    }
    public function saveStaff(Request $request)
    {

        $request->validate([
            
            'staffName' => 'required',
            'staffPhone' => 'required',
            'staffAddress' => 'required',
            'staffUsername' => 'required',
            'staffPassword' => 'required',
            'staffImage' => 'required'
        ]);
      
     
        $staffName = $request->staffName;
        $staffPhone = $request->staffPhone;
        $staffAddress= $request->staffAddress;
        $staffUsername = $request->staffUsername;
        $staffPassword = Hash::make($request->staffPassword);
        $staffImage= $request->file('staffImage')->getClientOriginalName();
        
        //move Upladed file
        $request->staffImage->move(public_path('img/GearPT'),$staffImage);

        $Staff = new Staff();
     
        $Staff->staffName = $staffName;
        $Staff->staffPhone = $staffPhone;
        $Staff->staffAddress = $staffAddress;
        $Staff->staffUsername = $staffUsername;
        $Staff->staffPassword = $staffPassword;
        $Staff->staffImage = $staffImage;
        $Staff->save();
        

        return redirect()->back()->with('success','Staff Added Successfully');
    }
    public function editStaff($id){
        $data = Staff::where('staffID','=',$id)->first();
        return view('edit-staff',compact('data'));
    }
    public function updatseStaff(Request $request){
        $id = $request->staffID;

        Staff::where('staffID','=',$id)->update([
            'staffName' => $request->staffName,
            'staffPhone' => $request->staffPhone,
            'staffAddress' => $request->staffAddress,
            'staffUsername' => $request->staffUsername,
            'staffPassword' => $request->staffPassword,
            'staffImage' => $request->staffImage
        ]);

        return redirect()->back()->with('success','Staff Edited Successfully');
    }
    public function deleteStaff($id){
        Staff::where('staffID','=',$id)->delete();
        return redirect()->back()->with('success','Staff Deleted Successfully');
    }
}
