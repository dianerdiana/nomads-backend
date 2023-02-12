<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TravelPackage;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        // $item = Transaction::with(['details', 'travel_package', 'user'])->findOrFail($id);
        $item = 'Check';
        return view('pages.checkout', compact('item'));
    }

    public function process(Request $request, $id)
    {
        $travel_package = TravelPackage::findOrFail($id);
        $transaction    = Transaction::create([
            'travel_package_id' => $id,
            'user_id'           => Auth::user()->id,
            'additional_visa'   => 0,
            'transaction_total' => $travel_package->price,
            'transaction_status' => 'IN_CART',
        ]);

        TransactionDetail::create([
            'transaction_id'    => $transaction->id,
            'username'          => Auth::user()->username,
            'nationality'       => 'ID',
            'is_visa'           => 0,
            'doe_passport'      => Carbon::now()->addYears(5),
        ]);

        return redirect()->route('checkout' . $transaction->id);
    }

    public function create(Request $request, $detail_id)
    {
        $request->validate([
            'username'      => 'required|string|exists:users.username',
            'is_visa'       => 'required|boolean',
            'doe_passport'  => 'required'
        ]);

        $data = $request->all();
        $data['transaction_id'] = $detail_id;

        TransactionDetail::create($data);

        $transaction = Transaction::with('travel_package')->find($detail_id);

        if ($request->is_visa) {
            $transaction->transaction_total  += 100;
            $transaction->additional_visa    += 100;
        }

        $transaction->transation_total += $transaction->travel_package->price;
        $transaction->save();

        return redirect()->route('checkout', $detail_id);
    }

    public function remove(Request $request, $detail_id)
    {
        $item = TransactionDetail::findOrFail($detail_id);

        $transaction = Transaction::with(['details', 'travel_package'])
            ->findOrFail($item->transaction_id);

        if ($item->is_visa) {
            $transaction->transaction_total  -= 100;
            $transaction->additional_visa    -= 100;
        }

        $transaction->transation_total -= $transaction->travel_package->price;
        $transaction->save();
        $item->delete();

        return redirect()->route('checkout', $item->tranasaction_id);
    }


    public function success(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->transaction_status = 'PENDING';

        $transaction->save();

        return view('pages.success');
    }
}
