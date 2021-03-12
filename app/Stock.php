<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Location;
use App\UM;
use App\Product;

class Stock extends Model
{
    protected $fillable = ['location_id', 'product_id', 'um', 'saldo'];

    public function stock_location(){
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }

    public function stock_product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
