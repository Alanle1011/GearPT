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
        $orderDetailID = OrderDetail::get();
        return view('add-orderdetail', compact('orderDetailID'));
    }
    public function saveOrderDetail(Request $request)
    {

        $request->validate([
            'orderDetailID' => 'required',
            'orderID' => 'required',
            'productID' => 'required'
        ]);
      
        $orderDetailID = $request->orderDetailID;
        $orderID = $request->orderID;
        $productID = $request->productID;
        

        $OrderDetail = new OrderDetail();
        $OrderDetail->orderDetailID = $orderDetailID;
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
            'orderDetailID' => $request->orderDetailID,
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
