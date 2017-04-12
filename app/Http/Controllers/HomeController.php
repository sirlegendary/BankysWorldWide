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
        
        $chart = Charts::create('line', 'highcharts')
             ->title('Transactions Chart')
             ->elementLabel('Total Naira')
             ->labels($transaction->pluck('created_at'))
             ->values($transaction->pluck('total_naira'), $transaction->pluck('uk_pound'))
             ->responsive(true);

            // $chart = Charts::database(Customer::all(), 'bar', 'highcharts')
            // ->elementLabel("Total")
            // ->title('Daily Customer Chart')
            // ->dimensions(0, 500)
            // ->responsive(true)
            // ->groupByDay();

        return view('home', ['chart' => $chart]);
    }
}

/*
*   bar     pie     donut   geo     gauge
*/