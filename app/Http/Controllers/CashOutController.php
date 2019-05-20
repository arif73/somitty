<?php

namespace App\Http\Controllers;

use App\CashOut;
use App\Member;
use Illuminate\Http\Request;

class CashOutController extends Controller
{
    public function index()
    {	
    	$cash_out = CashOut::all();
    	return view('cash_out.index', compact('cash_out'));
    }

    public function create()
    {	
    	$members = Member::select('members.name', 'members.id')
    					   ->join('users', 'members.user_id', 'users.id')
    					   ->where('users.status', 1)
    					   ->get();
    	return view('cash_out.create', compact('members'));
    }

    public function store(Request $request)
    {	
    	$request->validate([
    	    'member' => 'required',
    	    'date' => 'required',
    	    'admistration' => 'required',
    	    'entertainment' => 'required',
            'investment_withdraw' => 'required',
    	    'others' => 'required',
    	]);

    	$total_debit = $request->admistration + $request->entertainment + $request->investment_withdraw + $request->others;

    	$cash_out = new CashOut;
    	$cash_out->member_id = $request->member;
    	$cash_out->date = $request->date;
    	$cash_out->admistration = $request->admistration;
    	$cash_out->entertainment = $request->entertainment;
        $cash_out->investment_withdraw = $request->investment_withdraw;
    	$cash_out->others = $request->others;
    	$cash_out->total_debit = $total_debit;
    	$cash_out->save();

    	return redirect()->back()->with('msg', 'Cash Out Added!');
    }
}
