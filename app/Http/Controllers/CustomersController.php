<?php

namespace App\Http\Controllers;

use Auth;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
    	$customers = Customer::all();
    	return view('customers.index', compact('customers'));
    }

    public function create()
    {
    	return view('customers.create');
    }

    public function store()
    {
        $validated_fields = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'contact_number' => 'required|unique:customers',
            'address' => 'required'
        ]);
        //save to database
        $customer = Customer::create($validated_fields);
    	//redirect to customers page
    	return redirect('/customers');

    }

    public function edit(Customer $customer)
    {
    	return view('customers.edit', compact('customer'));
    }

    public function update(Customer $customer)
    {
    	$customer->first_name = request()->first_name;
    	$customer->last_name = request()->last_name;
    	$customer->contact_number = request()->contact_number;
    	$customer->address = request()->address;
        if(is_null(request()->first_name) || is_null(request()->last_name) || is_null(request()->contact_number) || is_null(request()->address)){
            return back()->withErrors([
                'customer' => 'Not accepting blank inputs!'
            ]);
        }
            $customer->save();
            return redirect('/customers')->withErrors([
                'customer' => "Changes were made to Customer $customer->id"
            ]);
    }

    public function destroy(Customer $customer)
    {
    	$customer->delete();
    	return redirect('/customers')->withErrors([
                'customer' => "Deleted Customer $customer->name"
            ]);
    }
}
