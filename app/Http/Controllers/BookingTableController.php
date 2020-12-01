<?php

namespace App\Http\Controllers;


use App\Supplier;
use Illuminate\Http\Request;

class BookingTableController extends Controller
{
    public function index()
    {
    	$booking = BookingTable::all();
    	return view('boooking.index', compact('booking'));
    }

    public function create()
    {
    	return view('booking.create');
    }

    public function store()
    {
    	$booking = new BookingTable;
    	$booking->customerID = request()->customerID;
    	$booking->event = request()->event;
        $booking->location = request()->location;
        $booking->date = request()->date;
    	$booking->save();
    	//redirect to suppliers page
    	return redirect('/booking');

    }

    public function edit(BookingTable $booking)
    {
    	return view('boooking.edit', compact('booking'));
    }

    public function update(BookingTable $booking)
    {
    	$booking->customerID = request()->customerID;
        $booking->event = request()->event;
        $booking->location = request()->location;
        $booking->date = request()->date;
        $booking->save();
    	//redirect to suppliers page
    	return redirect('/booking');
    }

    public function destroy(BookingTable $booking)
    {
    	$supplier->delete();
    	return redirect('/booking');
    }
}

