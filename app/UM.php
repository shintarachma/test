<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Stock;
use App\Transaction;
use App\Item;

class UM extends Model
{
    protected $table = "ums";
    
    public function um_product(){
        return $this->hasMany(Product::class, 'um_id', 'id');
    }
}
