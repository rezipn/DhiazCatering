<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\TransactionSuccess;

use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\Tambahan;
use App\Models\TravelPackage;

use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail as FacadesMail;

// use Midtrans\Config;
// use Midtrans\Snap;

class CheckoutController extends Controller
{
    public function index(Request $request, $id)
    {
        $item = Transaction::with(['details','travel_package','user'])->findOrFail($id);
        return view('pages.checkout',[
            'item' => $item
        ]);

        // $item = Tambahan::with(['tambahan'])->findOrFail($id);
        // return view('pages.checkout',[
        //     'item' => $item
        // ]);

    }

    public function process(Request $request, $id)
    {
        $travel_package = TravelPackage::findOrFail($id);
        $transaction = Transaction::create([
            'travel_packages_id' => $id,
            'users_id' => Auth::user()->id,
            // 'tambahan_ket' => 0,
            'transaction_total' => $travel_package->price,
            'transaction_status' => 'PROSES'
        ]);

        TransactionDetail::create([
            'transactions_id' => $transaction->id,
            'username' => Auth::user()->username,
            'nomor' => Auth::user()->nomor,
            'alamat' => Auth::user()->alamat,
            'booking' => Auth::user()->booking
            // 'tambahan_id' => $tambahan->id,
            // 'tambahan' => false
            // 'tambahan' => false,
            // 'is_visa' => false,
            // 'doe_passport' => Carbon::now()->addYears(5)
        ]);

        // Tambahan::create([
        //     'tambahan_id' => $tambahan->id,
        //     'tambahan' => false
        // ]);

        // TransactionDetail::tambahan([
        //     'tambahan_id' => $transaction->id_ket,
        //     // 'username' => Auth::user()->username,
        //     // 'nomor' => Auth::user()->nomor,
        //     // 'alamat' => Auth::user()->alamat,
        //     // 'tambahan' => false,
        //     // 'is_visa' => false,
        //     // 'doe_passport' => Carbon::now()->addYears(5)
        // ]);

        return redirect()->route('checkout', $transaction->id);
    }

    public function remove(Request $request, $detail_id)
    {
        $item = TransactionDetail::findOrFail($detail_id);

        $transaction = Transaction::with(['details','travel_package'])
            ->findOrFail($item->transactions_id);

        // if($item->tambahan)
        //     {
        //         $transaction->transaction_total -= 190;
        //         $transaction->tambahan_ket -= 190;
        //     }
    
        // $transaction->transaction_total -= $transaction->travel_package->price;

        $transaction->save();
        
        $item->delete();

        return redirect()->route('checkout', $item->transactions_id);
    }

    public function create(Request $request, $id)
    {
        // $request->validate([
        //     // 'username' => 'required|string|exists:users,username',
        //     'tambahan' => 'required|string'
        //     // 'is_visa' => 'required|boolean',
        //     // 'doe_passport' => 'required'
        // ]);

        $data = $request->all();
        $data['transactions_id'] = $id;

        TransactionDetail::create($data);

        $transaction = Transaction::with(['travel_package'])->find($id);

        $transaction->save();

        return redirect()->route('checkout', $id);

        
        // return view('tambahan.create');
    }

    public function success(Request $request, $id)
    {
        $transaction = Transaction::with(['details','travel_package.galleries','user'])->findOrFail($id);
        $transaction->transaction_status = 'PROSES';

        $transaction->save();

        // return $transaction;

        FacadesMail::to($transaction->user)->send(
            new TransactionSuccess($transaction)
        );


        return view('pages.success');
    }
}
