<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
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
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rawCustomer = Customer::all();

        $listCustomer = $rawCustomer->sortBy('first_name');

        return view('pages.customer', ['listCustomer' => $listCustomer]);
    }

    public function addCustomer()
    {
        return view('pages.addNewCustomer');
    }

    public function addNewCustForm(Request $request)
    {
        $customer = new Customer;

        $customer->first_name = $request->inputFirstName;
        $customer->last_name = $request->inputSurname;
        $customer->email = $request->inputEmail;
        $customer->mobile = $request->inputMobile;
        $customer->notes = $request->inputNote;

        $saved = $customer->save();

            if($saved){
                $latestCustomerID = collect($customer)->last();
                $latestCustomer = $customer::where('id', $latestCustomerID)->get();
                
                return view('pages.profile', ['customer' => $latestCustomer]);
            }

        return redirect()->route('home');
    }

    public function showCustomer($id)
    {
        $customer = Customer::where('id', $id)->get();
        
        return view('pages.profile', ['customer' => $customer]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'inputFirstName' => 'required|max:255',
            'inputSurname' => 'required|max:255',
            'inputEmail' => 'required|email|max:255|unique:customers',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer;

        $flight->name = $request->name;

        $flight->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
