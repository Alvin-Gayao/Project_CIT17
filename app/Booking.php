<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function customers()
    {
    	return $this->belongsTo(Customer::class);
    }

    public function events()
    {
    	return $this->belongsTo(Event::class);
    }

    protected $fillable = ['event_id', 'customer_id', 'location', 'date'];
}
