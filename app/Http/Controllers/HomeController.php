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
        $dateFrom = Carbon::now('Europe/London')->subDays(10);
        $dateTo = Carbon::now('Europe/London');

        $transaction = Transaction::all();
        $dates = $this->extractAndFormatOnlyDate($dateFrom, $dateTo);

        $nairaAndDate = Transaction::select('total_naira','created_at')
                        ->get()
                        ->groupBy(function($date) {
                            return Carbon::parse($date->created_at)->format('d/m/Y'); // grouping by years
                        });

                        $nairaAndDate->sum('total_naira');


        $poundAndDate = Transaction::select('uk_pound','created_at')->get();

      $total_naira = $transaction->pluck('total_naira');
      // $total_date = $transaction->pluck('created_at');
      $total_pound = $transaction->pluck('uk_pound');

        // dd($transaction, $nairaAndDate);


      
        

      // $dates = $this->extractAndFormatOnlyDate($dateFrom, $dateTo);



      $chart = Charts::multi('line', 'highcharts')
      ->labels($dates)
      ->dimensions(0, 700)
      ->dataset('Total ₦', $total_naira)
      ->dataset('Total £', $total_pound)
      ->credits(false)
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

