<?php

namespace App\Http\Controllers;

use App\CashIn;
use App\Investment;
use PDF;
use App\CashOut;
// use Barryvdh\DomPDF\Facade as PDF;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function create()
    {
    	return view('reports.create');
    }

    public function index(Request $request)
    {	
    	$month = $request->month;
    	$year = $request->year;

    	// $reports = CashIn::select('cash_ins.member_id', 'cash_ins.admistration as in_admistration', 'cash_ins.premium', 'cash_ins.fine', 'cash_ins.profit', 'cash_ins.total_credit', 'cash_ins.comments', 'cash_ins.created_at','cash_ins.date', 'cash_outs.admistration as out_admistration', 'cash_outs.entertainment', 'cash_outs.investment_withdraw', 'cash_outs.total_debit')
    	// 				 ->whereMonth('cash_ins.date', $month)
    	// 				 ->whereYear('cash_ins.date', $request->year)
    	// 				 ->leftJoin('cash_outs', 'cash_ins.date', 'cash_outs.date')
    	// 				 ->orderBy('member_id')
    	// 				 ->get();
          

           // $reports = CashIn::select('cash_ins.member_id', 'cash_ins.admistration as in_admistration', 'cash_ins.premium', 'cash_ins.fine', 'cash_ins.profit', 'cash_ins.total_credit', 'cash_ins.comments', 'cash_ins.created_at','cash_ins.date', 'cash_outs.admistration as out_admistration', 'cash_outs.entertainment', 'cash_outs.investment_withdraw', 'cash_outs.total_debit')
           //               ->whereMonth('cash_outs.date', $month)
           //               ->whereYear('cash_outs.date', $request->year)
           //               ->rightJoin('cash_ins', 'cash_outs.date', 'cash_ins.date')
           //               ->orderBy('member_id')
           //               ->get();


          $s=CashIn::select('cash_ins.member_id', 'cash_ins.admistration as in_admistration', 'cash_ins.premium', 'cash_ins.fine', 'cash_ins.profit', 'cash_ins.total_credit', 'cash_ins.comments', 'cash_ins.created_at','cash_ins.date')
          ->whereMonth('cash_ins.date', $month)
          ->whereYear('cash_ins.date', $request->year)
          ->get();




          $r=CashOut::select('cash_outs.admistration as out_admistration', 'cash_outs.entertainment', 'cash_outs.investment_withdraw', 'cash_outs.total_debit')
          ->whereMonth('cash_outs.date', $month)
          ->whereYear('cash_outs.date', $request->year)
          ->get();


         $a=$r->merge($s);

         $b=$a->all();
                         dd($b);

      //   $investments = Investment::orderBy('created_at')
      //                            ->whereMonth('created_at', $month)
      //                            ->whereYear('created_at', $year)
      //                            ->get();

    	 // return view('reports.index', compact('reports', 'month', 'year', 'investments'));
    }


    public function reports_pdf(Request $request)
    {
        $month = $request->month;
        $year = $request->year;

        $reports = CashIn::select('cash_ins.member_id', 'cash_ins.admistration as in_admistration', 'cash_ins.premium', 'cash_ins.fine', 'cash_ins.profit', 'cash_ins.total_credit', 'cash_ins.comments', 'cash_ins.created_at','cash_ins.date','cash_outs.admistration as out_admistration', 'cash_outs.entertainment', 'cash_outs.investment_withdraw','cash_outs.total_debit')
                         ->whereMonth('cash_ins.date', $month)
                         ->whereYear('cash_ins.date', $request->year)
                         ->leftJoin('cash_outs', 'cash_ins.member_id', 'cash_outs.member_id')
                         ->orderBy('member_id')
                         ->get();

        $investments = Investment::orderBy('created_at')
                                 ->whereMonth('created_at', $month)
                                 ->whereYear('created_at', $year)
                                 ->get();


        $pdf = PDF::loadView('reports.pdf', compact('reports', 'month', 'year', 'investments'));
        return $pdf->setPaper('a4', 'landscape')->download('myfile.pdf');
    }
}
