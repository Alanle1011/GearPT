<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function index(){
        $data = OrderDetail::get();
        

        return view('list-OrderDetail', compact('data'));
    }
    public function addOrderDetail(){
        $orderDetailsID = OrderDetail::get();
        return view('add-OrderDetail', compact('orderDetailsID'));
    }
    public function saveOrderDetail(Request $request)
    {

        $request->validate([
            'orderDetailsID' => 'required',
            'orderID' => 'required',
            'productID' => 'required'
        ]);
      
        $orderDetailsID = $request->orderDetailsID;
        $orderID = $request->orderID;
        $productID = $request->productID;
        

        $OrderDetail = new OrderDetail();
        $OrderDetail->orderDetailsID = $orderDetailsID;
        $OrderDetail->orderID = $orderID;
        $OrderDetail->productID = $productID;
        $OrderDetail->save();
        

        return redirect()->back()->with('success','Order Detail Added Successfully');
    }
    public function editOrderDetail($id){
        $data = OrderDetail::where('OrderDetailsID','=',$id)->first();
        return view('edit-OrderDetail',compact('data'));
    }
    public function updateOrderDetail(Request $request){
        $id = $request->OrderDetailID;

        OrderDetail::where('OrderDetailsID','=',$id)->update([
            'orderDetailsID' => $request->orderDetailsID,
            'orderID' => $request->orderID,
            'productID' => $request->productID,
        ]);

        return redirect()->back()->with('success','Order Detail Edited Successfully');
    }
    public function deleteOrderDetail($id){
        OrderDetail::where('OrderDetailsID','=',$id)->delete();
        return redirect()->back()->with('success','Order Detail Deleted Successfully');
    }
}
