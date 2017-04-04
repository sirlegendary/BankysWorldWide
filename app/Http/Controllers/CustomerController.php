<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Beneficiary;
use Illuminate\Http\Request;

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

        $this->validator($request);

        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->mobile = $request->mobile;
        $customer->notes = $request->notes;

        $saved = $customer->save();

            if($saved){
                $latestCustomerID = collect($customer)->last();
                return $this->redirectToProfile($latestCustomerID);
            }

        return redirect()->route('home');
    }

    public function showCustomer($id)
    {
        return $this->redirectToProfile($id);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    private function validator($request)
    {
        $this->validate($request, [
            'first_name'    => 'required|max:255',
            'last_name'     => 'required|max:255',
            'email'         => 'required|email|max:255|unique:customers',
            'mobile'        => 'required|unique:customers|max:11|regex:/(07)[0-9]{9}/',
            'notes'         => 'required',
        ]);
    }

    /**
     * Search customer table for first name or mobile and return result as json.
     *
     * @return json
     */
    public function ajaxsearch(Request $request)
    {
        $keywords = $request->keywords;

        $customer = Customer::where('first_name',   'like', $keywords.'%')
                            // ->orWhere('last_name',  'like', $keywords.'%')
                            ->orWhere('mobile',     'like', $keywords.'%')->get();
        return $customer;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $customer = Customer::where('id', $id)->get();
        return view('pages.editCustomer', ['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $this->validator($request);

        $customer = Customer::find($request->id);

        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->mobile = $request->mobile;
        $customer->notes = $request->notes;

        $saved = $customer->save();

        if($saved){
                $updated = $customer::where('id', $request->id)->get();

                return $this->redirectToProfile($request->id);
        }

        return redirectToProfile($request->id);
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

    private function redirectToProfile($customer_id)
    {
        $customer = Customer::where('id', $customer_id)->get();

        $beneficiary = Beneficiary::where('customer_id', $customer_id)->get();
        
        return view('pages.profile', ['customer' => $customer],['beneficiary' => $beneficiary]);
    }
}
