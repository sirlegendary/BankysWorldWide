<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Beneficiary;
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

        	$customer = new Customer;

        	$customer_id = $request->customer_id;

        	$customer = Customer::where('id', $customer_id)->get();

        	$beneficiary = $beneficiary::where('customer_id', $customer_id)->get();
            
            return view('pages.profile', ['customer' => $customer],['beneficiary' => $beneficiary]);
        }

        return redirect()->route('home');
    }

    public function showNewTransactionForm($id)
    {
        $customer = Beneficiary::find($id)->customer;

        $beneficiary = Beneficiary::find($id);

        // dd($beneficiary['name']);

        return view('pages.addTransaction')->with('customer', $customer)->with('beneficiary', $beneficiary);
    }

}
