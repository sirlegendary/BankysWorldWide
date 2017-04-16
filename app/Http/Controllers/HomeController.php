<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use App\Customer;
use App\Transaction;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $transaction = Transaction::all();
      $total_naira = $transaction->pluck('total_naira');
      $total_pound = $transaction->pluck('uk_pound');
      $date = $transaction->pluck('created_at');

      // dd($date);

      $chart = Charts::multi('line', 'highcharts')
      ->title(' ')
      ->labels($date)
      ->dataset('Total ₦', $total_naira)
      ->dataset('Total £', $total_pound)
      ->responsive(true);

        return view('home', ['chart' => $chart]);
    }
}

/*
*   bar     pie     donut   geo     gauge
*/
