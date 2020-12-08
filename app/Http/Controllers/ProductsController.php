<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
public function index()
    {
    	$products = Product::all();
    	return view('products.index', compact('products'));
    }

    public function create()
    {
    	return view('products.create');
    }

    public function store()
    {
    	$product = new Product;
    	$product->name = request()->name;
    	$product->description = request()->description;
    	$product->price = request()->price;
    	$product->save();

    	//redirect to products page
    	return redirect('/products');

    }

    public function edit(Product $product)
    {
    	return view('products.edit', compact('product'));
    }

    public function update(Product $product)
    {
    	$product->name = request()->name;
    	$product->description = request()->description;
    	$product->price = request()->price;
    	$product->save();
    	//redirect to products page
    	return redirect('/products');
    }

    public function destroy(Product $product)
    {
    	$product->delete();
    	return redirect('/products');
    }
}
