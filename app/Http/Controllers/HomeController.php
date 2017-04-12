<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use App\Customer;

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
        $chart = Charts::database(Customer::all(), 'bar', 'highcharts')
            ->elementLabel("Total")
            ->title('Daily Customer Chart')
            ->dimensions(0, 500)
            ->responsive(false)
            ->groupByDay();

        return view('home', ['chart' => $chart]);
    }
}
