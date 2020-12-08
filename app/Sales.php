<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Sales extends Model
{

	use Notifiable;
    protected $fillable = [
    	'product_id',
    	'quantity',
    	'buyer_name',
    	'sold_at'
    ];
    
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
