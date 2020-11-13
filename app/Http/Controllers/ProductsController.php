<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
public function index()
    {
    	$products = Products::all();
    	return view('products.index', compact('products'));
    }

    public function create()
    {
    	return view('products.create');
    }

    public function store()
    {
    	$products = new Products;
    	$products->itemName = request()->itemName;
    	$products->itemDescription = request()->itemDescription;
    	$products->price = request()->price;
    	$products->save();

    	//redirect to products page
    	return redirect('/products');

    }

    public function edit(Products $products)
    {
    	return view('products.edit', compact('products'));
    }

    public function update(Products $products)
    {
    	$products->itemName = request()->itemName;
    	$products->itemDescription = request()->itemDescription;
    	$products->price = request()->price;
    	$products->save();
    	//redirect to products page
    	return redirect('/products');
    }

    public function destroy(Products $products)
    {
    	$products->delete();
    	return redirect('/products');
    }
}
