<?php

namespace App\Http\Controllers;

use App\Item;
use App\Location;
use App\Product;
use App\Stock;
use App\Transaction;
use App\UM;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::all();
        $product = Product::all();
        $location = Location::all();

        $fil_loc="";
        $fil_part="";
        return view('stock', ['stocks'=>$stocks, 'product'=>$product, 'location'=>$location, 'fil_loc'=>$fil_loc, 'fil_part'=>$fil_part]);
    }

    public function create(){
        $stock = Stock::all();
        $location = Location::all();
        $product = Product::all();
        $um = UM::all();
        
        $attachment = Transaction::where('program', 'like', 'RECEIPT')->get();
        if($attachment == null){
            $count = 1;
        }else{
            $count = $attachment->count()+1;
        }

        return view('add', ['location'=>$location, 'product'=>$product,'um'=>$um, 'stock'=>$stock, 'count'=>$count]);
    }

    public function store(Request $request){

        Transaction::create([
            'name' => $request->name,
            'location' => $request->location,
            ''
        ]);
        $this->validate($request,[
            'name' => 'admin',
            'location' => 'required',
            'part' => 'required',
            'product_name' => 'required',
            'received_date' => 'required',
            'quantity' => 'required|min:1',
            'um' => 'required', 
        ]);

        $transaction_time = Carbon::parse(Carbon::now())->format('d/m/y');
        $stock = Stock::where([['received_date_transaction','like', $transaction_time."%"], ['product_id', 'like', $request->part],['location_id', 'like', $request->location]])->first();

        if($stock->id==null){
            $stocks = new Stock();
            $stocks->location_id = $request->location_id;
            $stocks->product_id = $request->product_id;
            $stocks->saldo = $request->quantity;
            $stocks->received_date_transaction = Carbon::now();
        }else{
            $stock->saldo = $stock->saldo + $request->quantity;
            $stock->save();
        }
        return redirect('/stock');
    }

    public function getItemName(Request $request){
        $item = Item::where('id', $request->id_produk)->first();
        return response()->json(['item' => $item]);
    }

    public function delete(){
        
        $stock = Stock::all();
        $location = Location::all();
        $product = Product::all();
        $um = UM::all();

        $attachment = Transaction::where('program', 'like', 'ISSUE')->get();
        if($attachment == null){
            $count = 1;
        }else{
            $count = $attachment->count()+1;
        }
        return view('reduce', ['location'=>$location, 'product'=>$product,'um'=>$um, 'stock'=>$stock, 'count'=>$count]);
    }
}
