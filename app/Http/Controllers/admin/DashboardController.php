<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TravelPackage;
use App\Models\Transaction;
use App\Models\Gallery;
use Illuminate\Http\Request;
use db;


class DashboardController extends Controller
{
    public function index(Request $request)

    {
        return view('pages.admin.dashboard',[
            'travel_package' => TravelPackage::count(),
            'transaction' => Transaction::count(),
            'gallery' => Gallery::count(),
            'transaction_proses' => Transaction::where('transaction_status', 'PROSES')->count(),
            'transaction_success' => Transaction::where('transaction_status', 'SUKSES')->count(),
        ]);
    }
}
