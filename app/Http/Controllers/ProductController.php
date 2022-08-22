<?php

namespace App\Http\Controllers;

use App\Models\Producer;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index(){
        $productTypedata = ProductType::get();
        $producerdata =Producer::get();
        $data = DB::table('products')
        ->join('product_types','product_types.productTypeID','products.productTypeID')
        ->join('producers','producers.producerID','products.producerID')
        ->select('products.*','product_types.productTypeName','producers.producerName')
        ->paginate(15);

        return view('list-product', compact('data','productTypedata','producerdata'));
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
        $productImage= $request->file('productImage')->getClientOriginalName();
        $productType = $request->productType;
        $productProducer = $request->productProducer;
        
        //move Upladed file
        $request->productImage->move(public_path('img/GearPT'),$productImage);

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
        $productTypedata = ProductType::get();
        $producerdata =Producer::get();
        
        return view('edit-product',compact('data','productTypedata','producerdata'));
    }
    public function updateProduct(Request $request){
        $id = $request->productID;

        Product::where('productID','=',$id)->update([
            'productName' => $request->productName,
            'productPrice' => $request->productPrice,
            'productDescription' => $request->productDescription,
            'productImage' => $request->productImage,
            'productTypeID' => $request->productType,
            'producerID' => $request->producerID

        ]);
        return redirect()->back()->with('success','Product Edited Successfully');
    }
    public function deleteProduct($id){
        Product::where('productID','=',$id)->delete();
        return redirect()->back()->with('success','Product Deleted Successfully');
    }

    public function advanceSearch(Request $request)
    {
        $productTypedata = ProductType::get();
        $producerdata =Producer::get();
        $data = DB::table('products')
        ->join('product_types','product_types.productTypeID','products.productTypeID')
        ->join('producers','producers.producerID','products.producerID')
        ->select('products.*','product_types.productTypeName','producers.producerName')
        ->get();
        
        
        if(!empty($request->productProducer)){
            $data = Product::where('producerID', 'LIKE', "%" . $request->productProducer . "%")->get();  
        }
        if(!empty($request->productType)){
            $data = Product::where('productTypeID', 'LIKE', "%" . $request->productType . "%")->get(); 
             
        }
        if(!empty($request->productType) && !empty($request->productProducer)){
            $data = Product::where('productTypeID', 'LIKE', "%" . $request->productType . "%")
                            ->where('producerID', 'LIKE', "%" . $request->productProducer . "%")
                            ->get(); 
             
        }
        
        return view('list-product', compact('data','productTypedata','producerdata'));
        
    }
}
