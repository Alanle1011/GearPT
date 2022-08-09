<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeProductController extends Controller
{
    public function index(){
        $data = DB::table('products')
        ->join('product_types','product_types.productTypeID','products.productTypeID')
        ->select('products.*','product_types.productTypeName')
        ->get();
        
        return view('GearPT/product', compact('data'));
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
        $product = Product::where('productID','=',$id)->first();
        return view('GearPT/productDetail', compact('product'));
    }
}
