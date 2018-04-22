<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index($gender){
    	$products = Product::getProducts($gender);
    	return view('products', compact(['products', 'gender']));
    }

    public function sort(Request $request){
    	$sortBy = $request->sortBy;
    	$show = $request->show;
    	$gender = $request->gender;
    	$restrict = [
			'limit' => $show,
			'offset' => 0
		];
		if($sortBy && $sortBy != ''){
	    	$sortBy = explode('_', $sortBy);
	    	$sortDir = $sortBy[1];
	    	$sortBy = $sortBy[0];
	    	$restrict['sort_by'] = $sortBy;
	    	$restrict['sort_dir'] = $sortDir;
    	}

    	$products = Product::getProducts($gender, $restrict);
    	return view('products', compact('products', 'gender'));	
    }
}
