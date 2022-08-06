<?php

namespace App\Http\Controllers;

use App\Models\Producer;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductType;

use function GuzzleHttp\Promise\all;

class ProductController extends Controller
{
    public function index(){
        $data = Product::get();
        

        return view('list-product', compact('data'));
    }
    public function addProduct(){
        $productTypedata = ProductType::get();
        $producerdata =Producer::get();
        return view('add-product', compact('productTypedata','producerdata'));
    }
    public function saveProduct(Request $request)
    {

        $request->validate([
            'productName' => 'required',
            'productPrice' => 'required',
            'productImage' => 'required',
            'productType' => 'required',
            'productProducer' => 'required'
        ]);
      
        $productName = $request->productName;
        $productPrice = $request->productPrice;
        $productDescription = $request->productDescription;
        $productImage= $request->productImage;
        $productType = $request->productType;
        $productProducer = $request->productProducer;
        

        $prd = new Product();
        $prd->productName = $productName;
        $prd->productPrice = $productPrice;
        $prd->productDescription = $productDescription;
        $prd->productImage = $productImage;
        $prd->productTypeID = $productType;
        $prd->producerID = $productProducer;
        $prd->save();
        

        return redirect()->back()->with('success','Product Added Successfully');
    }
    public function editProduct($id){
        $data = Product::where('productID','=',$id)->first();
        return view('edit-product',compact('data'));
    }
    public function updateProduct(Request $request){
        $id = $request->productID;

        Product::where('productID','=',$id)->update([
            'productName' => $request->productName,
            'productPrice' => $request->productPrice,
            'productDescription' => $request->productDescription,
            'productImage' => $request->productImage,
            'productTypeID' => $request->productType,
            'producerID' => $request->productProducer

        ]);
        return redirect()->back()->with('success','Product Edited Successfully');
    }
    public function deleteProduct($id){
        Product::where('productID','=',$id)->delete();
        return redirect()->back()->with('success','Product Deleted Successfully');
    }
}
