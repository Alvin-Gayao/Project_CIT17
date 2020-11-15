<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
public function index()
    {
    	$products = products::all();
    	return view('products.index', compact('products'));
    }

    public function create()
    {
    	return view('products.create');
    }

    public function store()
    {
    	$products = new products;
    	$products->itemName = request()->itemName;
    	$products->itemDescription = request()->itemDescription;
    	$products->price = request()->price;
    	$products->save();

    	//redirect to products page
    	return redirect('/products');

    }

    public function edit(products $products)
    {
    	return view('products.edit', compact('products'));
    }

    public function update(products $products)
    {
    	$products->itemName = request()->itemName;
    	$products->itemDescription = request()->itemDescription;
    	$products->price = request()->price;
    	$products->save();
    	//redirect to products page
    	return redirect('/products');
    }

    public function destroy(products $products)
    {
    	$products->delete();
    	return redirect('/products');
    }
}
