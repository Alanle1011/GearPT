<?php

namespace App\Http\Controllers;

use App\Models\Producer;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeProductController extends Controller
{
    public $typeInputs = [];
    protected $queryString =['typeInputs'];

    public function index(){
        $productTypedata = ProductType::get();
        $producerdata =Producer::get();
        $data = DB::table('products')
        ->join('product_types','product_types.productTypeID','products.productTypeID')
        ->select('products.*','product_types.*');

        $data = $data->when($this->typeInputs, function($q){
            $q->whereIn('productTypeID',$this->typeInputs);
        })
        ->get();
        
        return view('GearPT/product',compact('data','productTypedata','producerdata'));
    }
    public function search(Request $request){

        if(isset($_GET['query'])){
            $productTypedata = ProductType::get();
            $producerdata =Producer::get();
            $search_text = $_GET['query'];
            
            $data = DB::table('products') 
            ->join('product_types','product_types.productTypeID','products.productTypeID')
            ->select('products.*','product_types.productTypeName') 
            -> where('productName','LIKE','%'.$search_text.'%')
            ->paginate(8);

            $data->appends($request->all());


            return view('GearPT/product-search',['products'=>$data], compact('productTypedata','producerdata')); 
        }else{
            return view('GearPT/product-search', compact('productTypedata','producerdata'));
        }
        
    }
    public function productDetail($id){
        $productTypedata = ProductType::get();
        $producerdata =Producer::get();
        $data = DB::table('products')
        ->join('product_types','product_types.productTypeID','products.productTypeID')
        ->select('products.*','product_types.*')
        ->get();

        $product = Product::where('productID','=',$id)->first();

        return view('GearPT/productDetail', compact('product','data'));
    }
    public function homeAdvanceSearch(Request $request)
    {
        $productTypedata = ProductType::get();
        $producerdata =Producer::get();
        $data = DB::table('products')
        ->join('product_types','product_types.productTypeID','products.productTypeID')
        ->join('producers','producers.producerID','products.producerID')
        ->select('products.*','product_types.productTypeName','producers.producerName')
        ->paginate(8);;
        
        
        if(!empty($request->productPrice)){
            $data = Product::where('productPrice', 'LIKE', "%" . $request->productPrice . "%")->paginate(8);
        }
        if(!empty($request->productProducer)){
            $data = Product::where('producerID', 'LIKE', "%" . $request->productProducer . "%")->paginate(8);  
        }
        if(!empty($request->productType)){
            $data = Product::where('productTypeID', 'LIKE', "%" . $request->productType . "%")->paginate(8);  
        }

        $data->appends($request->all());
        return view('GearPT/product-search', ['products'=>$data],compact('productTypedata','producerdata'));
    }
}
