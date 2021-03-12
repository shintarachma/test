<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

use Barryvdh\DomPDF\Facade as PDF;
class TransactionController extends Controller
{
    public function index(){
        $transactions = Transaction::all();
        return view ('history', ['transactions'=>$transactions]);
    }

    
    public function print_pdf(){
     $transactions = Transaction::all();

     $pdf = PDF::loadview('printPDF',['transactions'=>$transactions]);
     return $pdf->download('laporan-transaksi.pdf');  
    }
}
