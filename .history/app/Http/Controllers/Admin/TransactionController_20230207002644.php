<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with([
            'package',
            'user'
        ])->get();
        // dd($transactions);
        return view('admin.transactions', ['transactions' => $transactions]);
    }
}
