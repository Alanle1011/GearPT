<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class HomeProductController extends Controller
{
    public function index(){
        $data = Product::get();
        
        return view('GearPT/product', compact('data'));
    }
}
