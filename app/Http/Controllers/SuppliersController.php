<?php

namespace App\Http\Controllers;


use App\Supplier;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function index()
    {
    	$suppliers = Supplier::all();
    	return view('suppliers.index', compact('suppliers'));
    }

    public function create()
    {
    	return view('suppliers.create');
    }

    public function store()
    {
    	$supplier = new Supplier;
    	$supplier->name = request()->name;
    	$supplier->contact = request()->contact;
    	$supplier->save();
    	//redirect to suppliers page
    	return redirect('/suppliers');

    }

    public function edit(Supplier $supplier)
    {
    	return view('suppliers.edit', compact('supplier'));
    }

    public function update(Supplier $supplier)
    {
    	$supplier->name = request()->name;
    	$supplier->contact = request()->contact;
    	$supplier->save();
    	//redirect to suppliers page
    	return redirect('/suppliers');
    }

    public function destroy(Supplier $supplier)
    {
    	$supplier->delete();
    	return redirect('/suppliers');
    }
}

