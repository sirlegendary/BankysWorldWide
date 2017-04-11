<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Beneficiary;
use App\Transaction;
use Illuminate\Http\Request;

class BeneficiaryController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addNew(Request $request)
    {
        $beneficiary = new Beneficiary;

        $this->validate($request, [
            'name'    => 'required|max:255',
            'bank'    => 'required|max:255',
            'account' => 'required|max:10|regex:/[0-9]/',
        ]);

        $beneficiary->name = $request->name;
        $beneficiary->bank = $request->bank;
        $beneficiary->account = $request->account;
        $beneficiary->customer_id = $request->customer_id;

        $saved = $beneficiary->save();

        if($saved){

            return redirect()->route('showCustomer', ['id' => $request->customer_id]);
        }

        return redirect()->route('home');
    }

    public function showNewTransactionForm($id)
    {
        $customer = Beneficiary::find($id)->customer;

        $beneficiary = Beneficiary::find($id);

        $transaction = Transaction::where('beneficiary_id', $beneficiary['id'])
                                    ->orderBy('created_at', 'desc')
                                    ->get();

        return view('pages.addTransaction')
            ->with('customer', $customer)
            ->with('beneficiary', $beneficiary)
            ->with('transaction', $transaction);
    }

    public function saveNewTransaction(Request $request)
    {
        $transaction = new Transaction;
        $transaction->beneficiary_id = $request->beneficiary_id;
        $transaction->naira_rate = $request->naira_rate;
        $transaction->uk_pound = $request->uk_pound;
        $transaction->total_naira = $request->total_naira;
        $transaction->emailed = false;

        $saved = $transaction->save();

        if($saved){
            return redirect()->route('addTransaction', ['id' => $request->beneficiary_id]);
        }

        return redirect()->route('home');
    }

}
