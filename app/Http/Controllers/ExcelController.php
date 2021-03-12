<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Exports\TransactionExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
class ExcelController extends Controller
{
    public function index(){
        $transactions = Transaction::all();
        return view ('history', ['transactions'=>$transactions]);
    }

    public function print_xlsx(){
        return Excel::download(new TransactionExport, 'transactions.xlsx');
    }
}
