<?php

namespace App\Http\Controllers;

use Auth;
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
        $validated_fields = request()->validate([
            'name' => 'required',
            'contact' => 'required|unique:suppliers'
        ]);
        //save to database
        $supplier = Supplier::create($validated_fields);
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
        if(is_null(request()->name) || is_null(request()->contact)){
            return back()->withErrors([
                'supplier' => 'Not accepting blank inputs!'
            ]);
        }
           $supplier->save();
           return redirect('/suppliers')->withErrors([
                'supplier' => "Changes were made to Supplier $supplier->id"
            ]);
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect('/suppliers')->withErrors([
                'supplier' => "Deleted Supplier $supplier->name"
            ]);
    }
}

