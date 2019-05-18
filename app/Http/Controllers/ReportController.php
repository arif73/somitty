<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CashIn;

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

    	$reports = CashIn::select('cash_ins.member_id', 'cash_ins.admistration as in_admistration', 'cash_ins.premium', 'cash_ins.fine', 'cash_ins.profit', 'cash_ins.total_credit', 'cash_ins.comments', 'cash_outs.admistration as out_admistration', 'cash_outs.entertainment', 'cash_outs.others', 'cash_outs.total_debit')
    					 ->whereMonth('cash_ins.date', $month)
    					 ->whereYear('cash_ins.date', $request->year)
    					 ->leftJoin('cash_outs', 'cash_ins.member_id', 'cash_outs.member_id')
    					 ->orderBy('member_id')
    					 ->get();

    	return view('reports.index', compact('reports', 'month', 'year'));
    }
}
