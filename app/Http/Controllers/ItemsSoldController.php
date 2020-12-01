<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsSoldController extends Controller
{
    public function index()
    {
    	$items_sold = Items::all();
    	return view('items_sold.index1', compact('items_sold'));
    }

    public function create()
    {
    	return view('items_sold.create');
    }

    public function store()
    {
    	$item_sold = new Item_sold;
    	$item_sold->name = request()->name;
    	$item_sold->productID = request()->productID;
    	$item_sold->save();
    	//redirect to Items Sold page
    	return redirect('/items_sold');

    }

    public function edit(Item_sold $item_sold)
    {
    	return view('items_sold.edit', compact('items_sold'));
    }

    public function update(Item_sold $item_sold)
    {
    	$item_sold->name = request()->name;
    	$item_sold->productID = request()->productID;
    	$item_sold->save();
    	//redirect to Item Sold page
    	return redirect('/items_sold');
    }

    public function destroy(Item_sold $item_sold)
    {
    	$item_sold->delete();
    	return redirect('/items_sold');
    }
}