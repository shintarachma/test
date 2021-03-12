<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\UM;
class Item extends Model
{
    public function item_product(){
        return $this->belongsTo(Product::class);
    }

}
