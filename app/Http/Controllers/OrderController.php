<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(){
        $data = Order::get();
        

        return view('list-order', compact('data'));
    }
    public function addOrder(){
      
        return view('add-order');
    }
    public function saveOrder(Request $request)
    {

        $request->validate([
          
            'clientID' => 'required',
            'orderStatus' => 'required'
        ]);
      
        
        $clientID = $request->clientID;
        $orderStatus = $request->orderStatus;
        

        $order = new Order();
       
        $order->clientID = $clientID;
        $order->orderStatus = $orderStatus;
        $order->save();
        

        return redirect()->back()->with('success','Order Added Successfully');
    }
    public function editOrder($id){
        $data = Order::where('orderID','=',$id)->first();
        return view('edit-order',compact('data'));
    }
    public function updateOrder(Request $request){
        $id = $request->orderID;

        Order::where('orderID','=',$id)->update([
            'orderID' => $request->orderID,
            'clientID' => $request->clientID,
            'orderStatus' => $request->orderStatus
        ]);
        return redirect()->back()->with('success','Order Edited Successfully');
    }
    public function deleteOrder($id){
        Order::where('orderID','=',$id)->delete();
        return redirect()->back()->with('success','Order Deleted Successfully');
    }
}
