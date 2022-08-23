<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function index(){
        $data = ProductType::get();
        

        return view('list-producttype', compact('data'));
    }
    public function addProductType(){
        return view('add-producttype');
    }
    public function saveProductType(Request $request)
    {

        $request->validate([
         
            'productTypeName' => 'required',
        ]);
      
   
        $productTypeName = $request->productTypeName;
        $productTypeDescription = $request->productTypeDescription;
        

        $producttype = new ProductType();
      
        $producttype->productTypeName = $productTypeName;
        $producttype->productTypeDescription = $productTypeDescription;
        $producttype->save();
        

        return redirect()->back()->with('success','Product Type Added Successfully');
    }
    public function editProductType($id){
        $data = ProductType::where('productTypeID','=',$id)->first();
        return view('edit-producttype',compact('data'));
    }
    public function updateProductType(Request $request){
        $id = $request->productTypeID;

        ProductType::where('producttypeID','=',$id)->update([
            'productTypeID' => $request->productTypeID,
            'productTypeName' => $request->productTypeName,
            'productTypeDescription' => $request->productTypeDescription,
        ]);

        return redirect()->back()->with('success','Product Type Edited Successfully');
    }
    public function deleteProductType($id){
        ProductType::where('productTypeID','=',$id)->delete();
        return redirect()->back()->with('success','Product Type Deleted Successfully');
    }
}
