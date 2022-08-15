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
            $search_text = $_GET['query'];
            
            $data = DB::table('products') 
            ->join('product_types','product_types.productTypeID','products.productTypeID')
            ->select('products.*','product_types.productTypeName') 
            -> where('productName','LIKE','%'.$search_text.'%')
            ->paginate(8);

            $data->appends($request->all());


            return view('GearPT/product-search',['products'=>$data]); 
        }else{
            return view('GearPT/product-search');
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
}
