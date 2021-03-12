<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Stock;
use App\Transaction;

class Location extends Model
{
    public $fillable = ['loc_loc', 'name'];
    public function location_stock(){
        return $this->hasMany(Stock::class, 'location_id', 'id');
    }
    public function transaction(){
        return $this->hasMany(Transaction::class, 'location_id', 'id');
    }
}
