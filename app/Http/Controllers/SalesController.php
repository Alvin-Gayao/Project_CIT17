<?php

namespace App\Http\Controllers;

use Auth;
use App\Sales;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    public function index()
    {
    	$sales = Sales::all();
    	return view('sales.index', compact('sales'));
    }

    public function create()
    {
    	$products = Product::all();
    	return view('sales.create', compact('products'));
    }

    public function store()
    {
        $validated_fields = request()->validate([
            'product_id' => 'required',
            'quantity' => 'required',
            'buyer_name' => 'required',
            'sold_at' => 'required'
        ]);
        //save to database
        $sales = Sales::create($validated_fields);
    	//redirect to customers page
    	return redirect('/sales');

    }

    public function edit(Sales $sales)
    {
    	return view('sales.edit', compact('sales'));
    }

    public function update(Sales $sales)
    {
    	$sales->product_id = request()->product_id;
    	$sales->quantity = request()->quantity;
    	$sales->buyer_name = request()->buyer_name;
    	$sales->sold_at = request()->sold_at;
        if(is_null(request()->product_id) || is_null(request()->quantity) || is_null(request()->buyer_name) || is_null(request()->sold_at)){
            return back()->withErrors([
                'sales' => 'Not accepting blank inputs!'
            ]);
        }
            $sales->save();
            return redirect('/sales')->withErrors([
                'sales' => "Changes were made to Sales $sales->id"
            ]);
    }

}
