<?php

namespace App\Http\Controllers;


use App\Supplier;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function index()
    {
    	$bookings = Booking::all();
    	return view('booking.index', compact('bookings'));
    }

    public function create()
    {
    	return view('booking.create');
    }

    public function store()
    {
    	$booking = new Booking;
    	$booking->customer_id = request()->customer_id;
    	$booking->event_id = request()->event_id;
        $booking->location = request()->location;
        $booking->date = request()->date;
    	$booking->save();
    	//redirect to suppliers page
    	return redirect('/booking');

    }

    public function edit(Booking $booking)
    {
    	return view('booking.edit', compact('booking'));
    }

    public function update(Booking $booking)
    {
    	$booking->customer_id = request()->customer_id;
        $booking->event_id = request()->event_id;
        $booking->location = request()->location;
        $booking->date = request()->date;
        $booking->save();
    	//redirect to suppliers page
    	return redirect('/booking');
    }

    public function destroy(Booking $booking)
    {
    	$supplier->delete();
    	return redirect('/booking');
    }
}

