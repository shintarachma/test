<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Transaction;
class TransactionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Transaction::all();
    }
}
