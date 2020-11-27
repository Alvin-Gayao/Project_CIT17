<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function sales()
    {
    	return $this->hasMany(Sales::class);
    }

    public function purchases()
    {
    	return $this->hasMany(Purchase::class);
    }
}
