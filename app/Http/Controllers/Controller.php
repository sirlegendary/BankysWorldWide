<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // public function redirectToProfile($customer_id)
    // {
    //     $customer = Customer::where('id', $customer_id)->get();

    //     $beneficiary = Beneficiary::where('customer_id', $customer_id)->get();
        
    //     return view('pages.profile', ['customer' => $customer],['beneficiary' => $beneficiary]);
    // }
}
