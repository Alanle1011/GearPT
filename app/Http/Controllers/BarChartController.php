<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarChartController extends Controller
{
    public function barChart(){
        $result = DB::select(DB::raw("select count(productName) as productCount, producers.producerName 
        from products LEFT JOIN producers on producers.producerID = products.producerID
        group by products.producerID"));
        $data ="";
        foreach($result as $val){
            $data.="['".$val->producerName."', ".$val->productCount."],";
        }
        $chartData = $data;
        return view('Admin/barchart', compact('chartData'));
    }
}
