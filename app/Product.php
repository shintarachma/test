<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\UM;
use App\Item;
class Product extends Model
{
   protected $fillable = ['part', 'name', 'um_id'];
    public function product_um(){
        return $this->belongsTo(UM::class, 'um_id', 'id');
   } 

   public function product_item(){
      return $this->belongsTo(Item::class, 'item_id', 'id');
   }

   public function product_stock(){
      return $this->hasMany(Stock::class, 'stock_id', 'id');
   }

   public function product_transaction(){
      return $this->hasMany(Transaction::class, 'product_id', 'id');
   }
}
