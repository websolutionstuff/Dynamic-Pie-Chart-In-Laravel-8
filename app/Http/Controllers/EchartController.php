<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class EchartController extends Controller
{
    public function echart(Request $request)
    {
    	$fruit = Product::where('product_type','fruit')->get();
    	$veg = Product::where('product_type','vegitable')->get();
    	$grains = Product::where('product_type','grains')->get();
    	$fruit_count = count($fruit);    	
    	$veg_count = count($veg);
    	$grains_count = count($grains);
    	return view('echart',compact('fruit_count','veg_count','grains_count'));
    }
}
