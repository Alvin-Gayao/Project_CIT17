<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Event;
use App\Customer;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function index()
    {
    	$bookings = Booking::all();
    	return view('bookings.index', compact('bookings'));
    }

    public function create(Event $event, Customer $customer)
    {
        $events = Event::all();
        $customers = Customer::all();
    	return view('bookings.create', compact(['events', 'customers']));
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
    	return redirect('/bookings');

    }

    public function edit(Booking $booking)
    {
    	return view('bookings.edit', compact('booking'));
    }

    public function update(Booking $booking)
    {
    	$booking->customer_id = request()->customer_id;
        $booking->event_id = request()->event_id;
        $booking->location = request()->location;
        $booking->date = request()->date;
        $booking->save();
    	//redirect to suppliers page
    	return redirect('/bookings');
    }

    public function destroy(Booking $booking)
    {
    	$supplier->delete();
    	return redirect('/bookings');
    }
}

