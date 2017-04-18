<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use App\Customer;
use App\Transaction;
use Carbon\Carbon;

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

      $dateFrom = Carbon::now()->subDays(8);
        $dateTo = Carbon::now();

      $date = $this->extractAndFormatOnlyDate($dateFrom, $dateTo);




      $chart = Charts::multi('line', 'highcharts')
      ->labels($date)
      ->dimensions(0, 700)
      ->dataset('Total ₦', $total_naira)
      ->dataset('Total £', $total_pound)
      // ->responsive(true)
      ->title(' ');

        return view('home', ['chart' => $chart]);
    }

    private function extractAndFormatOnlyDate(Carbon $start_date, Carbon $end_date)
    {
        $dates = [];

        for($date = $start_date; $date->lte($end_date); $date->addDay()) {
           $dates[] = $date->format('d/m/Y');
        }

        return $dates;
    }

}

