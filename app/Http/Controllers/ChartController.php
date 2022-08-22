<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function pieChart(){
        $result = DB::select(DB::raw("select count(productName) as productCount, product_types.productTypeName 
        from products LEFT JOIN product_types on product_types.productTypeID = products.productTypeID
        group by products.productTypeID"));
        $data ="";
        foreach($result as $val){
            $data.="['".$val->productTypeName."', ".$val->productCount."],";
        }
        $chartData = $data;
        return view('Admin/piechart', compact('chartData'));
    }
}
