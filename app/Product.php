<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public static function getProducts($gender, $restrict = array()){
    	if(!empty($restrict)){
    		$products = Product::where('gender', $gender);
    		if(isset($restrict['sort_by'])){
				$products = $products->orderBy($restrict['sort_by'], $restrict['sort_dir']);
    		}
    		$products = $products->limit($restrict['limit'])
				    		->offset($restrict['offset'])
				    		->get();
    	}else{
    		$products = Product::all()->where('gender', $gender);
    	}
    	return $products;
    }
}
