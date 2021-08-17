<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index() {

        $data['data'] = Product::all();

        return view('product', $data);

    }

    public function addToCart($id) {
    	
    	$product = Product::find($id);

    	// echo "<pre>";

    	// print_r($product);

    	$cart = session()->get('cart', []);

	
		echo "<pre>";

    	print_r($cart);

    	//die;

  		// $cart[$id] = array(
  		// 	"id" => $id,
  		// 	"name" => $product['name'],
  		// 	"qty" => 1,
  		// 	"price" => $product['price'],
  		// 	"image" => $product['image'],
  		// 	"description" => $product['description']
  		// );   


  		if (isset($cart[$id])) {

  			$cart[$id]['qty']++;

  		} else {

  			$cart[$id] = array(
	  			"id" => $id,
	  			"name" => $product['name'],
	  			"qty" => 1,
	  			"price" => $product['price'],
	  			"image" => $product['image'],
	  			"description" => $product['description']
  			);   
  		}


  		session()->put('cart', $cart);

  		// echo "<pre>";

  		// print_r($cart); 	
    }

}
