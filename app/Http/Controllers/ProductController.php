<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $data = Product::get();
        

        return view('list', compact('data'));
    }
    public function addProduct(){
        return view('add-product');
    }
    public function saveProduct(Request $request)
    {
        $productName = $request->productName;
        $productPrice = $request->productPrice;
        $productDescription = $request->productDescription;
        $productProducer = $request->productProducer;
        $productType = $request->productType;

        $prd = new Product();
        $prd->productName = $productName;
        $prd->productPrice = $productPrice;
        $prd->productDescription = $productDescription;
        $prd->producerID = $productProducer;
        $prd->productTypeID = $productType;
        $prd->save();

        return redirect()->back()->with('success','Product Added Successfully');
    }
}
