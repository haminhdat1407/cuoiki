<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
	public function index(){
		$new_products = Product::where('new',1)
						->orderBy('created_at','desc')
						->limit(4)					
						->get();

		return view('ban-banh.ban-banh',array(
			'new_products' => $new_products,
		));
	}

    public function getAllProducts(){
    	//get all products from db
		$products = Product::all();

		//show all products to client
		foreach ($products as $key => $value) {
			echo $key . ' - ' . $value->name . '<br>';
		}
    }
}
