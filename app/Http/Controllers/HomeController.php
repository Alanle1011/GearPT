<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Product;
use Session;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $data = DB::table('products')
        ->join('product_types','product_types.productTypeID','products.productTypeID')
        ->select('products.*','product_types.productTypeName')
        ->get();
        
        return view('GearPT/home', compact('data'));
    }
    public function profile(){
        return view('GearPT/profile');
    }

}
