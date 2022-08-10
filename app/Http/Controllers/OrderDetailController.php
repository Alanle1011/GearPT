<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;


class OrderDetailController extends Controller
{
    public function index(){
        $data = OrderDetail::get();
        

        return view('list-orderdetail', compact('data'));
    }
    public function addOrderDetail(){
        return view('add-orderdetail');
    }
    public function saveOrderDetail(Request $request)
    {

        $request->validate([
            'orderID' => 'required',
            'productID' => 'required'
        ]);
      
        $orderID = $request->orderID;
        $productID = $request->productID;
        

        $OrderDetail = new OrderDetail();
        $OrderDetail->orderID = $orderID;
        $OrderDetail->productID = $productID;
        $OrderDetail->save();
        

        return redirect()->back()->with('success','Order Detail Added Successfully');
    }
    public function editOrderDetail($id){
        $data = OrderDetail::where('orderDetailID','=',$id)->first();
        return view('edit-orderdetail',compact('data'));
    }
    public function updateOrderDetail(Request $request){
        $id = $request->orderDetailID;

        OrderDetail::where('orderDetailID','=',$id)->update([
            'orderID' => $request->orderID,
            'productID' => $request->productID,
        ]);

        return redirect()->back()->with('success','Order Detail Edited Successfully');
    }
    public function deleteOrderDetail($id){
        OrderDetail::where('orderDetailID','=',$id)->delete();
        return redirect()->back()->with('success','Order Detail Deleted Successfully');
    }
}
