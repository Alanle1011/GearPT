<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function index(){
        $ProductTypedata = ProductType::get();
        
        return view('list', compact('productTypedata'));
    }
}
