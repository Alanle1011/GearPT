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
}
