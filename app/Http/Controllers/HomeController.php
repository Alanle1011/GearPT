<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Product;
use Session;


class HomeController extends Controller
{
    public function index(){
        $data = Product::get();
        
        return view('GearPT/home', compact('data'));
    }

}
