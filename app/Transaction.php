<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Location;
use App\Product;
use App\UM;

class Transaction extends Model
{

    protected $guarded = [];
    protected $fillable = ['name', 'transaction_date', 'hours', 'user_id', 'location_id', 'product_id', 'um', 'received_date', 'quantity', 'program'];
    public function transaction_location(){
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }

    public function transaction_product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function transaction_user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
